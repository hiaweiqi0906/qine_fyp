<?php

// session_start();
include('../components/app_protected_route.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Maklumat Program</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="../style/stylepertanyaan.css">
   <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
   <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
</head>
<body>


   <?php
   include("../components/navbar_app.php");
   include("../components/sidebar_app.php");
 ?>

     
     <div class="main-body">
      <h2>Penilaian Detail Program</h2>
      <div class="promo_card">
         <h1>Tajuk Program</h1>
         <span>Detail</span>
         <button>Muat Turun</button>
      </div>
        <h3>Bidang 1: Pembangunan & Penyampaian Program</h3>
      <div>

      </div>

      <div class="promo_card1">
         <h1>Penilaian Program</h1>
         <a href="./area1.php">Area 1</a> <br>
         <a href="./area2.php">Area 2</a> <br>
         <a href="./area3.php">Area 3</a> <br>
         <a href="./area4.php">Area 4</a> <br>
         <a href="./area5.php">Area 5</a> <br>
         <a href="./area6.php">Area 6</a> <br>
         <a href="./area7.php">Area 7</a> <br>
      </div>
      <div class="field">          
        <input type="submit" class="btn" name="submit" value="Hantar" required>
    </div>
     </div>

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