<?php

// Initialize the session
// session_start();
 include('../components/lecturer_protected_route.php');

// Include config file
require_once "../php/db.php";
 
// Define variables and initialize with empty values
$email = $password = $types = "";
$email_err = $password_err = $login_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
   $id= $_SESSION["id"];
   if ($stmt = $con->prepare("SELECT * FROM appapplication WHERE LECTURER_ID = '$id' ")) {
      // Bind parameters (s = string, i = int, b = blob, etc), hash the password using the PHP password_hash function.
      // $stmt->bind_param('s', $_POST['username']);
      $stmt->execute();
      $stmt->store_result();
      // Store the result so we can check if the account exists in the database.
      if ($stmt->num_rows > 0) {
          // Username already exists
          echo 'We\'re still processing your application. ';
      } else {
          if ($stmt = $con->prepare("INSERT INTO appapplication  VALUES 
          ('10', '10', '10', 'PROCESSING', '$id')")) {
              // We do not want to expose passwords in our database, so hash the password and use password_verify when a user logs in.
              // $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
              // $stmt->bind_param('sss', $_POST['username'], $password, $_POST['email']);
              // $stmt->bindParam(':email', $email, PDO::PARAM_STR);
              $stmt->execute();
              echo 'You have successfully applied!';
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
    
    
    // Close connection
    mysqli_close($con);

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
        <?php
    include("./form.php");
        ?>
     </div>

     <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" autocomplete="off" class="sign-in-form"> 
     <input type="submit" name="submit" value="Pohon" class="sign-btn" />

   </form>


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