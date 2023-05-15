<?php
include("../php/db.php");
// session_start();
include('../components/app_protected_route.php');

$username = "";
$email = "";
$errors = array();
$id = $_SESSION["id"];

$list_of_pertanyaan = array();

// $con = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
// $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if (isset($_POST['submit'])) {
   $perkara= mysqli_real_escape_string($con, $_POST['perkara']);
   $ringkasan= mysqli_real_escape_string($con, $_POST['ringkasan']);
   date_default_timezone_set("Asia/Kuala_Lumpur");
   $today_date = date("Y-m-d");
   if (
      $stmt = $con->prepare("INSERT INTO pertanyaan (`TARIKH`, `PERKARA`, `RINGKASAN`, `PERTANYAAN_STATUS`, `TINDAKAN`, `JENIS`, `ID`) VALUES 
    ('$today_date', '$perkara', '$ringkasan', 'PROCESSING', '', 'app', '$id')")
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

if ($stmt = $con->prepare("SELECT `PERTANYAAN_ID`, `TARIKH`, `PERKARA`, `RINGKASAN`, `PERTANYAAN_STATUS`, `TINDAKAN` FROM `pertanyaan` WHERE `ID` = '$id' AND `JENIS` = 'app'")) {

   $stmt->execute();
   mysqli_stmt_bind_result($stmt, $pertanyaan_id, $tarikh, $perkara, $ringkasan, $pertanyaan_status, $tindakan);
   
// }   /* fetch values */
   while (mysqli_stmt_fetch($stmt)) {
      array_push($list_of_pertanyaan, array($pertanyaan_id, $tarikh, $perkara, $ringkasan, $pertanyaan_status, $tindakan));
      
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
   <title>Pertanyaan</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="../style/stylepertanyaan.css">
   <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
   <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
</head>

<body>

<?php
          include("../components/navbar_app.php");
          include("../components/sidebar_app.php");

        ?>
   
   <div class="main-body">
      <h2>Pertanyaan</h2>
      <div class="pertanyaan-list">
         <div class="row">
         </div>
         <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" autocomplete="off" class="sign-in-form"> 

         <table>
               <thead>
                  <tr>
                     <th>#</th>
                     <th>Tarikh</th>
                     <th>Perkara</th>
                     <th>Ringkasan</th>
                     <th>Status</th>
                     <th>Tindakan</th>
                  </tr><tbody>
                  <td></td>
                  <td></td>
                  <td><input type="text" name="perkara" id="perkara" style="border: 1px black solid; width: 100px"></td>
                  <td><input type="text" name="ringkasan" id="ringkasan" style="border: 1px black solid; width: 100px"></td>   
                  <td></td>
                  <td></td>
               </tbody>
               <?php
               $arrlength = count($list_of_pertanyaan);
               
               for($x = 0; $x < $arrlength; $x++) {
                  echo '<tbody>';
                  echo '<td>',$x+1,'</td>';
                  for($y = 1; $y < 6; $y++) {
                  echo '<td>', $list_of_pertanyaan[$x][$y], '</td>';
                }
                echo '</tbody>';
               }
               ?>
               

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