<?php

include("../php/db.php");
// session_start();
include('../components/kualitiukm_protected_route.php');
$all_laporan = array();
$all_appprogram_id = array();
$all_program = array();
$all_program_url = array();
$all_program_id = array();

if ($stmt = $con->prepare("SELECT `LAPORAN_ID`, `STATUS`, `TARIKH_AWAL`, `TARIKH_AKHIR`, `APPPROGRAM_ID`, `LAMPIRAN_1`, `AKREDASI_PENUH`, `TYPE`, `SENTTOUSERFAKULTI` FROM `laporan` WHERE TYPE='0' order by `APPPROGRAM_ID` ,`TYPE`")) {

   $stmt->execute();
   mysqli_stmt_bind_result($stmt, $laporan_id, $status, $tarikh_awal, $tarikh_akhir, $appprogram_id, $lampiran_1, $akredasi_penuh, $type, $senttouserfakulti);

   while (mysqli_stmt_fetch($stmt)) {
      if (!in_array($appprogram_id, $all_appprogram_id)) {
         array_push($all_appprogram_id, $appprogram_id);
      }
      $index = array_search($appprogram_id, $all_appprogram_id);
      if (!isset($all_laporan[$index]))
         $all_laporan[$index][0] = array($laporan_id, $status, $tarikh_awal, $tarikh_akhir, $appprogram_id, $lampiran_1, $akredasi_penuh, $type, $senttouserfakulti);
      else
         array_push($all_laporan[$index], array($laporan_id, $status, $tarikh_awal, $tarikh_akhir, $appprogram_id, $lampiran_1, $akredasi_penuh, $type, $senttouserfakulti));
   }
} else {
   // Something is wrong with the SQL statement, so you must check to make sure your accounts table exists with all 3 fields.
   echo 'Could not prepare statement!';
}

if (isset($all_appprogram_id[0])) {
   $whole_arr_str = $all_appprogram_id[0];
   for ($yy = 1; $yy < count($all_appprogram_id) - 1; $yy++) {
      $whole_arr_str = $whole_arr_str . "," . $all_appprogram_id[$yy];
   }
   $whole_arr_str = $whole_arr_str . "," . $all_appprogram_id[count($all_appprogram_id) - 1];
   if ($stmt = $con->prepare("SELECT t2.`NAMA`, t2.`URL_DRIVE`, t2.PROGRAM_ID FROM `appprogram` t1 LEFT JOIN `program` t2 ON t1.`PROGRAM_ID` = t2.`PROGRAM_ID` WHERE t1.`APPPROGRAM_ID` IN ($whole_arr_str)")) {

      $stmt->execute();
      mysqli_stmt_bind_result($stmt, $nama, $url, $idd);

      while (mysqli_stmt_fetch($stmt)) {
         array_push($all_program, $nama);
         array_push($all_program_url, $url);
         array_push($all_program_id, $idd);
      }
   } else {
      // Something is wrong with the SQL statement, so you must check to make sure your accounts table exists with all 3 fields.
      echo 'Could not prepare statement!';
   }

   // search all program

}

?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Senarai Laporan</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="../style/stylepertanyaan.css">
   <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
   <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
</head>

<body>

   <?php
   include("../components/navbar_kualitiukm.php");
   include("../components/sidebar_kualitiukm.php");
   ?>

   <section class="teachers">

      <h1 class="heading">Senarai Laporan yang Diterima</h1>

      <!-- <form action="" method="post" class="search-tutor">
           <input type="text" name="search_box" placeholder="cari laporan..." required maxlength="100">
           <button type="submit" class="fas fa-search" name="search_tutor"></button>
        </form> -->


      <?php

      if (isset($all_appprogram_id)) {

         for ($ii = 0; $ii < count($all_program); $ii++) {
            echo "<h2>" . $all_program[$ii] . "</h2><div class=\"box-container\">";
            for ($jj = 0; $jj < count($all_laporan[$ii]); $jj++) {
               echo "<div class=\"box\">
               <div class=\"tutor\">
               ";
               if (isset($all_program_url[$ii])) {
                  echo "<img src=\"" . $all_program_url[$ii] . "\" alt=\"\">";

               } else {
                  echo "<img src=\"../img/program.jpg\" alt=\"\">";

               }
               echo "                  <div>";
               if ($all_laporan[$ii][$jj][7] == 0)
                  echo "<h3>Laporan Pengerusi</h3>";
               else if ($all_laporan[$ii][$jj][7] == 1)
                  echo "<h3>Laporan Ahli Panel 1</h3>";
               echo "
                  </div>
               </div>
               <p>Status: <span>" . $all_laporan[$ii][$jj][1] . "</span></p>
               <p>Tarikh Awal : <span>" . $all_laporan[$ii][$jj][2] . "</span></p>
               <p>Tarikh Akhir : <span>" . $all_laporan[$ii][$jj][3] . "</span></p>
               <a href=\"./other_people_laporan_kualitiukm.php?id=" . $all_appprogram_id[$ii] . "&type=" . $all_laporan[$ii][$jj][7] . "&pid=$all_program_id[$ii]\" class=\"inline-btn\">Lihat</a>
";
               if ($all_laporan[$ii][$jj][8] == "F")
                  echo "<a href=\"../functions/send_to_userfakulti.php?id=" . $all_appprogram_id[$ii] . "&lid=" . $all_laporan[$ii][$jj][0] . "&pid=$all_program_id[$ii]\" class=\"inline-btn\">Hantar</a>";
               else
                  echo "Sudah Hantar";
               echo "</div> ";
            }
            for ($ji = 0; $ji < 3 - count($all_laporan[$ii]); $ji++) {
               echo "<div></div>";
            }
            echo "</div>";
         }
      }
      ?>



   </section>

   <?php
   include("../components/footer.php");
   ?>

   <script src="../js/script.js"></script>

</body>

</html>