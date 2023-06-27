<?php

// Initialize the session
// session_start();
include('../components/kualitiukm_protected_route.php');
include('../functions/php_upload_cloudinary.php');

// Include config file
require_once "../php/db.php";

// Define variables and initialize with empty values
$email = $password = $types = "";
$email_err = $password_err = $login_err = "";
$user = array();

$id = $_SESSION["id"];



if (isset($_POST['submit'])) {
  if (file_exists($_FILES['profil-img']['tmp_name']) || is_uploaded_file($_FILES['profil-img']['tmp_name'])) {

    // $cloudinary->image('olympic_flag')->resize(Resize::fill(100, 150))->toUrl();
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["profil-img"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image

    $check = getimagesize($_FILES["profil-img"]["tmp_name"]);
    if ($check !== false) {
      $uploadOk = 1;
    } else {
      echo "File is not an image.";
      $uploadOk = 0;
    }


    // Check if file already exists
    if (file_exists($target_file)) {
      echo "Sorry, file already exists.";
      $uploadOk = 0;
    }

    // Check file size
    if ($_FILES["profil-img"]["size"] > 500000) {
      echo "Sorry, your file is too large.";
      $uploadOk = 0;
    }

    // Allow certain file formats
    if (
      $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
      && $imageFileType != "gif"
    ) {
      echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
      $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
      echo "Sorry, your file was not uploaded.";
      // if everything is ok, try to upload file
    } else {
      // if (move_uploaded_file($_FILES["profil-img"]["tmp_name"], $target_file)) {
      //   echo "The file ". htmlspecialchars( basename( $_FILES["profil-img"]["name"])). " has been uploaded.";
      // } else {
      //   echo "Sorry, there was an error uploading your file.";
      // }
      $resp = $cloudinary->uploadApi()->upload(
        $_FILES["profil-img"]["tmp_name"]
      );
      $url_avatar = $resp->offsetGet('secure_url');
    }
  }

  //  $gelaran = $_POST["gelaran"];
  $nama = $_POST["nama"];
  $no_kad_pengenalan = $_POST["no-kad-pengenalan"];
  $alamat_tempat_bekerja = $_POST["alamat-tempat-bekerja"];
  //  $poskod = $_POST["poskod"];
//  $daerah = $_POST["daerah"];

  //  $negeri = $_POST["negeri"];
//  $no_tel_pejabat = $_POST["no-tel-pejabat"];
  $no_tel_bimbit = $_POST["no-tel-bimbit"];

  date_default_timezone_set("Asia/Kuala_Lumpur");
  $today_date = date("Y-m-d");
  $now_time = date("h:i:sa");

  if (file_exists($_FILES['profil-img']['tmp_name']) || is_uploaded_file($_FILES['profil-img']['tmp_name'])) {
    $stmt1 = "UPDATE kualitiukm SET `URL_AVATAR` = '$url_avatar', `NO_KP` = '$no_kad_pengenalan', `NAMA` = '$nama', `ALAMAT` = '$alamat_tempat_bekerja', `NO_TELEFON` = '$no_tel_bimbit' WHERE `KUALITIUKM_ID` = '$id'";
  } else {
    $stmt1 = "UPDATE kualitiukm SET `NO_KP` = '$no_kad_pengenalan', `NAMA` = '$nama', `ALAMAT` = '$alamat_tempat_bekerja', `NO_TELEFON` = '$no_tel_bimbit' WHERE `KUALITIUKM_ID` = '$id'";
  }
  if ($stmt = $con->prepare($stmt1)) {

    $stmt->execute();
  } else {
    // Something is wrong with the SQL statement, so you must check to make sure your accounts table exists with all 3 fields.
    echo 'Could not prepare statement!';
  }

  $stmt->close();


}




if ($stmt = $con->prepare("SELECT `KUALITIUKM_ID`, `NAMA`, `PASSWORD`, `EMEL`, `NO_KP`, `ALAMAT`, `NO_TELEFON`, `URL_AVATAR` FROM kualitiukm WHERE KUALITIUKM_ID = '$id' ")) {
  $stmt->execute();
  mysqli_stmt_bind_result($stmt, $kualitiukm_id, $nama, $password, $emel, $no_kp, $alamat, $no_telefon, $url_avatar);
  while (mysqli_stmt_fetch($stmt)) {
    array_push($user, array($kualitiukm_id, $nama, $password, $emel, $no_kp, $alamat, $no_telefon, $url_avatar));
  }
} else {
  // Something is wrong with the SQL statement, so you must check to make sure your accounts table exists with all 3 fields.
  echo 'Could not prepare statement!';
}
if (isset($_POST["change_password"])) {
  $password1 = $_POST["password1"];
  $password2 = $_POST["password2"];
  if($password1 == $user[0][2]){
    if ($stmt = $con->prepare("UPDATE kualitiukm SET `PASSWORD` = '$password2'  WHERE `KUALITIUKM_ID` = '$id'")) {
      $stmt->execute();

    } else {
      // Something is wrong with the SQL statement, so you must check to make sure your accounts table exists with all 3 fields.
      echo 'Could not prepare statement!';
    }
  }
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
  include("../components/navbar_kualitiukm.php");
  include("../components/sidebar_kualitiukm.php");
  include("../components/pengumuman.php");
  ?>

  <div class="main-body">
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" autocomplete="off"
      enctype="multipart/form-data" class="sign-in-form">
      <?php
      include("./form_profil_kualitiukm.php");
      ?>
      <input type="submit" name="submit" value="Kemaskini" class="sign-btn" style="background-color: #5d7851; width: 30%; height: 50px; color: white; border-radius: 5px; margin-left: auto; margin-right: auto; display: block; font-size: 1.8rem;"/>

    </form>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" autocomplete="off"
      class="sign-in-form">
      <?php
      include("./form_profil_password.php");
      ?>
      <input type="submit" name="change_password" value="Kemaskini Kata Laluan" class="sign-btn" style="background-color: #5d7851; width: 30%; height: 50px; color: white; border-radius: 5px; margin-left: auto; margin-right: auto; display: block; font-size: 1.8rem;"/>

    </form>
  </div>

  <?php
          include("../components/footer.php");
        ?>

  <script src="../js/script.js"></script>

</body>

</html>