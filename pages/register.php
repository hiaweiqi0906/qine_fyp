<?php 
include("../php/db.php");
session_start();

$username = "";
$email = "";
$errors = array();

// $con = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
// $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if(isset($_POST['submit'])){
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password_1 = mysqli_real_escape_string($con, $_POST['password_1']);
    $password_2 = mysqli_real_escape_string($con, $_POST['password_2']);

    // Now we check if the data was submitted, isset() function will check if the data exists.
    if (!isset($_POST['username'], $_POST['password_1'],$_POST['password_2'], $_POST['email'])) {
        // Could not get the data that should have been sent.
        echo('Please complete the registration form!');
    }
    // Make sure the submitted registration values are not empty.
    if (empty($_POST['username']) || empty($_POST['password_1']) || empty ($_POST['password_2']) || empty($_POST['email'])) {
        // One or more values are empty.
        echo('Please complete the registration form');
    }

    if (($_POST['password_1']) == ($_POST['password_2'])) {
        // One or more values are empty.
        echo('Password Mismatch');
    }

    if ($stmt = $con->prepare("SELECT APP_ID, NAMA, EMEL, PASSWORD FROM app WHERE EMEL = '$email' AND PASSWORD = '$password_1'")) {
        // Bind parameters (s = string, i = int, b = blob, etc), hash the password using the PHP password_hash function.
        // $stmt->bind_param('s', $_POST['username']);
        $stmt->execute();
        $stmt->store_result();
        // Store the result so we can check if the account exists in the database.
        if ($stmt->num_rows > 0) {
            // Username already exists
            echo 'Username exists, please choose another!';
        } else {
            if ($stmt = $con->prepare("INSERT INTO lecturer (LECTURER_ID, KATEGORI_PERMOHONAN, NAMA, NO_KP, FAKULTI, EMEL, ALAMAT, NO_TELEFON, URL_AVATAR, PASSWORD, BIDANG) VALUES 
            ('12', '', '$username', '', '', '$email', '', '', '', '$password_1', '')")) {
                // We do not want to expose passwords in our database, so hash the password and use password_verify when a user logs in.
                // $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
                // $stmt->bind_param('sss', $_POST['username'], $password, $_POST['email']);
                // $stmt->bindParam(':email', $email, PDO::PARAM_STR);
                $stmt->execute();
                echo 'You have successfully registered! You can now login!';
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
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sistem Pengurusan Ahli Panel Penilai (APP)</title>
  </head>
  <body>
  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" autocomplete="off" class="sign-in-form"> 
    <div>
        <div class="field input">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" autocomplete="off" required>
        </div>
        <div class="field input">
            <label for="email">Emel</label>
            <input type="text" id="email" name="email" autocomplete="off" required>
        </div>
        <div class="field input">
            <label for="password_1">Kata Laluan</label>
            <input type="password" name="password_1" id="password_1" autocomplete="off" required>
        </div>
        <div class="field input">
            <label for="password_2">Sah Kata Laluan</label>
            <input type="password" name="password_2" id="password_2" autocomplete="off" required>
        </div>
    </div>
    <div>
            <label for="agree">
                <input type="checkbox" name="agree" id="agree" value="yes"/> I agree
                with the
                <a href="#" title="term of services">term of services</a>
            </label>
        </div>

    <div class="field">          
        <input type="submit" class="btn" name="submit" value="Daftar" required>
    </div>
    </form>

  </body>
  </html>