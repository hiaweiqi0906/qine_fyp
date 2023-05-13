<?php
include("../php/db.php");
// session_start();
include('../components/app_protected_route.php');

$username = "";
$email = "";
$errors = array();
$id = $_SESSION["id"];

$list_of_program_app = array();
$list_of_program_panel_1 = array();
$list_of_program_panel_2 = array();

$penilaian_info = array();

if ($stmt = $con->prepare("SELECT t1.* FROM program t1 left join appprogram t2 on t1.PROGRAM_ID = t2.PROGRAM_ID WHERE t2.APP_ID_PENGERUSI = '$id'")) {

   $stmt->execute();
   mysqli_stmt_bind_result($stmt, $program_id, $nama, $tarikh, $url_drive, $bidang, $status, $description, $masa);
   
   while (mysqli_stmt_fetch($stmt)) {
      array_push($list_of_program_app, array($program_id, $nama, $tarikh, $url_drive, $bidang, $status, $description, $masa));
   }
} else {
   // Something is wrong with the SQL statement, so you must check to make sure your accounts table exists with all 3 fields.
   echo 'Could not prepare statement!';
}

if ($stmt = $con->prepare("SELECT t1.* FROM program t1 left join appprogram t2 on t1.PROGRAM_ID = t2.PROGRAM_ID WHERE t2.APP_ID_PANEL_1 = '$id'")) {

   $stmt->execute();
   mysqli_stmt_bind_result($stmt, $program_id, $nama, $tarikh, $url_drive, $bidang, $status, $description, $masa);
   
   while (mysqli_stmt_fetch($stmt)) {
      array_push($list_of_program_panel_1, array($program_id, $nama, $tarikh, $url_drive, $bidang, $status, $description, $masa));
   }
} else {
   // Something is wrong with the SQL statement, so you must check to make sure your accounts table exists with all 3 fields.
   echo 'Could not prepare statement!';
}

if ($stmt = $con->prepare("SELECT t1.* FROM program t1 left join appprogram t2 on t1.PROGRAM_ID = t2.PROGRAM_ID WHERE t2.APP_ID_PANEL_2 = '$id'")) {

   $stmt->execute();
   mysqli_stmt_bind_result($stmt, $program_id, $nama, $tarikh, $url_drive, $bidang, $status, $description, $masa);
   
   while (mysqli_stmt_fetch($stmt)) {
      array_push($list_of_program_panel_2, array($program_id, $nama, $tarikh, $url_drive, $bidang, $status, $description, $masa));
   }
} else {
   // Something is wrong with the SQL statement, so you must check to make sure your accounts table exists with all 3 fields.
   echo 'Could not prepare statement!';
}

if ($stmt = $con->prepare("SELECT `APPPROGRAM_ID`, `TARIKH_TERIMA`, `APP_ID_PENGERUSI`, `PROGRAM_ID`, `KUALITIUKM_ID`, `APP_ID_PANEL_1`, `APP_ID_PANEL_2`, `TARIKH_MASA_KEMASKINI` FROM `appprogram` WHERE `APP_ID_PENGERUSI` = '$id'")) {

   $stmt->execute();
   mysqli_stmt_bind_result($stmt, $app_program_id, $tarikh_terima, $app_id_pengerusi, $program_id, $kualitiukm_id, $app_id_panel_1, $app_id_panel_2, $tarikh_masa_kemaskini);
   
   while (mysqli_stmt_fetch($stmt)) {
      array_push($penilaian_info, array($app_program_id, $tarikh_terima, $app_id_pengerusi, $program_id, $kualitiukm_id, $app_id_panel_1, $app_id_panel_2, $tarikh_masa_kemaskini));
   }
} else {
   // Something is wrong with the SQL statement, so you must check to make sure your accounts table exists with all 3 fields.
   echo 'Could not prepare statement!';
}

if ($stmt = $con->prepare("SELECT `APPPROGRAM_ID`, `TARIKH_TERIMA`, `APP_ID_PENGERUSI`, `PROGRAM_ID`, `KUALITIUKM_ID`, `APP_ID_PANEL_1`, `APP_ID_PANEL_2`, `TARIKH_MASA_KEMASKINI` FROM `appprogram` WHERE `APP_ID_PANEL_1` = '$id'")) {

   $stmt->execute();
   mysqli_stmt_bind_result($stmt, $app_program_id, $tarikh_terima, $app_id_pengerusi, $program_id, $kualitiukm_id, $app_id_panel_1, $app_id_panel_2, $tarikh_masa_kemaskini);
   
   while (mysqli_stmt_fetch($stmt)) {
      array_push($penilaian_info, array($app_program_id, $tarikh_terima, $app_id_pengerusi, $program_id, $kualitiukm_id, $app_id_panel_1, $app_id_panel_2, $tarikh_masa_kemaskini));
   }
} else {
   // Something is wrong with the SQL statement, so you must check to make sure your accounts table exists with all 3 fields.
   echo 'Could not prepare statement!';
}

if ($stmt = $con->prepare("SELECT `APPPROGRAM_ID`, `TARIKH_TERIMA`, `APP_ID_PENGERUSI`, `PROGRAM_ID`, `KUALITIUKM_ID`, `APP_ID_PANEL_1`, `APP_ID_PANEL_2`, `TARIKH_MASA_KEMASKINI` FROM `appprogram` WHERE `APP_ID_PANEL_2` = '$id'")) {

   $stmt->execute();
   mysqli_stmt_bind_result($stmt, $app_program_id, $tarikh_terima, $app_id_pengerusi, $program_id, $kualitiukm_id, $app_id_panel_1, $app_id_panel_2, $tarikh_masa_kemaskini);
   
   while (mysqli_stmt_fetch($stmt)) {
      array_push($penilaian_info, array($app_program_id, $tarikh_terima, $app_id_pengerusi, $program_id, $kualitiukm_id, $app_id_panel_1, $app_id_panel_2, $tarikh_masa_kemaskini));
   }
} else {
   // Something is wrong with the SQL statement, so you must check to make sure your accounts table exists with all 3 fields.
   echo 'Could not prepare statement!';
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

 ?>

     
     <section class="courses">

      <h1 class="heading">Senarai Tugasan yang Belum Selesai</h1>
   
      <div class="box-container">
      <?php
      for($i=0; $i<count($list_of_program_app); $i++, $j++){
         $current_application_id = $list_of_program_app[$i][0];      
         echo "<div class=\"box\">
            <div class=\"tutor\">
               <img src=\"../img/program.jpg\" alt=\"\">
               <div>
                  <h3>Nama Program: ",$list_of_program_app[$i][1],"</h3>
                  <span>Tarikh Kemaskini: ",$penilaian_info[$j][7],"</span>
               </div>
            </div>
            
            <p>Jawatan: <span>Pengerusi</span></p>
            <p>Tarikh: <span>",$list_of_program_app[$i][2],"</span></p>
            <p>Masa : <span>",$list_of_program_app[$i][7],"</span></p>
            <p>Status : <span>",$list_of_program_app[$i][5],"</span></p>
            <a href=\"./detailprogram.php?id=$current_application_id&type=0\" class=\"inline-btn\">Lihat</a>
         </div>";
      }

      for($i=0; $i<count($list_of_program_panel_1); $i++, $j++){
         $current_application_id = $list_of_program_panel_1[$i][0];      
         echo "<div class=\"box\">
            <div class=\"tutor\">
               <img src=\"../img/program.jpg\" alt=\"\">
               <div>
                  <h3>Nama Program: ",$list_of_program_panel_1[$i][1],"</h3>
                  <span>Tarikh Kemaskini: ",$penilaian_info[$j][7],"</span>
               </div>
            </div>
            
            <p>Jawatan: <span>Ahli Panel 1</span></p>
            <p>Tarikh: <span>",$list_of_program_panel_1[$i][2],"</span></p>
            <p>Masa : <span>",$list_of_program_panel_1[$i][7],"</span></p>
            <p>Status : <span>",$list_of_program_panel_1[$i][5],"</span></p>
            <a href=\"./detailprogram.php?id=$current_application_id&type=1\" class=\"inline-btn\">Lihat</a>
         </div>";
      }

      for($i=0; $i<count($list_of_program_panel_2); $i++, $j++){
         $current_application_id = $list_of_program_panel_2[$i][0];      
         echo "<div class=\"box\">
            <div class=\"tutor\">
               <img src=\"../img/program.jpg\" alt=\"\">
               <div>
                  <h3>Nama Program: ",$list_of_program_panel_2[$i][1],"</h3>
                  <span>Tarikh Kemaskini: ",$penilaian_info[$j][7],"</span>
               </div>
            </div>
            <p>Jawatan: <span>Ahli Panel 2</span></p>
            
            <p>Tarikh: <span>",$list_of_program_panel_2[$i][2],"</span></p>
            <p>Masa : <span>",$list_of_program_panel_2[$i][7],"</span></p>
            <p>Status : <span>",$list_of_program_panel_2[$i][5],"</span></p>
            <a href=\"./detailprogram.php?id=$current_application_id&type=2\" class=\"inline-btn\">Lihat</a>
         </div>";
      }
      ?>
   
      </div><!-- <div class="box">
            <div class="tutor">
               <img src="../img/program.jpg" alt="">
               <div class="info">
                  <h3>Nama Program</h3>
                  <span>Last Submit: 01-06-2023</span>
               </div>
            </div>
            <h3 class="title"></h3>
            <a href="./detailprogram.php" class="inline-btn">Lihat Progres</a>
         </div> -->
   
      <div class="more-btn">
         <a href="#" class="inline-option-btn">Lihat Semua Program</a>
      </div>
   
   </section>

    <footer>
		<ul class="footer-icons">
		  <li><a href="#"><ion-icon name="call-outline"></ion-icon></a></li>
		  <li><a href="#"><ion-icon name="mail-outline"></ion-icon></a></li>
		</ul>
  
		<ul class="footer-menu">
		  <li><a href="">Disclaimer</a></li>
		  <li><a href="">Privacy Policy</a></li>
		  <li><a href="">Personal Data Protection</a></li>
		</ul>
  
		<div class="footer-copyright">
		  <p>HakCipta @ 2023 Universiti Kebangsaan Malaysia.</p>
		</div>
	  </footer>

     <script src="../js/script.js"></script>

</body>
</html>