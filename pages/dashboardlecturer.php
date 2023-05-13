<?php
 include('../components/lecturer_protected_route.php');
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
  <div class="side-bar">
    <div id="close-btn">
      <i class="fas fa-times"></i>
    </div>

    <div class="profile">
      <img src="../img/lehqine.jpg" class="image" alt="">
      <h3 class="name">Wong Leh Qine</h3>
      <p class="role">Pensyarah</p>
      <a href="./profil_lecturer.php" class="btn">Lihat Profil</a>
    </div>

    <nav class="navbar">
      <a href="./dashboardlecturer.php" class="active"><span style="font-weight:bolder;">Dashboard</span></a>
      <a href="./pertanyaan_lecturer.php"><span style="font-weight:bolder;">Pertanyaan</span></a>
    </nav>

  </div>

     <div class="main-body">

      <img src="../img/Selamat Datang.png" class="promo_card">

      <div class="title-size">
      <h2>Dashboard</h2>
      </div>

      <div class="promo_card1">
         <h1>Senarai </h1>
         <img src="../img/sademoji.png" class="sademoji">
      </div>

      <div class="field">
         <input type="submit" class="btn" name="submit" value="Seterusnya" onclick = "window.location.href='./polisi.php';" required>
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
