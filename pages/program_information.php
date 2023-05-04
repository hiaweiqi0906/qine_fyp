<?php
include("../php/db.php");
// session_start();
include('../components/kualitiukm_protected_route.php');

$username = "";
$email = "";
$errors = array();
$id = $_SESSION["id"];

$assigned = false;

$program_id = $_GET["id"];
$program_details = array();
$assigned_program_details = array();
$assigned_app = array();
$list_of_app = array();
date_default_timezone_set("Asia/Kuala_Lumpur");
   $today_date = date("Y-m-d");

// $stmt = $con->prepare("SELECT `APPPROGRAM_ID`, `TARIKH_TERIMA`, `APP_ID_PENGERUSI`, `PROGRAM_ID`, `KUALITIUKM_ID`, `APP_ID_PANEL_1`, `APP_ID_PANEL_2` FROM `appprogram` WHERE 1")
// $stmt = $con->prepare("SELECT `PROGRAM_ID`, `NAMA`, `TARIKH`, `URL_DRIVE`, `BIDANG`, `STATUS`, `DESCRIPTION`, `MASA` FROM `program` WHERE `PROGRAM_ID`='$program_id'")
if ($stmt = $con->prepare("SELECT `APPPROGRAM_ID`, `TARIKH_TERIMA`, `APP_ID_PENGERUSI`, `PROGRAM_ID`, `KUALITIUKM_ID`, `APP_ID_PANEL_1`, `APP_ID_PANEL_2` FROM `appprogram` WHERE `PROGRAM_ID`='$program_id'")) {

   $stmt->execute();
   mysqli_stmt_bind_result($stmt, $app_program_id, $tarikh_terima, $app_id_pengerusi, $program_id, $kualiti_ukm_id, $app_id_panel_1, $app_id_panel_2);
   
// }   /* fetch values */
   while (mysqli_stmt_fetch($stmt)) {
      $assigned = true;
      array_push($assigned_program_details, array($app_program_id, $tarikh_terima, $app_id_pengerusi, $program_id, $kualiti_ukm_id, $app_id_panel_1, $app_id_panel_2));
   }
} else {
   // Something is wrong with the SQL statement, so you must check to make sure your accounts table exists with all 3 fields.
   echo 'Could not prepare statement!';
}

if ($stmt = $con->prepare("SELECT `PROGRAM_ID`, `NAMA`, `TARIKH`, `URL_DRIVE`, `BIDANG`, `STATUS`, `DESCRIPTION`, `MASA` FROM `program` WHERE `PROGRAM_ID`='$program_id'")) {

   $stmt->execute();
   mysqli_stmt_bind_result($stmt, $program_id, $nama, $tarikh, $url_drive, $bidang, $status, $description, $masa);
   
// }   /* fetch values */
   while (mysqli_stmt_fetch($stmt)) {
      array_push($program_details, array($program_id, $nama, $tarikh, $url_drive, $bidang, $status, $description, $masa));
   }
} else {
   // Something is wrong with the SQL statement, so you must check to make sure your accounts table exists with all 3 fields.
   echo 'Could not prepare statement!';
}


if ($stmt = $con->prepare("SELECT `APP_ID`, `NAMA` FROM `app` WHERE 1")) {
   $stmt->execute();
   mysqli_stmt_bind_result($stmt, $app_id, $nama);
   while (mysqli_stmt_fetch($stmt)) {
      array_push($list_of_app, array($app_id, $nama));
   }
} else {
   echo 'Could not prepare statement!';
}


if($assigned){
   for($x=0; $x<count($list_of_app); $x++){
      if($list_of_app[$x][0] == $assigned_program_details[0][2]){
         array_push($assigned_app, array($list_of_app[$x][0], $list_of_app[$x][1]));
      }
   }
   
   for($x=0; $x<count($list_of_app); $x++){
      if($list_of_app[$x][0] == $assigned_program_details[0][5]){
         array_push($assigned_app, array($list_of_app[$x][0], $list_of_app[$x][1]));
      }
   }
   
   for($x=0; $x<count($list_of_app); $x++){
      if($list_of_app[$x][0] == $assigned_program_details[0][6]){
         array_push($assigned_app, array($list_of_app[$x][0], $list_of_app[$x][1]));
      }
   }

   
}

if(isset($_POST['submit'])){
   $pengerusi = $_POST["pengerusi"];
   $panel_1 = $_POST["panel_1"];
   $panel_2 = $_POST["panel_2"];
   $program_id = $program_details[0][0];
   if ($stmt = $con->prepare("INSERT INTO `appprogram`(`APPPROGRAM_ID`, `TARIKH_TERIMA`, `APP_ID_PENGERUSI`, `PROGRAM_ID`, `KUALITIUKM_ID`, `APP_ID_PANEL_1`, `APP_ID_PANEL_2`) 
                                             VALUES ('01','$today_date','$pengerusi','$program_id','$id','$panel_1','$panel_2')")) {
                // We do not want to expose passwords in our database, so hash the password and use password_verify when a user logs in.
                // $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
                // $stmt->bind_param('sss', $_POST['username'], $password, $_POST['email']);
                // $stmt->bindParam(':email', $email, PDO::PARAM_STR);
                $stmt->execute();
                echo 'You have successfully registered! You can now login!';
            } else {
                // Something is wrong with the SQL statement, so you must check to make sure your accounts table exists with all 3 fields.
                echo 'Could not prepare statement!';
            }

   header("location: ./senaraiprogram.php");

}


$con->close();
$stmt->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Senarai Program</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="../style/stylepertanyaan.css">
   <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
   <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
   <script type="text/javascript">
      var apps = <?php echo json_encode($list_of_app); ?>;
   </script>
</head>
<body>

<?php
          include("../components/navbar_kualitiukm.php");
          include("../components/sidebar_kualitiukm.php");
        ?>

     <section class="teachers">

      <h1 class="heading">Senarai Program yang Belum Diagihkan</h1>
   
      <form action="" method="post" class="search-tutor">
         <input type="text" name="search_box" placeholder="cari program..." required maxlength="100">
         <button type="submit" class="fas fa-search" name="search_tutor"></button>
      </form>
   
      <div class="box-container">
  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]),"?id=$id"; ?>?id=$current_application_id" method="post" autocomplete="off" class="sign-in-form"> 

      <?php
      for($i=0; $i<count($program_details); $i++){
         $current_application_id = $program_details[$i][0];
      
         echo "<div class=\"box\">
            <div class=\"tutor\">
               <img src=\"../img/program.jpg\" alt=\"\">
               <div>
                  <h3>Nama Program: ",$program_details[$i][1],"</h3>
                  <span>Tarikh Terima: ",$program_details[$i][2],"</span>
               </div>
            </div>
            
            <p>Tarikh: <span>",$program_details[$i][2],"</span></p>
            <p>Masa : <span>",$program_details[$i][7],"</span></p>
            <p>Status : <span>",$program_details[$i][5],"</span></p>
            
            <p><label for=\"pengerusi\">Pengerusi:</label></p>

            <select name=\"pengerusi\" id=\"pengerusi\">
            ";
            if($assigned){
               echo "<option value='",$assigned_app[0][0],"' selected>", $assigned_app[0][1], "</option>";
            }
            for($y=0; $y<count($list_of_app); $y++){
               echo "<option value='",$list_of_app[$y][0],"'>", $list_of_app[$y][1], "</option>";
            }
            
            echo "</select>

            <p><label for=\"panel_1\">Ahli Panel 1:</label></p>

            <select name=\"panel_1\" id=\"panel_1\">
            ";
            if($assigned){
               echo "<option value='",$assigned_app[1][0],"' selected>", $assigned_app[1][1], "</option>";
            }
            for($y=0; $y<count($list_of_app); $y++){
               echo "<option value='",$list_of_app[$y][0],"'>", $list_of_app[$y][1], "</option>";
            }
            
            echo "</select>

            <p><label for=\"panel_2\">Ahli Panel 2:</label></p>

            <select name=\"panel_2\" id=\"panel_2\">
            ";
            if($assigned){
               echo "<option value='",$assigned_app[2][0],"' selected>", $assigned_app[2][1], "</option>";
            }
            for($y=0; $y<count($list_of_app); $y++){
               echo "<option value='",$list_of_app[$y][0],"'>", $list_of_app[$y][1], "</option>";
            }
            
            echo "</select>

         </div>";
      }
      if(!$assigned){
         echo "<input type=\"submit\" class=\"btn\" name=\"submit\" value=\"Daftar\" required>";

      }
      ?>
  </form>
   
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