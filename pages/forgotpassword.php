<?php

include("../php/db.php");
session_start();

function send_password_reset($get_name, $get_email,$token){
    
}

if(isset($_POST['submit-password'])){
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $token = md5(rand());

    $check_email = "Select EMEL from app WHERE EMEL = '$email' LIMIT 1";
    $check_email_run = mysqli_query($con, $check_email);

    if(mysqli_num_rows($check_email_run)>0){
        $row = mysqli_fetch_array($check_email_run);
        $get_name = $row["nama"];
        $get_email = $row["emel"];

        $update_token = "UPDATE app SET VERIFY_TOKEN = '$token' WHERE emel = '$get_email' LIMIT 1";
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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lupa Kata Laluan</title>
</head>
<body>
    <div>
        <div class="field input">
            <label for="email">Emel</label>
            <input type="text" id="email" name="email" autocomplete="off" required>
            
            <div class="field">
                <input type="submit" class="btn" name="submit-email" value="Check" required>
            </div>
        </div>
        <div class="field input">
            <label for="password">Kata Laluan</label>
            <input type="password" name="password" id="password" autocomplete="off" required>
        </div>
        <div class="field input">
            <label for="confirmpassword">Sah Kata Laluan</label>
            <input type="password" name="confirmpassword" id="confirmpassword" autocomplete="off" required>
        </div>
    </div>
    <div class="field">          
        <input type="submit" class="btn" name="submit-password" value="Hantar" required>
    </div>
</body>
</html>