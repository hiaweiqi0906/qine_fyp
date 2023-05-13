
  <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sistem Pengurusan Ahli Panel Penilai (APP)</title>
    <link rel="stylesheet" href="../style/stylelogin.css" />
  </head>
  <body>
    <div id="navbar">
      <img src="../img/pjkukm.png" alt="">
      <a href="/index.php"></a>
    </div>
    <main>
      <div class="box">
        <div class="inner-box">
          <div class="forms-wrap">
            <?php 
            if(!empty($login_err)){
                echo '<div class="alert alert-danger">' . $login_err . '</div>';
            }        
            ?>
              <form method="post" action="" name="update">
            
              <div class="heading">
                <h2>Reset Kata Laluan</h2>
              </div>
              <input type="hidden" name="action" value="update" />

              <h3>Tahniah! Kata laluan anda sudah ditukar.</h3>
                <a href="login.php">Klik untuk Log Masuk</a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </main>
  <br />

  <!-- Javascript file -->

  <script src="../js/applogin.js"></script>
  
<?php

if($error!=""){
  echo "<div class='error'>".$error."</div><br />";
  }			


if(isset($_POST["email"]) && isset($_POST["action"]) &&
 ($_POST["action"]=="update")){

$pass1 = $_POST["pass1"];
$pass2 = $_POST["pass2"];
$email = $_POST["email"];
$curDate = date("Y-m-d H:i:s");
if ($pass1!=$pass2){
$error.= "<p>Password do not match, both password should be same.<br /><br /></p>";
  }
  if($error!=""){
echo "<div class='error'>".$error."</div><br />";
}else{
// $pass1 = md5($pass1);
mysqli_query($con,
"UPDATE `lecturer` SET `PASSWORD`='".$pass1."' WHERE `EMEL`='".$email."';"
);

mysqli_query($con,"DELETE FROM `password_reset_temp` WHERE `email`='".$email."';");
	
echo '<div class="error"><p>Congratulations! Your password has been updated successfully.</p>
<p><a href="./login.php">
Click here</a> to Login.</p></div><br />';
	  }		
}
?>