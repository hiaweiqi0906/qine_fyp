<?php
 include('../components/unprotected_route.php');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Halaman Utama</title>
    <link rel="stylesheet" href="../style/stylehome.css" />
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  </head>
  <body class="img js-fullheight" style="background-image: url(img/background.jpg);">
    <main>
      <div class="big-wrapper light">
        <img src="" alt="" class="shape" />
        <?php
          include("../components/navbar_index.php");
        ?>
        
        <div class="showcase-area">
          <div class="container">
            <div class="left">
              <div class="big-title">
                <h1>Sistem Pengurusan</h1>
                <h1>Ahli Panel Penilai (APP)</h1>
              </div>
              <p class="text">
                Sistem Pengurusan Ahli Panel Penilai (APP) merupakan sistem berasaskan laman sesawang yang ditumbuhkan sebagai
                media perkhidmatan dalam talian untuk penilai Pusat Jaminan Kualiti (Kualiti-UKM) menguruskan maklumat penilaian.
              </p>
              <div class="cta">
              </div>
            </div>

            <div class="right">
                <img src="../img/home.png" alt="">
            </div>
          </div>
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
    </main>

    <!-- JavaScript Files -->

    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <script src="../js/apphome.js"></script>
  </body>
</html>
