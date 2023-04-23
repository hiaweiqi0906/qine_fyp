<?php
//  include('../components/unprotected_route.php');

// Initialize the session
session_start();

// Include config file
require_once "../php/db.php";
 
// Define variables and initialize with empty values
$email = $password = $types = "";
$email_err = $password_err = $login_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
   $id= $_SESSION["id"];
   if ($stmt = $con->prepare("SELECT * FROM appapplication WHERE LECTURER_ID = '$id' ")) {
      // Bind parameters (s = string, i = int, b = blob, etc), hash the password using the PHP password_hash function.
      // $stmt->bind_param('s', $_POST['username']);
      $stmt->execute();
      $stmt->store_result();
      // Store the result so we can check if the account exists in the database.
      if ($stmt->num_rows > 0) {
          // Username already exists
          echo 'We\'re still processing your application. ';
      } else {
          if ($stmt = $con->prepare("INSERT INTO appapplication  VALUES 
          ('10', '10', '10', 'PROCESSING', '$id')")) {
              // We do not want to expose passwords in our database, so hash the password and use password_verify when a user logs in.
              // $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
              // $stmt->bind_param('sss', $_POST['username'], $password, $_POST['email']);
              // $stmt->bindParam(':email', $email, PDO::PARAM_STR);
              $stmt->execute();
              echo 'You have successfully applied!';
          } else {
              // Something is wrong with the SQL statement, so you must check to make sure your accounts table exists with all 3 fields.
              echo 'Could not prepare statement!';
          }
      }
      $stmt->close();
  } else {
      // Something is wrong with the SQL statement, so you must check to make sure your accounts table exists with all 3 fields.
      echo 'Could not prepare statement!';
  }

  $con->close();     
   }
    
    
    // Close connection
    mysqli_close($con);

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Polisi</title>

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
              <p class="role">APP</p>
              <a href="#" class="btn">Lihat Profil</a>
              <div class="flex-btn">
                 <a href="#" class="option-btn">login</a>
                 <a href="#" class="option-btn">register</a>
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
           <p class="role">APP</p>
           <a href="#" class="btn">Lihat Profil</a>
        </div>
     
        <nav class="navbar">
           <a href="./dashboardlecturer.html" class="active"><i class="fas fa-home"></i><span>Dashboard</span></a>
           <a href="./polisi.html"><i class="fas fa-user-circle"></i><span>Polisi</span></a>
           <a href="./kriteria.html"><i class="fas fa-mail"></i><span>Kriteria</span></a>
           <a href=""><i class="fas fa-align-left"></i><span>Permohonan</span></a>
           <a href=""><i class="fas fa-archive"></i><span>Maklumat</span></a>
           <a href=""><i class=""></i><span>Log Keluar</span></a>
        </nav>
     
     </div>

     <div class="main-body">
		<h2>Polisi</h2>
		<div class="promo_card1">
			<h1>Permohonan Sebagai Ahli Panel Penilai</h1>
			<span>POLISI PRIVASI</span>
			<p>Terima kasih kerana berminat menjadi Ahli Panel Penilai (APP) Universiti Kebangsaan Malaysia (UKM). Untuk makluman, UKM amat prihatin terhadap
                kerahsiaan data peribadi pemohon yang dikemukakan melalui laman sesawang ini. UKM akan bersifat telus dalam mengendalikan dan memproses data 
                pemohon yang sangat penting pada UKM.</p> <br>
            
            <p>Data peribadi yang dikemukakan ketika pemohon mengisi borang permohonan hanya akan digunakan bagi proses permohonan sebagai APP. Sekiranya dipersetujui
                lantikan, data tersebut akan digunakan sebagai pendaftaran sebagai APP dalam sistem kami yang akan digunakan untuk tujuan penilaian akreditasi. Maklumat
                yang mungkin diperlukan adalah termasuk nama, emel, alamat, nombor telefon dan profil yang berkaitan dengan pemohonan. Maklumat gred yang dikemukakan 
                akan digunakan bagi penetapan gred.</p> <br>

            <p>Pemohon adalah diingatkan bahawa proses ini bukanlah satu bentuk pelantikan sebaliknya ia merupakan satu pertimbangan lanjut dan saringan awal sahaja.
                Status permohonan yang dikemukakan akan dimaklumkan melalui emel.</p> <br>
            
            <span>PERLINDUNGAN DATA</span>
            <p>UKM melaksanakan pengumpulan, penyimpanan dan pemprosesan data dengan mengambil langkah-langkah keselamatan yang tepat untuk melindungi terhadap akses,
                perubahan, pendedahan atau pemusnahan maklumat peribadi pemohon dan data yang tersimpan di laman sesawang ini. Pemohon yang mengemukakan maklumat peribadi
                adalah tertakluk kepada Akta Perlindungan Data Periibadi 2010.</p> <br>
            
            <span>DEKLARASI PERMOHONAN</span>
            <p>Segala data yang dikemukakan oleh pemohon perlu bersifat benar. Sekiranya terdapat maklumat palsu atau tidak benar, UKM berhak untuk membatalkan permohonan
                dengan serta-merta.</p> <br>
		</div>

        <div class="field">          
            <input type="submit" class="btn" name="submit" value="Seterusnya" onclick = "window.location.href='./polisi.html';" required>
        </div>
     </div>

     <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" autocomplete="off" class="sign-in-form"> 
     <input type="submit" name="submit" value="Pohon" class="sign-btn" />

   </form>


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