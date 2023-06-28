<?php
include('../components/lecturer_protected_route.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kriteria Permohonan</title>

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
        <div class="title-font">
            <h2>Kriteria</h2>
        </div>
        <div class="promo_card1">
            <h1>Permohonan Sebagai Ahli Panel Penilai</h1> <br>
            <h2>Kriteria Permohonan Sebagai Ahli Panel Penilai (APP) UKM</h2> <br>
            <span>KRITERIA ASAS</span>
            <p>i. Memiliki sekurang-kurangnya kelayakan tahap 6 MQF (Ijazah Sarjana Muda) atau satu tahap kelayakan
                lebih tinggi daripada tahap kelayakan yang dinilai, dan/atau
                <br> ii. Memiliki lima tahun pengalaman dalam bidang berkaitan.
            </p> <br>

            <span>KRITERIA TAMBAHAN</span>
            <p>i. Mempunyai pengalaman/pernah terlibat dalam pembangunan kurikulum. <br> ii. Mempunyai pengetahuan
                tentang rekabentuk dan penyampaian kurikulum. <br> iii. Berpendirian
                berkecuali <br> iv. Mempunyai ciri-ciri profesionalisme <br> v. Menjaga kerahsiaan</p> <br>

            <span>PROSEDUR PELANTIKAN APP UKM</span>
            <p>i. UKM hanya akan melantik APP baharu berdasarkan kepada keperluan bidang. <br> ii. Calon perlu mengisi
                borang permohonan secara atas talian dan mendapatkan kelulusan (
                <a href="">muat turun borang</a>) terlebih dahulu. Kelulusan perlu dimuat naik sebelum meneruskan
                permohonan. (Bagi pemohon yang mempunyai majikan, Tidak perlu jika pemohon
                bekerja sendiri atau pesara.) <br> iii. Calon perlu bersedia menghadiri bengkel yang ditetapkan oleh UKM
                jika melepasi saringan awal. Sekiranya gagal, calon tidak akan ditawarkan
                sebagai APP UKM.
            </p> <br>
        </div>

        <div class="field">
            <input type="submit" class="btn" name="submit" value="Seterusnya"
                onclick="window.location.href='./permohonan.php';" required>
        </div>
    </div>


    <?php
    include("../components/footer.php");
    ?>

    <script src="../js/script.js"></script>

</body>

</html>