<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Penilaian Program</title>

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

     
     <section class="courses">

      <h1 class="heading">Senarai Tugasan yang Belum Selesai</h1>
   
      <div class="box-container">
   
         <div class="box">
            <div class="tutor">
               <img src="../img/program.jpg" alt="">
               <div class="info">
                  <h3>Nama Program</h3>
                  <span>Last Submit: 01-06-2023</span>
               </div>
            </div>
            <h3 class="title"></h3>
            <a href="./detailprogram.html" class="inline-btn">Lihat Progres</a>
         </div>
   
         <div class="box">
            <div class="tutor">
               <img src="../img/program.jpg" alt="">
               <div class="info">
                  <h3>Nama Program</h3>
                  <span>Last Submit: 01-06-2023</span>
               </div>
            </div>
            <h3 class="title"></h3>
            <a href="./detailprogram.html" class="inline-btn">Lihat Progres</a>
         </div>
   
         <div class="box">
            <div class="tutor">
               <img src="../img/program.jpg" alt="">
               <div class="info">
                  <h3>Nama Program</h3>
                  <span>Last Submit: 01-06-2023</span>
               </div>
            </div>
            <h3 class="title"></h3>
            <a href="./detailprogram.html" class="inline-btn">Lihat Progres</a>
         </div>
   
      </div>
   
      <div class="more-btn">
         <a href="#" class="inline-option-btn">view all courses</a>
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