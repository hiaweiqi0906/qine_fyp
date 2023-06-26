<?php
include("../php/db.php");
// session_start();
include('../components/kualitiukm_protected_route.php');

$username = "";
$email = "";
$errors = array();
$id = $_SESSION["id"];


$list_of_application = array();

// $con = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
// $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if ($stmt = $con->prepare("SELECT `APPLICATION_ID`, `TARIKH`, `MASA`, `STATUS`, lecturer.`LECTURER_ID`, `KATEGORI`, `NAMA`, appapplication.UNIVERSITI FROM `appapplication` LEFT JOIN `lecturer` ON appapplication.LECTURER_ID = lecturer.LECTURER_ID WHERE `STATUS` = 'PROCESSING'")) {

   $stmt->execute();
   mysqli_stmt_bind_result($stmt, $application_id, $tarikh, $masa, $status, $lecturer_id, $kategori, $nama, $universiti);

// }   /* fetch values */
   while (mysqli_stmt_fetch($stmt)) {
      array_push($list_of_application, array($application_id, $tarikh, $masa, $status, $lecturer_id, $kategori, $nama, $universiti));
   }
   // echo $stmt->field_count;
} else {
   // Something is wrong with the SQL statement, so you must check to make sure your accounts table exists with all 3 fields.
   echo 'Could not prepare statement!';
}

for($hh=0; $hh<count($list_of_application); $hh++){
   $list_of_application[$hh][5] = explode(";", $list_of_application[$hh][5]);
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

      <h1 class="heading">Senarai Permohonan</h1>


      <div class="box-container">

      <?php
      for($i=0; $i<count($list_of_application); $i++){
         $current_application_id = $list_of_application[$i][0];

         echo "<div class=\"box\">
            <div class=\"tutor\">
               <img src=\"../img/profile.png\" alt=\"\">

            </div>

            <p>Tarikh: <span>",$list_of_application[$i][1],"</span></p>
            <p>Masa : <span>",$list_of_application[$i][2],"</span></p>
            <p>Nama : <span>",$list_of_application[$i][6],"</span></p>
            <p>Universiti : <span>",$list_of_application[$i][7],"</span></p>
            <p>Status : <span>",$list_of_application[$i][3],"</span></p>";
            for($jjj=0; $jjj<count($list_of_application[$i][5]); $jjj++){

               $current_kategori = $list_of_application[$i][5][$jjj];
               if($current_kategori !=""){


               echo"<p>Kategori: ".$list_of_application[$i][5][$jjj]."</p>
               ";}
            }
         echo"               <a href=\"../functions/application_action.php?action=ACCEPT&id=$current_application_id&lecturer_id=$lecturer_id\" class=\"inline-btn\">TERIMA</a>

<br>
         <a href=\"../functions/application_action.php?action=REJECT&id=$current_application_id&lecturer_id=$lecturer_id\" class=\"inline-btn\">TOLAK</a>
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