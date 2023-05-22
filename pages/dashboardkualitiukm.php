<?php
// session_start();
include('../components/kualitiukm_protected_route.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Dashboard Kualiti-UKM</title>

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
          include("../components/pengumuman.php");

        ?>

     <div class="main-body">
      <h2>Dashboard</h2>
      <div class="promo_card">
         <h1>Selamat Datang!</h1>
         <span>Lorem ipsum dolor sit amet.</span>
         <button>Learn More</button>
      </div>

      <div class="cards">
			<div class="card card-3">
				<div class="card--data">
					<div class="card--content">
						<h5 class="card--title">Jumlah Laporan Selesai</h5>
						<h1>15</h1>
					</div>
					<!-- <i class="ri-user-2-line card--icon--lg"></i> -->
				</div>
				<div class="card--stats">
					<!--<span><i class="ri-bar-chart-fill card--icon stat--icon">65%</i></span>
					<span><i class="ri-arrow-up-fill card--icon up--icon">10</i></span>
					<span><i class="ri-arrow-down-s-fill card--icon down--icon">2</i></span>-->
				</div>
			</div>
			<div class="card card-4">
				<div class="card--data">
					<div class="card--content">
						<h5 class="card--title">Jumlah Laporan Belum Selesai</h5>
						<h1>2</h1>
					</div>
					<!-- <i class="ri-user-2-line card--icon--lg"></i> -->
				</div>
				<div class="card--stats">
					<!--<span><i class="ri-bar-chart-fill card--icon stat--icon">65%</i></span>
					<span><i class="ri-arrow-up-fill card--icon up--icon">10</i></span>
					<span><i class="ri-arrow-down-s-fill card--icon down--icon">2</i></span>-->
				</div>
			</div>
		</div>

      <div class="promo_card1">
         <h1>Senarai </h1>
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