<?php
require "../php/db.php";

$info = array();

$id = $_SESSION["id"];

if ($stmt = $con->prepare("SELECT `NAMA`, `URL_AVATAR` FROM `kualitiukm` WHERE KUALITIUKM_ID = '$id'")) {

    $stmt->execute();
    mysqli_stmt_bind_result($stmt, $nama, $url_avatar);

    while (mysqli_stmt_fetch($stmt)) {
       array_push($info, array($nama, $url_avatar));
    }
 } else {
    // Something is wrong with the SQL statement, so you must check to make sure your accounts table exists with all 3 fields.
    echo 'Could not prepare statement!';
 }

?>
<div class="side-bar">

        <div id="close-btn">
           <i class="fas fa-times"></i>
        </div>

        <div class="profile">
        <img src="<?php if($info[0][1] == "") echo 'https://img.freepik.com/free-icon/user_318-159711.jpg'; else echo $info[0][1]; ?>" class="image" alt="">
           <h3 class="name"><?php echo $info[0][0]; ?></h3>
           <p class="role">Kualiti-UKM</p>
           <a href="../pages/profil_kualitiukm.php" class="btn">Lihat Profil</a>
        </div>

        <nav class="navbar">
           <a href="../pages/dashboard.php" class="active"><span style="font-weight:bolder;">Dashboard</span></a>
           <a href="../pages/senaraipermohonan.php"><span style="font-weight:bolder;">Senarai Permohonan</span></a>
           <a href="../pages/senaraiprogram.php"><span style="font-weight:bolder;">Program</span></a>
           <a href="../pages/senarailaporan.php"><span style="font-weight:bolder;">Laporan</span></a>
           <a href="../pages/senaraimaklumbalas.php"><span style="font-weight:bolder;">Maklum Balas</span></a>
           <a href="../pages/pengumuman.php"><span style="font-weight:bolder;">Pengumuman</span></a>
           <a href="../pages/pertanyaan_kualiti_ukm.php"></i><span style="font-weight:bolder;">Pertanyaan</span></a>
        </nav>

     </div>
