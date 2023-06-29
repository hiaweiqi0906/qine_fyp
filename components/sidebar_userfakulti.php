<?php
require "../php/db.php";

$info = array();

$id = $_SESSION["id"];

if ($stmt = $con->prepare("SELECT `NAMA`, `URL_AVATAR` FROM `userfakulti` WHERE USERFAKULTI_ID = '$id'")) {

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
           <p class="role">User Fakulti</p>
           <a href="./profil_userfakulti.php" class="btn">Lihat Profil</a>
        </div>

        <nav class="navbar">
           <a href="./dashboarduserfakulti.php" class="active"><span style="font-weight:bolder;">Dashboard</span></a>
           <a href="./senarailaporan_userfakulti.php"><span style="font-weight:bolder;">Laporan</span></a>
           <a href="./senaraimaklumbalas_userfakulti.php"><span style="font-weight:bolder;">Maklum Balas</span></a>
        </nav>

     </div>
