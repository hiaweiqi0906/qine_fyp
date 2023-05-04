<?php
include("../php/db.php");
// session_start();
include('../components/kualitiukm_protected_route.php');

$username = "";
$email = "";
$errors = array();
$id = $_SESSION["id"];


$list_of_program = array();

if ($stmt = $con->prepare("SELECT `PROGRAM_ID`, `NAMA`, `TARIKH`, `URL_DRIVE`, `BIDANG`, `STATUS`, `DESCRIPTION`, `MASA` FROM `program` WHERE 1")) {

   $stmt->execute();
   mysqli_stmt_bind_result($stmt, $program_id, $nama, $tarikh, $url_drive, $bidang, $status, $description, $masa);
   
// }   /* fetch values */
   while (mysqli_stmt_fetch($stmt)) {
      array_push($list_of_program, array($program_id, $nama, $tarikh, $url_drive, $bidang, $status, $description, $masa));
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

      <h1 class="heading">Senarai Program yang Belum Diagihkan</h1>
   
      <form action="" method="post" class="search-tutor">
         <input type="text" name="search_box" placeholder="cari program..." required maxlength="100">
         <button type="submit" class="fas fa-search" name="search_tutor"></button>
      </form>
   
      <div class="box-container">
      <?php
      for($i=0; $i<count($list_of_program); $i++){
         $current_application_id = $list_of_program[$i][0];
      
         echo "<div class=\"box\">
            <div class=\"tutor\">
               <img src=\"../img/program.jpg\" alt=\"\">
               <div>
                  <h3>Nama Program: ",$list_of_program[$i][1],"</h3>
                  <span>Tarikh Terima: ",$list_of_program[$i][2],"</span>
               </div>
            </div>
            
            <p>Tarikh: <span>",$list_of_program[$i][2],"</span></p>
            <p>Masa : <span>",$list_of_program[$i][7],"</span></p>
            <p>Status : <span>",$list_of_program[$i][5],"</span></p>
            <a href=\"./program_information.php?id=$current_application_id\" class=\"inline-btn\">Lihat</a>
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