<?php
include("../php/db.php");
// session_start();
include('../components/kualitiukm_protected_route.php');

$username = "";
$email = "";
$errors = array();
$id = $_SESSION["id"];


$list_of_application = array();

// $con = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
// $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if ($stmt = $con->prepare("SELECT `APPLICATION_ID`, `TARIKH`, `MASA`, `STATUS`, `LECTURER_ID` FROM `appapplication` WHERE `STATUS` = 'PROCESSING'")) {

   $stmt->execute();
   mysqli_stmt_bind_result($stmt, $application_id, $tarikh, $masa, $status, $lecturer_id);

// }   /* fetch values */
   while (mysqli_stmt_fetch($stmt)) {
      array_push($list_of_application, array($application_id, $tarikh, $masa, $status, $lecturer_id));
   }
   // echo $stmt->field_count;
} else {
   // Something is wrong with the SQL statement, so you must check to make sure your accounts table exists with all 3 fields.
   echo 'Could not prepare statement!';
}


   $con->close();

$stmt->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Senarai Program</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="../style/stylepertanyaan.css">
   <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
   <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
</head>
<body>

<?php
          include("../components/navbar_kualitiukm.php");
          include("../components/sidebar_kualitiukm.php");
        ?>

     <section class="teachers">

      <h1 class="heading">Senarai Permohonan</h1>
 

      <div class="box-container">

      <?php
      for($i=0; $i<count($list_of_application); $i++){
         $current_application_id = $list_of_application[$i][0];

         echo "<div class=\"box\">
            <div class=\"tutor\">
               <img src=\"../img/program.jpg\" alt=\"\">
               <div>
                  <h3>Nama Program</h3>
                  <span>Tarikh Terima</span>
               </div>
            </div>

            <p>Tarikh: <span>",$list_of_application[$i][1],"</span></p>
            <p>Masa : <span>",$list_of_application[$i][2],"</span></p>
            <p>Status : <span>",$list_of_application[$i][3],"</span></p>
            <a href=\"../functions/application_action.php?action=ACCEPT&id=$current_application_id&lecturer_id=$lecturer_id\" class=\"inline-btn\">TERIMA</a>
            <a href=\"../functions/application_action.php?action=REJECT&id=$current_application_id&lecturer_id=$lecturer_id\" class=\"inline-btn\">TOLAK</a>
         </div>";
      }
      ?>

      </div>

   </section>

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