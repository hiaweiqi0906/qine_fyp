<?php
include("../php/db.php");
session_start();

$username = "";
$email = "";
$errors = array();

$list_of_pertanyaan = array();

// $con = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
// $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if (isset($_POST['submit'])) {
   $no= mysqli_real_escape_string($con, $_POST['no']);
   $date= mysqli_real_escape_string($con, $_POST['date']);
   $pengumuman= mysqli_real_escape_string($con, $_POST['pengumuman']);
   $ringkasan= mysqli_real_escape_string($con, $_POST['ringkasan']);
   $tindakan= mysqli_real_escape_string($con, $_POST['tindakan']);

   if (
      $stmt = $con->prepare("INSERT INTO pengumuman  VALUES 
    ('$no', '$date', '$pengumuman', '$ringkasan', '$tindakan')")
   ) {
      // We do not want to expose passwords in our database, so hash the password and use password_verify when a user logs in.
      // $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
      // $stmt->bind_param('sss', $_POST['username'], $password, $_POST['email']);
      // $stmt->bindParam(':email', $email, PDO::PARAM_STR);
      $stmt->execute();
   } else {
      // Something is wrong with the SQL statement, so you must check to make sure your accounts table exists with all 3 fields.
      echo 'Could not prepare statement!';
   }
   

}

if ($stmt = $con->prepare("SELECT `PENGUMUMAN_ID`, `TARIKH`, `PENGUMUMAN`, `RINGKASAN`, `TINDAKAN` FROM `pengumuman` WHERE 1")) {

   $stmt->execute();
   mysqli_stmt_bind_result($stmt, $pengumuman_id, $tarikh, $pengumuman, $ringkasan, $tindakan);
   
// }   /* fetch values */
   while (mysqli_stmt_fetch($stmt)) {
      array_push($list_of_pertanyaan, array($pengumuman_id, $tarikh, $pengumuman, $ringkasan, $tindakan));
      
   }
   // echo $stmt->field_count;
} else {
   // Something is wrong with the SQL statement, so you must check to make sure your accounts table exists with all 3 fields.
   echo 'Could not prepare statement!';
}


   $con->close();

$stmt->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Pengumuman</title>

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
            <p class="role">Kualiti-UKM</p>
            <a href="#" class="btn">Lihat Profil</a>
            <div class="flex-btn">
                 <a href="#" class="option-btn">Log Keluar</a>
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
         <p class="role">Kualiti-UKM</p>
         <a href="profile.html" class="btn">Lihat Profil</a>
      </div>

      <nav class="navbar">
      <nav class="navbar">
            <a href="./dashboardkualitiukm.html" class="active"><i class="fas fa-home"></i><span>Dashboard</span></a>
            <a href=""><i class="fas fa-mail"></i><span>Senarai Permohonan</span></a>
            <a href=""><i class="fas fa-align-left"></i><span>Program</span></a>
            <a href=""><i class="fas fa-align-left"></i><span>Laporan</span></a>
            <a href="./pengumuman.php"><i class="fas fa-align-left"></i><span>Pengumuman</span></a>
            <a href=""><i class="fas fa-align-left"></i><span>Pertanyaan</span></a>
        </nav>
      </nav>

   </div>

   <div class="main-body">
      <h2>Pengumuman</h2>
      <div class="pertanyaan-list">
         <div class="row">
            <h4>History</h4>
            <a href="">See all</a>
         </div>
         <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" autocomplete="off" class="sign-in-form"> 

            <table>
               <thead>
                  <tr>
                     <th>#</th>
                     <th>Tarikh</th>
                     <th>Pengumuman</th>
                     <th>Ringkasan Pengumuman</th>
                     <th>Tindakan</th>
                  </tr>
               <?php
               $arrlength = count($list_of_pertanyaan);
               
               for($x = 0; $x < $arrlength; $x++) {
                  echo '<tbody>';
                  for($y = 0; $y < 5; $y++) {
                  echo '<td>', $list_of_pertanyaan[$x][$y], '</td>';
                }
                echo '</tbody>';
               }
               ?>
               <tbody>
                  <td><input type="text" name="no" id="no" style="border: 1px black solid; width: 100px"></td>
                  <td><input type="text" name="date" id="date" style="border: 1px black solid; width: 100px"></td>
                  <td><input type="text" name="pengumuman" id="pengumuman" style="border: 1px black solid; width: 100px"></td>
                  <td><input type="text" name="ringkasan" id="ringkasan" style="border: 1px black solid; width: 100px"></td>
                  <td><input type="text" name="tindakan" id="tindakan" style="border: 1px black solid; width: 100px">
                  </td>
               </tbody>

               <tbody>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td><input type="submit" name="submit" id="submit" value="Hantar"></td>
               </tbody>
               </thead>
            </table>
         </form>
      </div>
   </div>


   <footer>
      <ul class="footer-icons">
         <li><a href="#">
               <ion-icon name="call-outline"></ion-icon>
            </a></li>
         <li><a href="#">
               <ion-icon name="mail-outline"></ion-icon>
            </a></li>
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