<?php
include("../php/db.php");
include('../components/lecturer_protected_route.php');

$username = "";
$email = "";
$errors = array();
$id = $_SESSION["id"];

$list_of_pengumuman = array();

if (isset($_POST['submit'])) {
   $pengumuman= mysqli_real_escape_string($con, $_POST['pengumuman']);
   date_default_timezone_set("Asia/Kuala_Lumpur");
   $today_date = date("Y-m-d");

   if (
      $stmt = $con->prepare("INSERT INTO `pengumuman`(`TARIKH`, `PENGUMUMAN`, `KUALITIUKM_ID`) VALUES 
    ('$today_date', '$pengumuman', '$id')")
   ) {
      $stmt->execute();
   } else {
      // Something is wrong with the SQL statement, so you must check to make sure your accounts table exists with all 3 fields.
      echo 'Could not prepare statement!';
   }
   

}

if ($stmt = $con->prepare("SELECT `PENGUMUMAN_ID`, `TARIKH`, `PENGUMUMAN`, `KUALITIUKM_ID` FROM `pengumuman` WHERE `KUALITIUKM_ID`='$id'")) {

   $stmt->execute();
   mysqli_stmt_bind_result($stmt, $pengumuman_id, $tarikh, $pengumuman, $kualitiukm_id);
   
// }   /* fetch values */
   while (mysqli_stmt_fetch($stmt)) {
      array_push($list_of_pengumuman, array($pengumuman_id, $tarikh, $pengumuman, $kualitiukm_id));
      
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

      <?php
          include("../components/navbar_lecturer.php");
          include("../components/sidebar_lecturer.php");

        ?>

   <div class="main-body">
      <h2>Pengumuman</h2>
      <div class="pertanyaan-list">
         <div class="row">
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
               $arrlength = count($list_of_pengumuman);
               
               for($x = 0; $x < $arrlength; $x++) {
                  echo '<tbody>';
                  for($y = 0; $y < 5; $y++) {
                  echo '<td>', $list_of_pengumuman[$x][$y], '</td>';
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