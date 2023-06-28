<?php

include("../php/db.php");
// session_start();
include('../components/userfakulti_protected_route.php');
$all_laporan = array();
$all_appprogram_id = array();
$all_program = array();
$all_program_id = array();
$all_program_url = array();
$all_tarikh = array();

if ($stmt = $con->prepare("SELECT `LAPORAN_ID`, `STATUS`, `TARIKH_AWAL`, `TARIKH_AKHIR`, `APPPROGRAM_ID`, `LAMPIRAN_1`, `AKREDASI_PENUH`, `TYPE` FROM `laporan` WHERE TYPE='0' AND `SENTTOUSERFAKULTI` = 'T' order by `APPPROGRAM_ID` ,`TYPE`")) {

   $stmt->execute();
   mysqli_stmt_bind_result($stmt, $laporan_id, $status, $tarikh_awal, $tarikh_akhir, $appprogram_id, $lampiran_1, $akredasi_penuh, $type);

   while (mysqli_stmt_fetch($stmt)) {
      if (!in_array($appprogram_id, $all_appprogram_id)) {
         array_push($all_appprogram_id, $appprogram_id);
      }
      $index = array_search($appprogram_id, $all_appprogram_id);
      if (!isset($all_laporan[$index]))
         $all_laporan[$index][0] = array($laporan_id, $status, $tarikh_awal, $tarikh_akhir, $appprogram_id, $lampiran_1, $akredasi_penuh, $type);
      else
         array_push($all_laporan[$index], array($laporan_id, $status, $tarikh_awal, $tarikh_akhir, $appprogram_id, $lampiran_1, $akredasi_penuh, $type));
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
   if ($stmt = $con->prepare("SELECT t2.`NAMA`, t2.PROGRAM_ID, t1.TARIKH_MASA_KEMASKINI, t2.`URL_DRIVE` FROM `appprogram` t1 LEFT JOIN `program` t2 ON t1.`PROGRAM_ID` = t2.`PROGRAM_ID` WHERE t1.`APPPROGRAM_ID` IN ($whole_arr_str)")) {

      $stmt->execute();
      mysqli_stmt_bind_result($stmt, $nama, $pid, $tk, $url);

      while (mysqli_stmt_fetch($stmt)) {
         array_push($all_program, $nama);
         array_push($all_program_id, $pid);
         array_push($all_program_url, $url);
         array_push($all_tarikh, $tk);
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
   include("../components/navbar_userfakulti.php");
   include("../components/sidebar_userfakulti.php");
   ?>

   <section class="teachers">

      <h1 class="heading">Senarai Maklum Balas yang Diterima</h1>

      <!-- <form action="" method="post" class="search-tutor">
           <input type="text" name="search_box" placeholder="cari laporan..." required maxlength="100">
           <button type="submit" class="fas fa-search" name="search_tutor"></button>
        </form> -->


      <?php
      $today_date = date("Y-m-d");

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
                     echo "<h3>Maklum Balas Pengerusi</h3>";
                  else if ($all_laporan[$ii][$jj][7] == 1)
                     echo "<h3>Maklum Balas Ahli Panel 1</h3>";
                  $current_pid = $all_program_id[$ii];
                  echo "
                  </div>
               </div>
               <p>Status: <span>" . $all_laporan[$ii][$jj][1] . "</span></p>
               <p>Tarikh Awal : <span>" . $all_laporan[$ii][$jj][2] . "</span></p>
               <p>Tarikh Akhir : <span>" . $all_laporan[$ii][$jj][3] . "</span></p>
               <a href=\"./detailprogram_maklum_balas_userfakulti.php?id=" . $all_appprogram_id[$ii] . "&type=0&pid=$current_pid\" class=\"inline-btn\">Lihat</a>
            </div> "; // id=$current_application_id&type=1&pid=$current_pid
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