<?php
$error="";
include('../php/db.php');
if (isset($_GET["key"]) && isset($_GET["email"]) && isset($_GET["action"]) 
&& ($_GET["action"]=="reset") && !isset($_POST["action"])){
  $key = $_GET["key"];
  $email = $_GET["email"];
  $curDate = date("Y-m-d H:i:s");
  $query = mysqli_query($con,
  "SELECT * FROM `password_reset_temp` WHERE `key`='".$key."' and `email`='".$email."';"
  );
  $row = mysqli_num_rows($query);
  if ($row==""){
  $error .= '<h2>Invalid Link</h2>
<p>The link is invalid/expired. Either you did not copy the correct link
from the email, or you have already used the key in which case it is 
deactivated.</p>
<p><a href="https://www.allphptricks.com/forgot-password/index.php">
Click here</a> to reset password.</p>';
	}else{
  $row = mysqli_fetch_assoc($query);
  $expDate = $row['expDate'];
  if ($expDate >= $curDate){
  ?>
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

              <div class="actual-form">
                <div class="input-wrap">
                  <input
                    type="password"
                    minlength="4"
                    name="pass1"
                    id="pass1"
                    class="input-field"
                    autocomplete="off"
                    required
                  />
                  <label>Kata Laluan Baharu</label>
                </div>

                <div class="actual-form">
                <div class="input-wrap">
                  <input
                    type="password"
                    minlength="4"
                    name="pass2"
                    id="pass2"
                    class="input-field"
                    autocomplete="off"
                    required
                  />
                  <label>Sahkan Kata Laluan Baharu</label>
                </div>
                <input type="hidden" name="email" value="<?php echo $email;?>"/>

                <div class="field">
                    <input type="submit" class="sign-btn" name="submit" value="Reset" required>
                </div>
                <?php
                    if(isset($successEmail)){
                        echo "<div class=\"reset-message\">An email has been sent to you with instructions on how to reset your password.</div>";
                    }
                ?>
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
}else{
$error .= "<h2>Link Expired</h2>
<p>The link is expired. You are trying to use the expired link which 
as valid only 24 hours (1 days after request).<br /><br /></p>";
            }
      }
if($error!=""){
  echo "<div class='error'>".$error."</div><br />";
  }			
} // isset email key validate end


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
	
header('Location: reset_password_msg.php');
	  }		
}
?>