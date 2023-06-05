<?php

// Initialize the session
// session_start();
include('../components/admin_protected_route.php');

// Include config file
require_once "../php/db.php";

// Define variables and initialize with empty values

$id = $_SESSION["id"];

if (isset($_POST['submit'])) {


  //  $gelaran = $_POST["gelaran"];
  $nama = $_POST["nama"];
  $kategori = $_POST["kategori"];
  $no_kad_pengenalan = $_POST["no-kad-pengenalan"];
  $emel = $_POST["emel"];
  $password1 = $_POST["password1"];
  $alamat_tempat_bekerja = $_POST["alamat-tempat-bekerja"];
  //  $poskod = $_POST["poskod"];
//  $daerah = $_POST["daerah"];
  $fakulti = $_POST["fakulti"];
  $bidang = $_POST["bidang"];
  //  $negeri = $_POST["negeri"];
//  $no_tel_pejabat = $_POST["no-tel-pejabat"];
  $no_tel_bimbit = $_POST["no-tel-bimbit"];

  date_default_timezone_set("Asia/Kuala_Lumpur");
  $today_date = date("Y-m-d");
  $now_time = date("h:i:sa");

  $stmt1 = "INSERT INTO app (`EMEL`, `PASSWORD`, `NO_KP`, `KATEGORI`, `FAKULTI`, `BIDANG`, `NAMA`, `ALAMAT`, `NO_TELEFON`) VALUES('$emel', '$password1', '$no_kad_pengenalan', '$kategori', '$fakulti', '$bidang', '$nama', '$alamat_tempat_bekerja', '$no_tel_bimbit')";

  if ($stmt = $con->prepare($stmt1)) {

    $stmt->execute();
    header("location: dashboard.php");

  } else {
    // Something is wrong with the SQL statement, so you must check to make sure your accounts table exists with all 3 fields.
    echo 'Could not prepare statement!';
  }

  $stmt->close();


}


$con->close();

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
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" autocomplete="off"
      enctype="multipart/form-data" class="sign-in-form">
      <?php
      include("./form_profil_add_app.php");
      ?>
      <input type="submit" name="submit" value="Insert" class="sign-btn" />

    </form>


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