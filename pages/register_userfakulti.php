<?php
include("../php/db.php");
include('../components/unprotected_route.php');


$username = "";
$email = "";
$errors = array();
$login_err="";

// $con = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
// $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if (isset($_POST['submit'])) {
  $username = mysqli_real_escape_string($con, $_POST['username']);
  $email = mysqli_real_escape_string($con, $_POST['email']);
  $password_1 = mysqli_real_escape_string($con, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($con, $_POST['password_2']);

  // Now we check if the data was submitted, isset() function will check if the data exists.
  if (!isset($_POST['username'], $_POST['password_1'], $_POST['password_2'], $_POST['email'])) {
    // Could not get the data that should have been sent.
    $login_err = 'Please complete the registration form';
  }
  // Make sure the submitted registration values are not empty.
  if (empty($_POST['username']) || empty($_POST['password_1']) || empty($_POST['password_2']) || empty($_POST['email'])) {
    // One or more values are empty.
    $login_err = 'Please complete the registration form';
  }

  if (($_POST['password_1']) != ($_POST['password_2'])) {
    // One or more values are empty.
    $login_err = "Password Mismatch.";

    // echo ('Password Mismatch');
  }

  if ($stmt = $con->prepare("SELECT USERFAKULTI_ID, NAMA, EMEL, PASSWORD FROM userfakulti WHERE EMEL = '$email' AND PASSWORD = '$password_1'")) {
    // Bind parameters (s = string, i = int, b = blob, etc), hash the password using the PHP password_hash function.
    // $stmt->bind_param('s', $_POST['username']);
    $stmt->execute();
    $stmt->store_result();
    // Store the result so we can check if the account exists in the database.
    if ($stmt->num_rows > 0) {
      // Username already exists
      $login_err = 'Account exists, please choose another!';
    } else {
      if (
        $stmt = $con->prepare("INSERT INTO userfakulti (`NO_KP`, `NAMA`, `ALAMAT`, `NO_TELEFON`, `EMEL`, `PASSWORD`) VALUES
            ('', '$username', '', '', '$email', '$password_1')")
      ) {
        // We do not want to expose passwords in our database, so hash the password and use password_verify when a user logs in.
        // $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        // $stmt->bind_param('sss', $_POST['username'], $password, $_POST['email']);
        // $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        if(($login_err=="")){

          $stmt->execute();
header('Location: login_userfakulti.php');        }
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
  <title>Sistem Pengurusan Ahli Panel Penilai (USER FAKULTI)</title>
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
          if (!empty($login_err)) {
            echo '<div class="alert alert-danger">' . $login_err . '</div>';
          }
          ?>
          <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" autocomplete="off"
            class="sign-in-form">

            <div class="heading">
              <h2>Daftar Menjadi Pengguna</h2>
            </div>
            <input type="text" name="types" hidden id="types" class="input-field" value="userfakulti" />

            <div class="actual-form">
              <div class="input-wrap">
                <input type="text" minlength="4" name="username" id="username" class="input-field" autocomplete="off"
                  required />
                <label>Fakulti</label>
              </div>

              <div class="input-wrap">
                <input type="email" minlength="4" name="email" id="email" class="input-field" autocomplete="off"
                  required />
                <label>Emel</label>
              </div>

              <div class="input-wrap">
                <input type="password" minlength="4" name="password_1" id="password_1" class="input-field"
                  autocomplete="off" required />
                <label>Kata Laluan</label>
              </div>

              <div class="input-wrap">
                <input type="password" minlength="4" name="password_2" id="password_2" class="input-field"
                  autocomplete="off" required />
                <label>Sah Kata Laluan</label>
              </div>
            </div>
            <div class="input-wrap">
              <label for="agree">
                </label>
                <input type="checkbox"/> I agree
                with the
                <a href="#" title="term of services">term of services</a>
            </div>

            <div class="field">
              <input type="submit" class="sign-btn" name="submit" value="Daftar" required>
            </div>
          </form>
        </div>

        <div class="carousel1">
            <img src="../img/register.png" class="image-register img-1 show" alt="" />
        </div>
      </div>
    </div>
  </main>
  <script src="../js/applogin.js"></script>

</body>

</html>