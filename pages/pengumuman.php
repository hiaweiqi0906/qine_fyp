<?php
include("../php/db.php");
include('../components/kualitiukm_protected_route.php');

$username = "";
$email = "";
$errors = array();
$id = $_SESSION["id"];

$list_of_pengumuman = array();

if (isset($_POST['submit'])) {
   $pengumuman = mysqli_real_escape_string($con, $_POST['pengumuman']);
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
}else if(isset($_POST['hapus'])){
   $p_id = mysqli_real_escape_string($con, $_POST['p_id']);
   if (
      $stmt = $con->prepare("DELETE FROM `pengumuman` WHERE PENGUMUMAN_ID = '$p_id'")
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
   include("../components/navbar_kualitiukm.php");
   include("../components/sidebar_kualitiukm.php");

   ?>

   <div class="main-body title-font">
      <h2>Pengumuman</h2>
      <div class="pertanyaan-list">
         <div class="row">
         </div>
         <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" autocomplete="off"
            class="sign-in-form">
            <?php

            echo "<div class=\"pengumuman\"> <p class=\"pengumuman-text\">Tarikh: ", $today_date, "</p>

 <p class=\"pengumuman-content\"><textarea type=\"text\" rows=\"6\" name=\"pengumuman\" id=\"pengumuman\" style=\"margin-top: 10px; border: 1px black solid; width: 100%;\"></textarea></p>
 <input type=\"submit\" name=\"submit\" id=\"submit\" value=\"Hantar\" style=\"background-color: #5d7851; width: 30%; height: 50px; color: white; border-radius: 5px; margin-left: auto; margin-right: auto; display: block; font-size: 1.8rem;\">

 </div><hr>";?>

 <?php
            for ($i = 0; $i < count($list_of_pengumuman); $i++) {
               echo "<div class=\"pengumuman\"> <p class=\"pengumuman-text\">Tarikh: ", $list_of_pengumuman[$i][1], "</p>

    <p class=\"pengumuman-content\">", $list_of_pengumuman[$i][2], "</p>
    <input type=\"text\" name=\"p_id\" id=\"p_id\" value=\"".$list_of_pengumuman[$i][0]."\" hidden readonly/>
    <input type=\"submit\" name=\"hapus\" id=\"hapus\" value=\"Hapus\" style=\"background-color: #5d7851; width: 30%; height: 50px; color: white; border-radius: 5px; margin-left: auto; margin-right: auto; display: block; font-size: 1.8rem;\">

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