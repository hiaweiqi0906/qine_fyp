<?php

include("../php/db.php");
// session_start();
include('../components/unprotected_route.php');

function send_password_reset($get_name, $get_email,$token){

}

$type = $_GET["type"];

if(isset($_POST['submit-password'])){
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $token = md5(rand());

    $check_email = "Select EMEL from app WHERE EMEL = '$email' LIMIT 1";
    $check_email_run = mysqli_query($con, $check_email);

    if(mysqli_num_rows($check_email_run)>0){
        $row = mysqli_fetch_array($check_email_run);
        $get_name = $row["nama"];
        $get_email = $row["emel"];

        $update_token = "UPDATE $type SET VERIFY_TOKEN = '$token' WHERE emel = '$get_email' LIMIT 1";
        $update_token_run = mysqli_query($con, $update_token);

        if($update_token_run){
            send_password_reset($get_name, $get_email, $token);
            echo "Password reset link already send to your email.";
            header("Location: forgotpassword.php");
            exit(0);
        }
        else{
            echo "Something wrong.";
            header("Location: forgotpassword.php");
            exit(0);
        }
    }
    else{
        echo "No Email Found";
        header("Location: forgotpassword.php");
        exit(0);
    }
}

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
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" autocomplete="off" class="sign-in-form">

              <div class="heading">
                <h2>Lupa Kata Laluan?</h2>
              </div>
              <input
                    type="text"
                    name="types"
                    hidden
                    id="types"
                    class="input-field"
                    value="app"
                  />
              <div class="actual-form">
                <div class="input-wrap">
                  <input
                    type="text"
                    minlength="4"
                    name="email"
                    id="email"
                    class="input-field"
                    autocomplete="off"
                    required
                  />
                  <label>Emel</label>
                </div>
                <div class="field">
                    <input type="submit" class="sign-btn" name="submit-email" value="Check" required>
                </div>

                <div class="input-wrap">
                  <input
                    type="password"
                    minlength="4"
                    name="password"
                    id="password"
                    class="input-field"
                    autocomplete="off"
                    required
                  />
                  <label>Kata Laluan</label>
                </div>

                <div class="input-wrap">
                  <input
                    type="password"
                    minlength="4"
                    name="confirmpassword"
                    id="confirmpassword"
                    class="input-field"
                    autocomplete="off"
                    required
                  />
                  <label>Sah Kata Laluan</label>
                </div>

                <div class="field">
                    <input type="submit" class="sign-btn" name="submit-password" value="Hantar" required>
                </div>
              </div>
            </form>
          </div>

          <div class="carousel1">
            <div class="images-wrapper">
              <img src="../img/forgotpassword.png" class="image-register img-1 show" alt="" />
            </div>
          </div>

        </div>
      </div>
    </main>

    <!-- Javascript file -->

    <script src="../js/applogin.js"></script>
  </body>
</html>