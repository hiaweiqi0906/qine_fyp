<?php
 include('../components/lecturer_protected_route.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Dashboard APP</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="../style/stylepertanyaan.css">
   <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
   <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
</head>
<body>

    <header class="header">
   
        <section class="flex">
     
           <a href="#" class="logo">Educa.</a>
     
           <form action="search.html" method="post" class="search-form">
              <input type="text" name="search_box" required placeholder="search courses..." maxlength="100">
              <button type="submit" class="fas fa-search"></button>
           </form>
     
           <div class="icons">
            <div id="noti-btn" class="fas fa-bell"></div>
              <div id="menu-btn" class="fas fa-bars"></div>
              <div id="search-btn" class="fas fa-search"></div>
              <div id="user-btn" class="fas fa-user"></div>
           </div>
     
           <div class="profile">
              <img src="../img/lehqine.jpg" class="image" alt="">
              <h3 class="name">lehqine</h3>
              <p class="role">Pensyarah</p>
              <a href="#" class="btn">Lihat Profil</a>
              <div class="flex-btn">
                 <a href="#" class="option-btn">Log Keluar</a>
              </div>
           </div>
     
        </section>
     
     </header>

     <div class="side-bar">

        <div id="close-btn">
           <i class="fas fa-times"></i>
        </div>
     
        <div class="profile">
           <img src="../img/lehqine.jpg" class="image" alt="">
           <h3 class="name">Wong Leh Qine</h3>
           <p class="role">Pensyarah</p>
        </div>
     
        <nav class="navbar">
           <a href="./dashboardlecturer.php" class="active"><i class="fas fa-home"></i><span>Dashboard</span></a>
           <a href="./polisi.html"><i class="fas fa-user-circle"></i><span>Polisi</span></a>
           <a href="./kriteria.html"><i class="fas fa-mail"></i><span>Kriteria</span></a>
           <a href="./permohonan.php"><i class="fas fa-align-left"></i><span>Permohonan</span></a>
           <a href=""><i class="fas fa-archive"></i><span>Maklumat</span></a>
           <a href="./pertanyaan.php"><i class="fas fa-align-left"></i><span>Pertanyaan</span></a>
        </nav>
     
     </div>

     <div class="main-body">
      <h2>Dashboard</h2>
      <div class="promo_card">
         <h1>Selamat Datang!</h1>
         <span>Lorem ipsum dolor sit amet.</span>
      </div>

      <div class="promo_card1">
         <h1>Senarai </h1>
      </div>

      <div class="field">          
         <input type="submit" class="btn" name="submit" value="Seterusnya" onclick = "window.location.href='./polisi.html';" required>
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
