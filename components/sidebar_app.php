<?php
include("../php/db.php");

   $id = $_SESSION["id"];
   $user_info = array();
   if ($stmt = $con->prepare("SELECT `NAMA`, `URL_AVATAR` FROM `app` WHERE `APP_ID` = '$id'")) {

      $stmt->execute();
      mysqli_stmt_bind_result($stmt, $nama, $url_avatar);

   // }   /* fetch values */
      while (mysqli_stmt_fetch($stmt)) {
         array_push($user_info, array($nama, $url_avatar));
      }
      // echo $stmt->field_count;
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
           <img src="<?php if($user_info[0][1] == "") echo 'https://img.freepik.com/free-icon/user_318-159711.jpg'; else echo $user_info[0][1]; ?>" class="image" alt="">
           <h3 class="name"><?php echo $user_info[0][0];?></h3>
           <p class="role">APP</p>
           <a href="./profil_app.php" class="btn">Lihat Profil</a>
        </div>

        <nav class="navbar">
            <a href="./dashboardapp.php" class="active"><span>Dashboard</span></a>
            <a href="./penilaianprogram.php"><span>Penilaian Program</span></a>
            <a href="./pertanyaan.php"><span>Pertanyaan</span></a>
        </nav>

     </div>
