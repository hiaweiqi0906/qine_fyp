<?php
 include('../components/app_protected_route.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Profil</title>

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
     
     <section class="user-profile">

        <h1 class="heading">Maklumat Peribadi</h1>
     
        <div class="info">
     
           <div class="user">
              <img src="../img/lehqine.jpg" alt="">
              <h3>Wong Leh Qine</h3>
              <p>APP</p>
              <a href="#" class="inline-btn">KemasKini</a>
           </div>
        
           <div class="box-container">
            
           </div>
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