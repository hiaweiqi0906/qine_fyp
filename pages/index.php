<?php
include('../components/unprotected_route.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Sistem Pengurusan Ahli Panel Penilai (APP)</title>
  <link rel="stylesheet" href="../style/stylehome.css" />
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body class="img js-fullheight" style="background-image: url(/img/background.jpg);">
  <main>
    <div class="big-wrapper light">
      <img src="" alt="" class="shape" />
      <?php
      include("../components/navbar_index.php");
      ?>



      <div class="slideshow-container fade" style="width: 100%; margin: 30px 0;">

        <!-- Full images with numbers and message Info -->
        <div class="Containers mySlides fade" style="width: 100%;">
          <img src="../img/kualitiukm1.png" style="width:100%; height: 550px; object-fit: cover;">
        </div>

        <div class="Containers mySlides fade">
          <img src="../img/kualitiukm2.jpg" style="width:100%; height: 550px; object-fit: cover;">
        </div>

        <div class="Containers mySlides fade">
          <img src="../img/kualitiukm3.jpg" style="width:100%; height: 550px; object-fit: cover;">
        </div>

        <!-- Back and forward buttons -->
        <a class="Back" onclick="plusSlides(-1)">&#10094;</a>
        <a class="forward" onclick="plusSlides(1)">&#10095;</a>
      </div>
      <br>


      <div class="showcase-area">
        <div class="container">
          <div class="left">
            <div class="big-title">
              <h1>Sistem Pengurusan</h1>
              <h1>Ahli Panel Penilai (APP)</h1>
            </div>
            <p class="text">
              Sistem Pengurusan Ahli Panel Penilai (APP) merupakan sistem berasaskan laman sesawang yang ditumbuhkan
              sebagai
              media perkhidmatan dalam talian untuk penilai Pusat Jaminan Kualiti (Kualiti-UKM) menguruskan maklumat
              penilaian.
            </p>
            <div class="cta">
            </div>
          </div>

          <div class="right">
            <img src="../img/home.png" alt="" style="height: 100%; object-fit: cover;">
          </div>
        </div>
      </div>
    </div>

    <!-- Back to Top -->

    <?php
    include("../components/footer.php");
    ?>
  </main>

  <!-- JavaScript Files -->

  <script src="https://kit.fontawesome.com/a81368914c.js"></script>
  <script src="../js/apphome.js"></script>
</body>

</html>