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
  if($types==="app"){
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
  }else if($types === "lecturer"){
    // Check if email is empty
    if(empty(trim($_POST["email1"]))){//
      $email_err = "Please enter email.";
  } else{
      $email = trim($_POST["email1"]);
  }
  
  // Check if password is empty
  if(empty(trim($_POST["password1"]))){
      $password_err = "Please enter your password.";
  } else{
      $password = trim($_POST["password1"]);
  }
  }
    


    
    // Validate credentials
    if(empty($email_err) && empty($password_err)){
        // Prepare a select statement
        if($types === "app"){
          $sql = "SELECT APP_ID, EMEL, PASSWORD FROM app WHERE EMEL = '$email' AND PASSWORD = '$password'";

        }else if($types === "lecturer"){
          $sql = "SELECT LECTURER_ID, EMEL, PASSWORD FROM lecturer WHERE EMEL = '$email' AND PASSWORD = '$password'";

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
                              if($types === "app"){
                                $_SESSION["type"] = "app"; 
                              }
                              else if($types === "lecturer"){
                                $_SESSION["type"] = "lecturer"; 
                              }                            
                           }
                                                        
                            
                            // Redirect user to welcome page
                            if($types==="app"){                            
                              header("location: dashboardapp.php");
                            } else if($types==="lecturer"){                              
                              header("location: dashboardlecturer.php");
                            }
                            alert("login success");
                   

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
    <title>Sistem Pengurusan Ahli Panel Penilai (APP)</title>
    <link rel="stylesheet" href="../style/stylelogin.css" />
  </head>
  <body>
    <div id="navbar">
      <img src="../img/pjkukm.png" alt="">
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
                <h2>Log Masuk</h2>
                <h6>Berminat menjadi Ahli Panel Penilai?</h6>
                <a href="#" class="toggle">Permohonan Baharu Ahli Panel Penilai</a>
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

            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" autocomplete="off" class="sign-up-form"> 
            
              <div class="heading">
                <h2>Log Masuk</h2>
                <a href="#" class="toggle">Kembali ke Sistem Pengurusan APP</a>
              </div>
<input
                    type="text"
                    name="types"
                    hidden
                    id="types"
                    class="input-field"
   value="lecturer"
                  />
              <div class="actual-form">
                <div class="input-wrap">
                  <input
                    type="text"
                    minlength="4"
                    name="email1"
                    id="email1"
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
                    name="password1"
                    id="password1"
                    class="input-field"
                    autocomplete="off"
                    required
                  />
                  <label>Kata Laluan</label>
                </div>

                <p class="text" align="right">
                    <a href="/pages/forgotpassword.php" data-toggle="modal">Lupa Kata Laluan?</a><br><br>
                </p>

                <input type="submit" value="Log Masuk" class="sign-btn" /> 

                <hr>

              </div>
              <center><h6>Belum mendaftar?</h6></center>          
                <input type="submit" class="sign-btn" name="submit" value="Daftar Akaun Baharu" onclick = "window.location.href='./register.php';" required>
            </form>
          </div>

          <div class="carousel">
            <div class="images-wrapper">
              <img src="../img/login.png" class="image img-1 show" alt="" />
              <img src="../img/download.png" style="height: 240px; width: 240px;
              margin: auto;
              display: block;" class="image img-2" alt="" />
            </div>

            <div class="text-slider">
              <div class="text-wrap">
                <div class="text-group">
                  <h3 class="top-title">Sistem Pengurusan Ahli Panel Penilai (APP)</h3>
                  <h3>Kriteria Permohonan sebagai Ahli Panel Penilai</h3>
                </div>
              </div>

              <div class="bullets">
                <span class="active" data-value="1"></span>
                <span data-value="2"></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>

    <!-- Javascript file -->

    <script src="../js/applogin.js"></script>
  </body>
</html>
