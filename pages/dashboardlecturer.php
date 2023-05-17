<?php
 include("../php/db.php");
 include('../components/lecturer_protected_route.php');

// $id = $_SESSION["id"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Dashboard Pensyarah</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="../style/stylepertanyaan.css">
   <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
   <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
</head>
<body>

    <?php
          include("../components/navbar_lecturer.php");
          include("../components/sidebar_lecturer.php");
          include("../components/pengumuman.php");

        ?>

     <div class="main-body">

      <img src="../img/Selamat Datang.png" class="promo_card">

      <div class="title-size">
      <h2>Dashboard</h2><br>
      </div>

      <div class="slideshow-container fade">

      <!-- Full images with numbers and message Info -->
      <div class="Containers">
        <img src="../img/app1.jpeg" style="width:100%; height: 400px; object-fit: cover;">
      </div>

      <div class="Containers">
        <img src="../img/app2.jpeg" style="width:100%; height: 400px; object-fit: cover;">
      </div>

      <div class="Containers">
        <img src="../img/app3.jpg" style="width:100%; height: 400px; object-fit: cover;">
      </div>

      <!-- Back and forward buttons -->
      <a class="Back" onclick="plusSlides(-1)">&#10094;</a>
      <a class="forward" onclick="plusSlides(1)">&#10095;</a>
    </div>
    <br>

    <!-- The circles/dots -->
    <div style="text-align:center">
    <span class="dots" onclick="currentSlide(1)"></span>
    <span class="dots" onclick="currentSlide(2)"></span>
    <span class="dots" onclick="currentSlide(3)"></span>
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
