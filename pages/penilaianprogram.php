<?php
include("../php/db.php");
// session_start();
include('../components/app_protected_route.php');

$username = "";
$email = "";
$errors = array();
$id = $_SESSION["id"];
// echo $id;

$list_of_program_app = array();
$list_of_program_panel_1 = array();

$penilaian_info = array();

if ($stmt = $con->prepare("SELECT t1.* FROM program t1 left join appprogram t2 on t1.PROGRAM_ID = t2.PROGRAM_ID WHERE t2.APP_ID_PENGERUSI  = '$id'")) {

   $stmt->execute();
   mysqli_stmt_bind_result($stmt, $program_id, $nama, $tarikh, $url_drive, $bidang, $status, $description, $masa, $uploadedby);

   while (mysqli_stmt_fetch($stmt)) {
      array_push($list_of_program_app, array($program_id, $nama, $tarikh, $url_drive, $bidang, $status, $description, $masa, $uploadedby));
   }
} else {
   // Something is wrong with the SQL statement, so you must check to make sure your accounts table exists with all 3 fields.
   echo 'Could not prepare statement!';
}

if ($stmt = $con->prepare("SELECT t1.* FROM program t1 left join appprogram t2 on t1.PROGRAM_ID = t2.PROGRAM_ID WHERE t2.APP_ID_PANEL_1 = '$id'")) {

   $stmt->execute();
   mysqli_stmt_bind_result($stmt, $program_id, $nama, $tarikh, $url_drive, $bidang, $status, $description, $masa, $uploadedby);

   while (mysqli_stmt_fetch($stmt)) {
      array_push($list_of_program_panel_1, array($program_id, $nama, $tarikh, $url_drive, $bidang, $status, $description, $masa, $uploadedby));
   }
} else {
   // Something is wrong with the SQL statement, so you must check to make sure your accounts table exists with all 3 fields.
   echo 'Could not prepare statement!';
}

if ($stmt = $con->prepare("SELECT `APPPROGRAM_ID`, `TARIKH_TERIMA`, `APP_ID_PENGERUSI`, `PROGRAM_ID`, `KUALITIUKM_ID`, `APP_ID_PANEL_1`, `TARIKH_MASA_KEMASKINI` FROM `appprogram` WHERE `APP_ID_PENGERUSI` = '$id'")) {

   $stmt->execute();
   mysqli_stmt_bind_result($stmt, $app_program_id, $tarikh_terima, $app_id_pengerusi, $program_id, $kualitiukm_id, $app_id_panel_1, $tarikh_masa_kemaskini);

   while (mysqli_stmt_fetch($stmt)) {
      array_push($penilaian_info, array($app_program_id, $tarikh_terima, $app_id_pengerusi, $program_id, $kualitiukm_id, $app_id_panel_1, $tarikh_masa_kemaskini));
   }
} else {
   // Something is wrong with the SQL statement, so you must check to make sure your accounts table exists with all 3 fields.
   echo 'Could not prepare statement!';
}

if ($stmt = $con->prepare("SELECT `APPPROGRAM_ID`, `TARIKH_TERIMA`, `APP_ID_PENGERUSI`, `PROGRAM_ID`, `KUALITIUKM_ID`, `APP_ID_PANEL_1`, `TARIKH_MASA_KEMASKINI` FROM `appprogram` WHERE `APP_ID_PANEL_1` = '$id'")) {

   $stmt->execute();
   mysqli_stmt_bind_result($stmt, $app_program_id, $tarikh_terima, $app_id_pengerusi, $program_id, $kualitiukm_id, $app_id_panel_1, $tarikh_masa_kemaskini);

   while (mysqli_stmt_fetch($stmt)) {
      array_push($penilaian_info, array($app_program_id, $tarikh_terima, $app_id_pengerusi, $program_id, $kualitiukm_id, $app_id_panel_1, $tarikh_masa_kemaskini));
   }
} else {
   // Something is wrong with the SQL statement, so you must check to make sure your accounts table exists with all 3 fields.
   echo 'Could not prepare statement!';
}

$done_report = array([], [], []);

if ($stmt = $con->prepare("SELECT t1.`APPPROGRAM_ID`, t1.`TARIKH_EFEKTIF` FROM `laporan` t1 LEFT JOIN appprogram t2 on t1.APPPROGRAM_ID = t2.APPPROGRAM_ID WHERE t2.`APP_ID_PENGERUSI` = '$id' AND t1.TYPE = '0'")) {
   //
   $stmt->execute();
   mysqli_stmt_bind_result($stmt, $app_program_id, $tarikh_efektif);

   while (mysqli_stmt_fetch($stmt)) {
      //
      array_push($done_report[0], $app_program_id, $tarikh_efektif);
   }

} else {
   // Something is wrong with the SQL statement, so you must check to make sure your accounts table exists with all 3 fields.
   echo 'Could not prepare statement!';
}

if ($stmt = $con->prepare("SELECT t1.`APPPROGRAM_ID`, t1.`TARIKH_EFEKTIF` FROM `laporan` t1 LEFT JOIN appprogram t2 on t1.APPPROGRAM_ID = t2.APPPROGRAM_ID WHERE t2.`APP_ID_PANEL_1` = '$id' AND t1.TYPE = '1'")) {

   $stmt->execute();
   mysqli_stmt_bind_result($stmt, $app_program_id, $tarikh_efektif);

   while (mysqli_stmt_fetch($stmt)) {
      array_push($done_report[1], $app_program_id, $tarikh_efektif);
   }
} else {
   // Something is wrong with the SQL statement, so you must check to make sure your accounts table exists with all 3 fields.
   echo 'Could not prepare statement!';
}

$pos_belum_selesai = array();
$pos_sudah_selesai = array();

$tracker = 0;
$max = count($penilaian_info);
while ($tracker < $max) {
   if ($tracker < count($done_report[0])) {
      if (in_array($penilaian_info[$tracker][0], $done_report[0])) {
         array_push($pos_sudah_selesai, $tracker);
      } else {
         array_push($pos_belum_selesai, $tracker);
      }
   } else if ($tracker < count($done_report[0]) + count($done_report[1])) {
      if (in_array($penilaian_info[$tracker][0], $done_report[1])) {
         array_push($pos_sudah_selesai, $tracker);
      } else {
         array_push($pos_belum_selesai, $tracker);
      }
   } else {
      if (in_array($penilaian_info[$tracker][0], $done_report[2])) {
         array_push($pos_sudah_selesai, $tracker);
      } else {
         array_push($pos_belum_selesai, $tracker);
      }
   }

   $tracker++;
}

$con->close();
$stmt->close();

$j = 0;
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Penilaian Program</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="../style/stylepertanyaan.css">
   <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
   <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
</head>

<body>

   <?php
   include("../components/navbar_app.php");
   include("../components/sidebar_app.php");
   include("../components/pengumuman.php");

   ?>


   <section class="courses">

      <h1 class="heading">Senarai Tugasan yang Belum Selesai</h1>

      <div class="box-container">
         <?php
         for ($i = 0; $i < count($list_of_program_app); $i++, $j++) {
            if (in_array($i, $pos_belum_selesai)) {
               $current_pid = $list_of_program_app[$i][0];

               $current_application_id = $penilaian_info[$j][0];
               echo "<div class=\"box\">
      <div class=\"tutor\">";
      if(isset($list_of_program_app[$i][3])){
         echo "<img src=\"".$list_of_program_app[$i][3]."\" alt=\"\">";

      }else {
                  echo "<img src=\"../img/program.jpg\" alt=\"\">";

      }
      echo "
         <div>
            <h3>Nama Program: ", $list_of_program_app[$i][1], "</h3>
            <span>Tarikh Kemaskini: ", $penilaian_info[$j][6], "</span>
         </div>
      </div>

      <p>Jawatan: <span>Pengerusi</span></p>
      <p>Tarikh: <span>", $list_of_program_app[$i][2], "</span></p>
      <p>URL Fail Program : <span>", $list_of_program_app[$i][7], "</span></p>
      <p>Status : <span>", $list_of_program_app[$i][5], "</span></p>
      <a href=\"./detailprogram.php?id=$current_application_id&type=0&pid=$current_pid\" class=\"inline-btn\">Lihat</a>
   </div>";
            }
         }

         for ($i = 0; $i < count($list_of_program_panel_1); $i++, $j++) {
            if (in_array($i + count($list_of_program_app), $pos_belum_selesai)) {
               $current_pid = $list_of_program_panel_1[$i][0];

               $current_application_id = $penilaian_info[$j][0];
               echo "<div class=\"box\">
      <div class=\"tutor\">";
      if(isset($list_of_program_app[$i][3])){
         echo "<img src=\"".$list_of_program_app[$i][3]."\" alt=\"\">";

      }else {
                  echo "<img src=\"../img/program.jpg\" alt=\"\">";

      }
      echo "
         <div>
            <h3>Nama Program: ", $list_of_program_panel_1[$i][1], "</h3>
            <span>Tarikh Kemaskini: ", $penilaian_info[$j][6], "</span>
         </div>
      </div>

      <p>Jawatan: <span>Ahli Panel 1</span></p>
      <p>Tarikh: <span>", $list_of_program_panel_1[$i][2], "</span></p>
      <p>URL Fail Program : <span>", $list_of_program_panel_1[$i][7], "</span></p>
      <p>Status : <span>", $list_of_program_panel_1[$i][5], "</span></p>
      <a href=\"./detailprogram.php?id=$current_application_id&type=1&pid=$current_pid\" class=\"inline-btn\">Lihat</a>
   </div>";
            }
         }


         $j = 0;
         ?>

      </div>

      <br>
      <h1 class="heading">Senarai Tugasan yang Sudah Selesai</h1>

      <div class="box-container">
         <?php
         $today_date = date("Y-m-d");
         // $effectiveDate = date('Y-m-d', strtotime("+6 months", strtotime($today_date)));
         // echo '-->' . strtotime($today_date) . '<---->' . strtotime($effectiveDate);
         for ($i = 0; $i < count($list_of_program_app); $i++, $j++) {
            if (in_array($i, $pos_sudah_selesai)) {
               if (strtotime($today_date)  < strtotime(date('Y-m-d', strtotime("+6 months", strtotime($penilaian_info[$j][6]))))) {
                  $current_application_id = $penilaian_info[$j][0];
                  $current_pid = $list_of_program_app[$i][0];
                  echo "<div class=\"box\">
               <div class=\"tutor\">
               ";
               if(isset($list_of_program_app[$i][3])){
                  echo "<img src=\"".$list_of_program_app[$i][3]."\" alt=\"\">";

               }else {
                           echo "<img src=\"../img/program.jpg\" alt=\"\">";

               }
               echo "                  <div>
                     <h3>Nama Program: ", $list_of_program_app[$i][1], "</h3>
                     <span>Tarikh Kemaskini: ", $penilaian_info[$j][6], "</span>
                  </div>
               </div>

               <p>Jawatan: <span>Pengerusi</span></p>
               <p>Tarikh: <span>", $list_of_program_app[$i][2], "</span></p>
               <p>URL Fail Program : <span>", $list_of_program_app[$i][7], "</span></p>
               <p>Status : <span>", $list_of_program_app[$i][5], "</span></p>
               <a href=\"./other_people_laporan.php?id=$current_application_id&type=0&pid=$current_pid\" class=\"inline-btn\">Lihat</a>
            </div>";
               }
            }
         }

         for ($i = 0; $i < count($list_of_program_panel_1); $i++, $j++) {
            if (in_array($i + count($list_of_program_app), $pos_sudah_selesai)) {
               if (strtotime($today_date)  < strtotime(date('Y-m-d', strtotime("+6 months", strtotime($penilaian_info[$j][6]))))) {

                  $current_application_id = $penilaian_info[$j][0];
                  $current_pid = $list_of_program_panel_1[$i][0];
                  echo "<div class=\"box\">
            <div class=\"tutor\">
            ";
            if(isset($list_of_program_app[$i][3])){
               echo "<img src=\"".$list_of_program_app[$i][3]."\" alt=\"\">";

            }else {
                        echo "<img src=\"../img/program.jpg\" alt=\"\">";

            }
            echo "               <div>
                  <h3>Nama Program: ", $list_of_program_panel_1[$i][1], "</h3>
                  <span>Tarikh Kemaskini: ", $penilaian_info[$j][6], "</span>
               </div>
            </div>

            <p>Jawatan: <span>Ahli Panel 1</span></p>
            <p>Tarikh: <span>", $list_of_program_panel_1[$i][2], "</span></p>
            <p>URL Fail Program : <span>", $list_of_program_panel_1[$i][7], "</span></p>
            <p>Status : <span>", $list_of_program_panel_1[$i][5], "</span></p>
            <a href=\"./other_people_laporan.php?id=$current_application_id&type=1&pid=$current_pid\" class=\"inline-btn\">Lihat</a>
         </div>";
               }
            }
         }


         ?>

      </div>
      <br>
      <h1 class="heading">Senarai Tugasan yang Perlukan Tindak Balas</h1>

      <div class="box-container">
         <?php
         $j=0;
         $today_date = date("Y-m-d");
         // $effectiveDate = date('Y-m-d', strtotime("+6 months", strtotime($today_date)));
         // echo '-->' . strtotime($today_date) . '<---->' . strtotime($effectiveDate);
         for ($i = 0; $i < count($list_of_program_app); $i++, $j++) {
            if (in_array($i, $pos_sudah_selesai)) {
               if (strtotime($today_date) >= strtotime(date('Y-m-d', strtotime("+6 months", strtotime($penilaian_info[$j][6]))))) {


                  $current_application_id = $penilaian_info[$j][0];
                  $current_pid = $list_of_program_app[$i][0];
                  echo "<div class=\"box\">
               <div class=\"tutor\">
               ";
               if(isset($list_of_program_app[$i][3])){
                  echo "<img src=\"".$list_of_program_app[$i][3]."\" alt=\"\">";

               }else {
                           echo "<img src=\"../img/program.jpg\" alt=\"\">";

               }
               echo "                  <div>
                     <h3>Nama Program: ", $list_of_program_app[$i][1], "</h3>
                     <span>Tarikh Kemaskini: ", $penilaian_info[$j][6], "</span>
                  </div>
               </div>

               <p>Jawatan: <span>Pengerusi</span></p>
               <p>Tarikh: <span>", $list_of_program_app[$i][2], "</span></p>
               <p>URL Fail Program : <span>", $list_of_program_app[$i][7], "</span></p>
               <p>Status : <span>", $list_of_program_app[$i][5], "</span></p>
               <a href=\"./detailprogram_maklum_balas.php?id=$current_application_id&type=0&pid=$current_pid\" class=\"inline-btn\">Lihat</a>
            </div>";
               }
            }
         }

         for ($i = 0; $i < count($list_of_program_panel_1); $i++, $j++) {
            if (in_array($i + count($list_of_program_app), $pos_sudah_selesai)) {
               if (strtotime($today_date)  >= strtotime(date('Y-m-d', strtotime("+6 months", strtotime($penilaian_info[$j][6]))))) {


                  $current_application_id = $penilaian_info[$j][0];
                  $current_pid = $list_of_program_panel_1[$i][0];
                  echo "<div class=\"box\">
            <div class=\"tutor\">
            ";
            if(isset($list_of_program_app[$i][3])){
               echo "<img src=\"".$list_of_program_app[$i][3]."\" alt=\"\">";

            }else {
                        echo "<img src=\"../img/program.jpg\" alt=\"\">";

            }
            echo "               <div>
                  <h3>Nama Program: ", $list_of_program_panel_1[$i][1], "</h3>
                  <span>Tarikh Kemaskini: ", $penilaian_info[$j][6], "</span>
               </div>
            </div>

            <p>Jawatan: <span>Ahli Panel 1</span></p>
            <p>Tarikh: <span>", $list_of_program_panel_1[$i][2], "</span></p>
            <p>URL Fail Program : <span>", $list_of_program_panel_1[$i][7], "</span></p>
            <p>Status : <span>", $list_of_program_panel_1[$i][5], "</span></p>
            <a href=\"./detailprogram_maklum_balas.php?id=$current_application_id&type=1&pid=$current_pid\" class=\"inline-btn\">Lihat</a>
         </div>";
               }
            }
         }


         ?>

      </div>


   </section>

   <?php
          include("../components/footer.php");
        ?>

   <script src="../js/script.js"></script>

</body>

</html>