<?php

// Initialize the session
// session_start();
include('../components/admin_protected_route.php');

// Include config file
require_once "../php/db.php";

// Define variables and initialize with empty values

$id = $_SESSION["id"];
$aid = $_GET["aid"];
$user = array();

if ($stmt = $con->prepare("SELECT `APP_ID`, `NAMA`, `NO_KP`, `FAKULTI`, `EMEL`, `ALAMAT`, `NO_TELEFON`, `URL_AVATAR`, `PASSWORD`, `BIDANG` FROM app WHERE APP_ID = '$aid' ")) {
  $stmt->execute();
  mysqli_stmt_bind_result($stmt, $app_id, $nama, $no_kp, $fakulti, $emel, $alamat, $no_telefon, $url_avatar, $password, $bidang);
  while (mysqli_stmt_fetch($stmt)) {
    array_push($user, array($app_id, $nama, $no_kp, $fakulti, $emel, $alamat, $no_telefon, $url_avatar, $password, $bidang));
  }
} else {
  // Something is wrong with the SQL statement, so you must check to make sure your accounts table exists with all 3 fields.
  echo 'Could not prepare statement!';
}

$con->close();
// header("location: dashboard.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profil</title>

  <!-- font awesome cdn link  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

  <!-- custom css file link  -->
  <link rel="stylesheet" href="../style/styleform.css">
  <link rel="stylesheet" href="../style/stylepertanyaan.css">
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
</head>

<body>

  <?php
  include("../components/navbar_admin.php");
  include("../components/sidebar_admin.php");
  ?>

  <div class="main-body">
      <?php
      include("./form_profil_app.php");
      ?>



  </div>

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