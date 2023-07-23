<?php
include("../php/db.php");
// session_start();
include('../components/kualitiukm_protected_route.php');

$username = "";
$email = "";
$errors = array();
$id = $_SESSION["id"];


$list_of_program = array();
$list_of_program_belum_assigned = array();

if ($stmt = $con->prepare("SELECT `PROGRAM_ID`, `NAMA`, `TARIKH`, `URL_DRIVE`, `BIDANG`, `STATUS`, `DESCRIPTION`, `URL_FILE_DRIVE` FROM `program` WHERE 1")) {

   $stmt->execute();
   mysqli_stmt_bind_result($stmt, $program_id, $nama, $tarikh, $url_drive, $bidang, $status, $description, $masa);

   // }   /* fetch values */
   while (mysqli_stmt_fetch($stmt)) {
      if ($status == "ASSIGNED")
         array_push($list_of_program, array($program_id, $nama, $tarikh, $url_drive, $bidang, $status, $description, $masa));
      else
         array_push($list_of_program_belum_assigned, array($program_id, $nama, $tarikh, $url_drive, $bidang, $status, $description, $masa));
   }
} else {
   echo 'Could not prepare statement!';
}
$uu = count($list_of_program_belum_assigned) > 6 ? 6 : count($list_of_program_belum_assigned);
$gg = count($list_of_program) > 6 ? 6 : count($list_of_program);


$con->close();
$stmt->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Senarai Program</title>

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

   <section class="teachers">

      <div class="title">
      <h1 class="heading">Senarai Program Belum Diagih</h1>
         <div class="app--right--btns">

            <?php
            if ($uu > 6)
               echo '<button class="add"  onclick="window.location.href=\'../admin/dashboard_all_app.php\';" style="background: gray;">Lihat Semua</button>';
            ?>
         </div>
      </div>
      <div class="box-container">
         <?php

         for ($i = 0; $i < count($list_of_program_belum_assigned); $i++) {
            $current_application_id = $list_of_program_belum_assigned[$i][0];

            echo "<div class=\"box\">
            <div class=\"tutor\">
            ";
            if (isset($list_of_program_belum_assigned[$i][3])) {
               echo "<img src=\"" . $list_of_program_belum_assigned[$i][3] . "\" alt=\"\">";

            } else {
               echo "<img src=\"../img/program.jpg\" alt=\"\">";

            }
            echo "               <div>
                  <h3>Nama Program: ", $list_of_program_belum_assigned[$i][1], "</h3>
                  <span>Tarikh Terima: ", $list_of_program_belum_assigned[$i][2], "</span>
               </div>
            </div>

            <p>Tarikh: <span>", $list_of_program_belum_assigned[$i][2], "</span></p>
            <p>URL Fail Program : <span>", $list_of_program_belum_assigned[$i][7], "</span></p>
            <p>Status : <span>", $list_of_program_belum_assigned[$i][5], "</span></p>
            <a href=\"./program_information.php?id=$current_application_id\" class=\"inline-btn\">Lihat</a>
         </div>";
         }
         ?>

      </div>

   </section>

   <?php
   include("../components/footer.php");
   ?>

   <script src="../js/script.js"></script>

</body>

</html>