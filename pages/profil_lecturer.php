<?php

// Initialize the session
// session_start();
 include('../components/lecturer_protected_route.php');
 include('../functions/php_upload_cloudinary.php');

// Include config file
require_once "../php/db.php";
 
// Define variables and initialize with empty values
$email = $password = $types = "";
$email_err = $password_err = $login_err = "";
$user= array();

$id= $_SESSION["id"];

if ($stmt = $con->prepare("SELECT `LECTURER_ID`, `KATEGORI_PERMOHONAN`, `NAMA`, `NO_KP`, `FAKULTI`, `EMEL`, `ALAMAT`, `NO_TELEFON`, `URL_AVATAR`, `PASSWORD`, `BIDANG`, `GELARAN`, `POSKOD`, `DAERAH`, `NEGERI`, `NO_TELEFON_PEJABAT` FROM lecturer WHERE LECTURER_ID = '$id' ")) {
    $stmt->execute();
    mysqli_stmt_bind_result($stmt, $lecturer_id, $kategori_permohonan, $nama, $no_kp, $fakulti, $emel, $alamat, $no_telefon, $url_avatar, $password, $bidang, $gelaran, $poskod, $daerah, $negeri, $no_telefon_pejabat);
    while (mysqli_stmt_fetch($stmt)) {
       array_push($user, array($lecturer_id, $kategori_permohonan, $nama, $no_kp, $fakulti, $emel, $alamat, $no_telefon, $url_avatar, $password, $bidang, $gelaran, $poskod, $daerah, $negeri, $no_telefon_pejabat));
    } 
}
 else {
    // Something is wrong with the SQL statement, so you must check to make sure your accounts table exists with all 3 fields.
    echo 'Could not prepare statement!';
  }

if(isset($_POST['submit'])){
  if(isset($_FILES["profil-img"])){

    
  
  // $cloudinary->image('olympic_flag')->resize(Resize::fill(100, 150))->toUrl();
    echo "here";
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["profil-img"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    
    // Check if image file is a actual image or fake image

      $check = getimagesize($_FILES["profil-img"]["tmp_name"]);
      if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
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
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
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

 $gelaran = $_POST["gelaran"];
 $nama = $_POST["nama"];
 $no_kad_pengenalan = $_POST["no-kad-pengenalan"];
 $alamat_tempat_bekerja = $_POST["alamat-tempat-bekerja"];
 $poskod = $_POST["poskod"];
 $daerah = $_POST["daerah"];
 $fakulti = $_POST["fakulti"];
 $bidang = $_POST["bidang"];
 $negeri = $_POST["negeri"];
 $no_tel_pejabat = $_POST["no-tel-pejabat"];
 $no_tel_bimbit = $_POST["no-tel-bimbit"];

  date_default_timezone_set("Asia/Kuala_Lumpur");
  $today_date = date("Y-m-d");
  $now_time = date("h:i:sa");

  if(isset($_FILES["profil-img"])){
    $stmt1 = "UPDATE lecturer SET `FAKULTI` = '$fakulti', `BIDANG` = '$bidang', `NO_KP` = '$no_kad_pengenalan', `GELARAN` = '$gelaran', `NAMA` = '$nama', `URL_AVATAR` = '$url_avatar',  `ALAMAT` = '$alamat_tempat_bekerja', `POSKOD` = '$poskod', `DAERAH` = '$daerah', `NEGERI` = '$negeri', `NO_TELEFON` = '$no_tel_bimbit', `NO_TELEFON_PEJABAT` = '$no_tel_pejabat' WHERE `LECTURER_ID` = '$id'";
  }else {
    $stmt1 = "UPDATE lecturer SET `FAKULTI` = '$fakulti', `BIDANG` = '$bidang', `NO_KP` = '$no_kad_pengenalan', `GELARAN` = '$gelaran', `NAMA` = '$nama', `ALAMAT` = '$alamat_tempat_bekerja', `POSKOD` = '$poskod', `DAERAH` = '$daerah', `NEGERI` = '$negeri', `NO_TELEFON` = '$no_tel_bimbit', `NO_TELEFON_PEJABAT` = '$no_tel_pejabat' WHERE `LECTURER_ID` = '$id'";
  }
        if ($stmt = $con->prepare($stmt1)) {

              $stmt->execute();
              echo 'You have successfully updated!';
          } else {
              // Something is wrong with the SQL statement, so you must check to make sure your accounts table exists with all 3 fields.
              echo 'Could not prepare statement!';
          }
      
      $stmt->close();
 

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

        ?>

     <div class="main-body">
     <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" autocomplete="off" enctype="multipart/form-data" class="sign-in-form"> 
        <?php
    include("./form_profil.php");
        ?>
     <input type="submit" name="submit" value="Update" class="sign-btn" />

   </form>

   <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" autocomplete="off" class="sign-in-form"> 
        <?php
    include("./form_profil_password.php");
        ?>
     <input type="submit" name="change_password" value="Change Password" class="sign-btn" />

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