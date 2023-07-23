<?php
include("../php/db.php");
// session_start();
include('../components/app_protected_route.php');
if (!isset ($_GET['page']) ) {
    $page = 1;
} else {
    $page = $_GET['page'];
}

$username = "";
$email = "";
$id = $_SESSION["id"];
$results_per_page = 10;
$errors = array();

$list_of_pertanyaan = array();
date_default_timezone_set("Asia/Kuala_Lumpur");
$today_date = date("Y-m-d");

// $con = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
// $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if (isset($_POST['submit'])) {
   $perkara= mysqli_real_escape_string($con, $_POST['perkara']);
   $ringkasan= mysqli_real_escape_string($con, $_POST['ringkasan']);
   if (
      $stmt = $con->prepare("INSERT INTO pertanyaan (`TARIKH`, `PERKARA`, `RINGKASAN`, `PERTANYAAN_STATUS`, `TINDAKAN`, `JENIS`, `ID`) VALUES
    ('$today_date', '$perkara', '$ringkasan', 'SEDANG DIPROSES', '', 'app', '$id')")
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

if ($stmt = $con->prepare("SELECT `PERTANYAAN_ID`, `TARIKH`, `PERKARA`, `RINGKASAN`, `PERTANYAAN_STATUS`, `TINDAKAN`  FROM `pertanyaan` WHERE `ID` = '$id' AND `JENIS` = 'app' ORDER BY `TARIKH` DESC")) {

   $stmt->execute();
   mysqli_stmt_bind_result($stmt, $pertanyaan_id, $tarikh, $perkara, $ringkasan, $pertanyaan_status, $tindakan);

// }   /* fetch values */
   while (mysqli_stmt_fetch($stmt)) {
      array_push($list_of_pertanyaan, array($pertanyaan_id, $tarikh, $perkara, $ringkasan, $pertanyaan_status, $tindakan));
   }
   $number_of_result = count($list_of_pertanyaan);
   // echo $stmt->field_count;
} else {
   // Something is wrong with the SQL statement, so you must check to make sure your accounts table exists with all 3 fields.
   echo 'Could not prepare statement!';
}
$number_of_page = ceil ($number_of_result / $results_per_page);
$page_first_result = ($page-1) * $results_per_page;
$list_of_pertanyaan = array();

if ($stmt = $con->prepare("SELECT `PERTANYAAN_ID`, `TARIKH`, `PERKARA`, `RINGKASAN`, `PERTANYAAN_STATUS`, `TINDAKAN`  FROM `pertanyaan` WHERE `ID` = '$id' AND `JENIS` = 'app'  ORDER BY `TARIKH` DESC LIMIT $page_first_result, $results_per_page")) {

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

$stmt->close();
$con->close();


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
          include("../components/pengumuman.php");
        ?>

   <div class="main-body title-font">
      <h2>Pertanyaan</h2>
      <div class="pertanyaan-list">
         <form style="padding-bottom: 30px;"  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" autocomplete="off" class="sign-in-form">

            <table class="table" style="width: 100%; ">
                  <tr>
                     <th>#</th>
                     <th>Tarikh</th>
                     <th>Perkara</th>
                     <th>Ringkasan</th>
                     <th>Status</th>
                     <th>Tindakan</th>
                  </tr>
                  <tr>
                  <td>1</td>
                  <td><?php echo $today_date;?></td>
                  <td><input type="text" name="perkara" id="perkara" style="width: 100%"></td>
                  <td><input type="text" name="ringkasan" id="ringkasan" style="width: 100%"></td>
                  <td>-</td>
                  <td>-</td>
               </tr>
               <?php
               $arrlength = count($list_of_pertanyaan);

               for($x = 0; $x < $arrlength; $x++) {
                  echo '<tr>';
                  echo '<td>',$x+1,'</td>';
                  for($y = 1; $y < 5; $y++) {
                     echo '<td>', $list_of_pertanyaan[$x][$y], '</td>';
                  }
                  echo '<td> <a href="./pertanyaan_app_detail.php?pertanyaan_id='.$list_of_pertanyaan[$x][0].'">Lihat</a></td>';
                  echo '</tr>';
               }
               ?>


               <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
               </tr>
            </table>
            <div style="text-align: center; width: 100%; font-size: 1.5rem;">

               <?php for($page = 1; $page<= $number_of_page; $page++) {
                  echo '<a href = "./pertanyaan.php?page=' . $page . '">' . $page . ' </a>';
               }?>
         </div>
            <input type="submit" name="submit" id="submit" style="background-color: #5d7851; margin: 120px 0 30px 0; width: 30%; height: 50px; color: white; border-radius: 5px; margin-left: auto; margin-right: auto; display: block; font-size: 1.8rem;" value="Hantar">

         </form>
      </div>
   </div>


   <?php
          include("../components/footer.php");
        ?>

   <script src="../js/script.js"></script>

</body>

</html>