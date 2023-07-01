<?php

include("../php/db.php");
require_once('../vendor/autoload.php');
// session_start();
include('../components/unprotected_route.php');
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// require '../PHPMailer/PHPMailerAutoload.php';

// ini_set("SMTP","ssl://smtp.gmail.com");
// ini_set("smtp_port","587");
$error = "";
$type = $_GET["type"];

if (isset($_POST["email"]) && (!empty($_POST["email"]))) {
  $email = $_POST["email"];
  $email = filter_var($email, FILTER_SANITIZE_EMAIL);
  $email = filter_var($email, FILTER_VALIDATE_EMAIL);
  if (!$email) {
    $error .= "<p>Invalid email address please type a valid email address!</p>";
  } else {
    $sel_query = "SELECT * FROM `lecturer` WHERE EMEL='" . $email . "'";
    $results = mysqli_query($con, $sel_query);
    $row = mysqli_num_rows($results);
    if ($row == "") {
      $error .= "<p>No user is registered with this email address!</p>";
    }
  }
  if ($error != "") {
    echo "<div class='error'>" . $error . "</div>
   <br /><a href='javascript:history.go(-1)'>Go Back</a>";
  } else {
    $expFormat = mktime(
      date("H"),
      date("i"),
      date("s"),
      date("m"), date("d") + 1,
      date("Y")
    );
    $expDate = date("Y-m-d H:i:s", $expFormat);
    $key_1 = 2418 * 2;
    $key = md5($key_1 . $email);
    $addKey = substr(md5(uniqid(rand(), 1)), 3, 10);
    $key = $key . $addKey;
    // Insert Temp Table
    mysqli_query(
      $con,
      "INSERT INTO `password_reset_temp` (`email`, `key`, `expDate`)
VALUES ('" . $email . "', '" . $key . "', '" . $expDate . "');"
    );

    $output = '<p>Dear user,</p>';
    $output .= '<p>Please click on the following link to reset your password.</p>';
    $output .= '<p>-------------------------------------------------------------</p>';
    $output .= '<p><a href="http://www.localhost:8088/qine%20fyp/pages/reset_password.php?key=' . $key . '&email=' . $email . '&action=reset&type=' . $type . '" target="_blank">
http://www.localhost:8088/qine%20fyp/pages/reset_password.php?key=' . $key . '&email=' . $email . '&action=reset&type=' . $type . '</a></p>';
    $output .= '<p>-------------------------------------------------------------</p>';
    $output .= '<p>Please be sure to copy the entire link into your browser.
The link will expire after 1 day for security reason.</p>';
    $output .= '<p>If you did not request this forgotten password email, no action
is needed, your password will not be reset. However, you may want to log into
your account and change your security password as someone may have guessed it.</p>';

    $body = $output;
    $subject = "Password Recovery";

    $email_to = $email;
    $fromserver = "hiaweiqi@gmail.com";
    // require("../PHPMailer/PHPMailerAutoload.php");


    $mail = new PHPMailer();
    // $mail->SMTPDebug = 4;
    $mail->IsSMTP();
    $mail->Host = 'smtp.gmail.com'; //gmail SMTP server
    $mail->SMTPAuth = true;
    $mail->Username = "hiaweiqi@gmail.com"; // Enter your email here
    $mail->Password = "zpnpftkhgnnhnnoy"; //Enter your password here//16 character obtained from app password created
    $mail->Port = 587; //$mail->Port = 465;                    //SMTP port
// $mail->SMTPSecure = "ssl";

    $mail->From = 'hiaweiqi@student.usm.my';
    $mail->FromName = 'Wei Qi';
    $mail->addAddress($email, 'Dear User'); // Add a recipient
// $mail->addAddress('ellen@example.com');               // Name is optional

    $mail->IsHTML(true);
    // $mail->From = "hiaweiqi@gmail.com";
// $mail->FromName = "Wei Qi";
// $mail->Sender = $fromserver; // indicates ReturnPath header
    $mail->Subject = $subject;
    $mail->Body = $body;
    // $mail->AddAddress($email_to);

    // mail($to,$subject,$message,$headers);
    if (!$mail->Send()) { //
      echo "Mailer Error: " . $mail->ErrorInfo;
    } else {
      $successEmail = true;
    }
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
    <img src="../img/logo.png" alt="">
    <a href="/index.php"></a>
  </div>
  <main>
    <div class="box1">
      <div class="inner-box">
        <div class="forms-wrap1">
          <?php
          if (!empty($login_err)) {
            echo '<div class="alert alert-danger">' . $login_err . '</div>';
          }
          ?>
          <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]).'?type='.$type; ?>" method="post" autocomplete="off"
            class="sign-in-form">

            <div class="heading">
              <h2>Masukkan Alamat Emel</h2>
            </div>
            <input type="text" name="types" hidden id="types" class="input-field" value="app" />
            <div class="actual-form">
              <div class="input-wrap">
                <input type="text" minlength="4" name="email" id="email" class="input-field" autocomplete="off"
                  required />
                <label>Emel</label>
              </div>
              <div class="field">
                <input type="submit" class="sign-btn" name="submit-email" value="Semak" required>
              </div>
              <?php
              if (isset($successEmail)) {
                echo "<div class=\"reset-message\">An email has been sent to you with instructions on how to reset your password.</div>";
              }
              ?>
            </div>
          </form>
        </div>
      </div>
    </div>
  </main>

  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>

  <!-- Javascript file -->

  <script src="../js/applogin.js"></script>