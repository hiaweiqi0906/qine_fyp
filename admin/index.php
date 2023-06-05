<?php
 include('../components/unprotected_route.php');

// Initialize the session
// session_start();

// Include config file
require_once "../php/db.php";

// Define variables and initialize with empty values
$email = $password = $types = "";
$email_err = $password_err = $login_err = "";

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){

  $types = $_POST["types"];
  if($types==="admin"){
    // Check if email is empty
    if(empty(trim($_POST["email"]))){//
        $email_err = "Please enter email.";
    } else{
        $email = trim($_POST["email"]);
    }

    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }
  }




    // Validate credentials
    if(empty($email_err) && empty($password_err)){
        // Prepare a select statement
        if($types === "admin"){
          $sql = "SELECT ADMIN_ID, EMEL, PASSWORD FROM admin WHERE EMEL = '$email' AND PASSWORD = '$password'";

        }

        if($stmt = mysqli_prepare($con, $sql)){
            // Bind variables to the prepared statement as parameters
            // mysqli_stmt_bind_param($stmt, "s", $param_email);

            // Set parameters
            // $param_email = $email;

            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);
                mysqli_stmt_bind_result($stmt, $id, $emel, $password);

                // Check if email exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){
                    // Bind result variables

                            // Password is correct, so start a new session
                            session_start();
                            while (mysqli_stmt_fetch($stmt)) {
                              // Store data in session variables
                              $_SESSION["loggedin"] = true;
                              $_SESSION["id"] = $id;
                              $_SESSION["emel"] = $emel;
                              if($types === "admin"){
                                $_SESSION["type"] = "admin";
                              }
                           }


                            // Redirect user to welcome page
                            if($types==="admin"){
                              header("location: dashboard.php");
                            }
                            echo("login success");


                } else{
                    // email doesn't exist, display a generic error message
                            // alert("login fail");
                            $login_err = "Invalid login credentials.";
                }
            } else{
                            // alert("login fail");
                            echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }

    // Close connection
    mysqli_close($con);
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sistem Pengurusan Ahli Panel Penilai (Kualiti UKM)</title>
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
                <h2>Admin Log Masuk</h2>
              </div>
              <input
                    type="text"
                    name="types"
                    hidden
                    id="types"
                    class="input-field"
                    value="admin"
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

                <input type="submit" name="submit" value="Masuk" class="sign-btn" />

                <p class="text" align="right">
                  <a href="./forgotpassword_page_1.php">Lupa Kata Laluan?</a>
                </p>
              </div>
            </form>
          </div>

          <div class="carousel1">
            <div class="images-wrapper">
              <img src="../img/login.png" class="image-kualitiukm img-1 show" alt="" />
            </div>
          </div>
        </div>
      </div>
    </main>

    <!-- Javascript file -->

    <script src="../js/applogin.js"></script>
  </body>
</html>
