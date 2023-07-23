<?php
include("../php/db.php");
// session_start();
include('../components/kualitiukm_protected_route.php');

$username = "";
$email = "";
$id = $_SESSION["id"];
$pertanyaan_id = $_GET["pertanyaan_id"];
$errors = array();

$list_of_pertanyaan = array();
date_default_timezone_set("Asia/Kuala_Lumpur");
$today_date = date("Y-m-d");

// $con = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
// $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if (isset($_POST['balas'])) {
   $tindakan = mysqli_real_escape_string($con, $_POST['tindakan']);
   if (
      $stmt = $con->prepare("UPDATE pertanyaan SET `PERTANYAAN_STATUS` = 'SUDAH DIPROSES', `TINDAKAN` = '$tindakan' WHERE `PERTANYAAN_ID` = '$pertanyaan_id'")
   ) {
      // We do not want to expose passwords in our database, so hash the password and use password_verify when a user logs in.
      // $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
      // $stmt->bind_param('sss', $_POST['username'], $password, $_POST['email']);
      // $stmt->bindParam(':email', $email, PDO::PARAM_STR);
      $stmt->execute();
      header("Location: pertanyaan_kualiti_ukm.php");
   } else {
      // Something is wrong with the SQL statement, so you must check to make sure your accounts table exists with all 3 fields.
      echo 'Could not prepare statement!';
   }


}

if ($stmt = $con->prepare("SELECT `PERTANYAAN_ID`, `TARIKH`, `PERKARA`, `RINGKASAN`, `PERTANYAAN_STATUS`, `TINDAKAN`  FROM `pertanyaan` WHERE `PERTANYAAN_ID` = '$pertanyaan_id'")) {

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
          include("../components/navbar_kualitiukm.php");
          include("../components/sidebar_kualitiukm.php");
   ?>

   <div class="main-body title-font">
      <h2>Pertanyaan</h2>
      <div class="pertanyaan-list">
         <form style="padding-bottom: 20px; padding-top: 20px;" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])."?pertanyaan_id=".$pertanyaan_id; ?>"
            method="post" autocomplete="off" class="sign-in-form">
            <table class="table" style="width: 100%; ">
               <tr>
                  <td style="width: 33%;">Tarikh</td>
                  <td><?php echo $list_of_pertanyaan[0][1]; ?></td>
               </tr>
               <tr>
                  <td style="width: 33%;">Perkara</td>
                  <td><?php echo $list_of_pertanyaan[0][2]; ?></td>
               </tr>
               <tr>
                  <td style="width: 33%;">Ringkasan</td>
                  <td><?php echo $list_of_pertanyaan[0][3]; ?></td>
               </tr>
               <tr>
                  <td style="width: 33%;">Status</td>
                  <td><?php echo $list_of_pertanyaan[0][4]; ?></td>
               </tr>
               <tr>
                  <td style="width: 33%;">Pembalasan dari Kualiti-UKM</td>
                  <td><textarea rows="6" type="text" name="tindakan" id="tindakan" style="width: 100%" ><?php if(isset($list_of_pertanyaan[0][5])) echo $list_of_pertanyaan[0][5]; ?></textarea></td>
               </tr>
            </table>
            <input type="submit" class="btn" id="balas" name="balas" value="Balas" required>

         </form>
      </div>
   </div>


   <?php
          include("../components/footer.php");
        ?>

   <script src="../js/script.js"></script>

</body>

</html>