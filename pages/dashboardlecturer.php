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

    <div class="title-font">
      <h2>Dashboard</h2><br>
    </div>
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
            <input type="submit" class="btn" name="submit" value="Seterusnya" onclick = "window.location.href='./polisi.php';" required>
        </div>
  </div>

  <?php
  include("../components/footer.php");
  ?>

  <script src="../js/script.js"></script>

</body>

</html>