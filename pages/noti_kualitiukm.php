<?php
include("../php/db.php");
include('../components/kualitiukm_protected_route.php');

$username = "";
$email = "";
$errors = array();
$id = $_SESSION["id"];

$list_of_pengumuman = array();


if ($stmt = $con->prepare("SELECT `NOTI_ID`, `KUALITIUKM_ID`, `TEXT`, `TARIKH`, `MASA`, `READ_NOTI` FROM `kualitiukm_noti` where KUALITIUKM_ID = '$id' ORDER BY `READ_NOTI`, `TARIKH` DESC, `MASA` DESC")) {

   $stmt->execute();
   mysqli_stmt_bind_result($stmt, $noti_id, $app_id, $text, $tarikh, $masa, $read_noti);

   // }   /* fetch values */
   while (mysqli_stmt_fetch($stmt)) {
      array_push($list_of_pengumuman, array($noti_id, $app_id, $text, $tarikh, $masa, $read_noti));

   }
   // echo $stmt->field_count;
} else {
   // Something is wrong with the SQL statement, so you must check to make sure your accounts table exists with all 3 fields.
   echo 'Could not prepare statement!';
}

if ($stmt = $con->prepare("UPDATE `kualitiukm_noti` SET `READ_NOTI`='T' where KUALITIUKM_ID = '$id'")) {

   $stmt->execute();
   // echo $stmt->field_count;
} else {
   // Something is wrong with the SQL statement, so you must check to make sure your accounts table exists with all 3 fields.
   echo 'Could not prepare statement!';
}

date_default_timezone_set("Asia/Kuala_Lumpur");
$today_date = date("Y-m-d");
$con->close();
$stmt->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Notifikasi</title>

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
   include("../components/pengumuman.php");

   ?>

   <div class="main-body">
      <h2>Notifikasi</h2>
      <div class="pertanyaan-list">
         <div class="row">
         </div>
         <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" autocomplete="off"
            class="sign-in-form">


 <?php
            for ($i = 0; $i < count($list_of_pengumuman); $i++) {
               echo "<div class=\"pengumuman\"";
               if($list_of_pengumuman[$i][5]=='T') echo"style=\"background-color: gray\"";
               echo"> <p class=\"pengumuman-text\">Tarikh: ", $list_of_pengumuman[$i][3], "</p><p class=\"pengumuman-text\">Masa: ", $list_of_pengumuman[$i][4], "</p>

    <p class=\"pengumuman-content\">", $list_of_pengumuman[$i][2], "</p>


    </div><hr>";
            }
            ?>





         </form>
      </div>
   </div>


   <?php
          include("../components/footer.php");
        ?>

   <script src="../js/script.js"></script>

</body>

</html>