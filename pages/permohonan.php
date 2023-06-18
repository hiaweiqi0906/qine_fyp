<?php

// Initialize the session
// session_start();
 include('../components/lecturer_protected_route.php');

// Include config file
require_once "../php/db.php";

// Define variables and initialize with empty values
$email = $password = $types = "";
$email_err = $password_err = $login_err = "";

$id= $_SESSION["id"];
if ($stmt = $con->prepare("SELECT * FROM appapplication WHERE LECTURER_ID = '$id' ")) {
  // Bind parameters (s = string, i = int, b = blob, etc), hash the password using the PHP password_hash function.
  // $stmt->bind_param('s', $_POST['username']);
  $stmt->execute();
  $stmt->store_result();
  // Store the result so we can check if the account exists in the database.
  if ($stmt->num_rows > 0) {
      // Username already exists
      header('Location: ./maklumat.php');
  }
}
 else {
    // Something is wrong with the SQL statement, so you must check to make sure your accounts table exists with all 3 fields.
    echo 'Could not prepare statement!';
  }
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 $kelayakan_akademik  = $_POST["kelayakan-akademik"];
 $pengalaman = $_POST["pengalaman"];
 $penganugerahan = $_POST["penganugerahan"];

 $gelaran = $_POST["gelaran"];
 $nama = $_POST["nama"];
 $universiti = $_POST["universiti"];
 $no_kad_pengenalan = $_POST["no-kad-pengenalan"];
 $alamat_tempat_bekerja = $_POST["alamat-tempat-bekerja"];
 $poskod = $_POST["poskod"];
 $kategori = (isset($_POST["kategori1"])? $_POST["kategori1"]: "") .";". (isset($_POST["kategori2"])? $_POST["kategori2"]: "") .";". (isset($_POST["kategori3"])? $_POST["kategori3"]: "") .";". (isset($_POST["kategori4"])? $_POST["kategori4"]: "");
 $daerah = $_POST["daerah"];
 $fakulti = $_POST["fakulti"];
 $negeri = $_POST["negeri"];
 $no_tel_pejabat = $_POST["no-tel-pejabat"];
 $no_tel_bimbit = $_POST["no-tel-bimbit"];

  date_default_timezone_set("Asia/Kuala_Lumpur");
  $today_date = date("Y-m-d");
  $now_time = date("h:i:sa");

   if ($stmt = $con->prepare("SELECT * FROM appapplication WHERE LECTURER_ID = '$id' ")) {
      // Bind parameters (s = string, i = int, b = blob, etc), hash the password using the PHP password_hash function.
      // $stmt->bind_param('s', $_POST['username']);
      $stmt->execute();
      $stmt->store_result();
      // Store the result so we can check if the account exists in the database.
      if ($stmt->num_rows > 0) {
          // Username already exists
          echo 'We\'re still processing your application. ';
      } else {
        if ($stmt = $con->prepare("INSERT INTO appapplication (`UNIVERSITI`, `TARIKH`, `MASA`, `STATUS`, `LECTURER_ID`, `KELAYAKAN_AKADEMIK`, `PENGALAMAN`, `PENGANUGERAHAN`, `KATEGORI`) VALUES
        ('$universiti', '$today_date', '$now_time', 'PROCESSING', '$id', '$kelayakan_akademik', '$pengalaman', '$penganugerahan', '$kategori')")) {

            $stmt->execute();
        } else {
            // Something is wrong with the SQL statement, so you must check to make sure your accounts table exists with all 3 fields.
            echo 'Could not prepare statement!';
        }

        if ($stmt = $con->prepare("UPDATE lecturer SET `UNIVERSITI` = '$universiti', `FAKULTI` = '$fakulti', `NO_KP` = '$no_kad_pengenalan', `GELARAN` = '$gelaran', `NAMA` = '$nama', `ALAMAT` = '$alamat_tempat_bekerja', `POSKOD` = '$poskod', `DAERAH` = '$daerah', `NEGERI` = '$negeri', `NO_TELEFON` = '$no_tel_bimbit', `NO_TELEFON_PEJABAT` = '$no_tel_pejabat' WHERE `LECTURER_ID` = '$id'")) {

              $stmt->execute();
              header("Location: maklumat.php");
          } else {
              // Something is wrong with the SQL statement, so you must check to make sure your accounts table exists with all 3 fields.
              echo 'Could not prepare statement!';
          }

          if (
            $stmt = $con->prepare("INSERT INTO `lecturer_noti`(`LECTURER_ID`, `TEXT`, `TARIKH`, `MASA`) VALUES ('$id', 'ANDA SUDAH BUAT PERMOHONAN UNTUK MENJADI APP. ', '$today_date','$current_time')")
          ) {
            $stmt->execute();
          } else {
            // Something is wrong with the SQL statement, so you must check to make sure your accounts table exists with all 3 fields.
            echo 'Could not prepare statement!';
          }

      }
      $stmt->close();
  } else {
      // Something is wrong with the SQL statement, so you must check to make sure your accounts table exists with all 3 fields.
      echo 'Could not prepare statement!';
  }

  $con->close();
   }

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Polisi</title>

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
          include("../components/navbar_lecturer.php");
          include("../components/sidebar_lecturer.php");
          include("../components/pengumuman.php");

        ?>

     <div class="main-body">
       <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" autocomplete="off" class="sign-in-form">
        <?php
          include("./form.php");
        ?>


     <input type="submit" name="submit" value="Pohon" class="btn" />
   </form>
</div>

      <?php
          include("../components/footer.php");
        ?>

	  <script src="../js/script.js"></script>

</body>
</html>