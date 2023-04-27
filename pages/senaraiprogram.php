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
   
         <div class="box">
            <div class="tutor">
               <img src="../img/program.jpg" alt="">
               <div>
                  <h3>Nama Program</h3>
                  <span>Tarikh Terima</span>
               </div>
            </div>
            <p>Jenis: <span>...</span></p>
            <p>22 : <span>...</span></p>
            <p>33 : <span>...</span></p>
            <a href="" class="inline-btn">Lihat</a>
         </div>
   
         <div class="box">
            <div class="tutor">
               <img src="../img/program.jpg" alt="">
               <div>
                  <h3>Nama Program</h3>
                  <span>Tarikh Terima</span>
               </div>
            </div>
            <p>Jenis: <span>...</span></p>
            <p>22 : <span>...</span></p>
            <p>33 : <span>...</span></p>
            <a href="" class="inline-btn">Lihat</a>
         </div>
   
         <div class="box">
            <div class="tutor">
               <img src="../img/program.jpg" alt="">
               <div>
                  <h3>Nama Program</h3>
                  <span>Tarikh Terima</span>
               </div>
            </div>
            <p>Jenis: <span>...</span></p>
            <p>22 : <span>...</span></p>
            <p>33 : <span>...</span></p>
            <a href="" class="inline-btn">Lihat</a>
         </div>
   
         <div class="box">
            <div class="tutor">
               <img src="../img/program.jpg" alt="">
               <div>
                  <h3>Nama Program</h3>
                  <span>Tarikh Terima</span>
               </div>
            </div>
            <p>Jenis: <span>...</span></p>
            <p>22 : <span>...</span></p>
            <p>33 : <span>...</span></p>
            <a href="" class="inline-btn">Lihat</a>
         </div>
   
         <div class="box">
            <div class="tutor">
               <img src="../img/program.jpg" alt="">
               <div>
                  <h3>Nama Program</h3>
                  <span>Tarikh Terima</span>
               </div>
            </div>
            <p>Jenis: <span>...</span></p>
            <p>22 : <span>...</span></p>
            <p>33 : <span>...</span></p>
            <a href="" class="inline-btn">Lihat</a>
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