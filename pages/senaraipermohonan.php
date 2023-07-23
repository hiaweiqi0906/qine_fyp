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

if ($stmt = $con->prepare("SELECT `APPLICATION_ID`, `TARIKH`, `MASA`, `STATUS`, lecturer.`LECTURER_ID`, `KATEGORI`, `NAMA`, appapplication.UNIVERSITI FROM `appapplication` LEFT JOIN `lecturer` ON appapplication.LECTURER_ID = lecturer.LECTURER_ID WHERE `STATUS` = 'SEDANG DIPROSES'")) {

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

for ($hh = 0; $hh < count($list_of_application); $hh++) {
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
   <style>
    /* The Modal (background) */
    .modal {
      display: none;
      /* Hidden by default */
      position: fixed;
      /* Stay in place */
      z-index: 5000;
      /* Sit on top */
      padding-top: 100px;
      /* Location of the box */
      left: 0;
      top: 0;
      width: 100%;
      /* Full width */
      height: 100%;
      /* Full height */
      overflow: auto;
      /* Enable scroll if needed */
      background-color: rgb(0, 0, 0);
      /* Fallback color */
      background-color: rgba(0, 0, 0, 0.4);
      /* Black w/ opacity */
    }

    /* .collapsible {
      background-color: #777;
      color: white;
      cursor: pointer;
      padding: 18px;
      width: 100%;
      border: none;
      text-align: left;
      outline: none;
      font-size: 15px;
    }
     */
    @media print {
      html {
        padding: 10px;
        overflow: visible !important;
      }
    }

    .bahagian {
      margin-top: 60px;
    }



    .collapsible {
      /* display:none; */
    }

    textarea,
    input {
      border: none;
    }

    textarea:focus,
    input:focus,
    input {
      outline: none;

    }


    .content {
      padding: 0 18px;
      display: block;
      overflow: hidden;
      background-color: #f1f1f1;
    }

    .div-center {
      text-align: center;
      margin-bottom: 30px;
    }

    .invi-at-first {
      display: block;
    }

    td {
      padding: 10px;
    }

    table,
    td,
    th {
      border: 1px solid;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin: 10px;
    }

    h3 {
      margin: 10px;
    }

    h3.collapsible {
      margin-top: 30px;
    }

    .inner-div{
      width: 50%;
    }

    /* Modal Content */
    .modal-content {
      background-color: var(--light-bg);
      ;
      margin: auto;
      padding: 20px;
      border: 1px solid #888;
      width: 50%;
    }

    /* The Close Button */
    .close {
      color: #aaaaaa;
      float: right;
      font-size: 28px;
      font-weight: bold;
    }

    .close:hover,
    .close:focus {
      color: #000;
      text-decoration: none;
      cursor: pointer;
    }
  </style>

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
         for ($i = 0; $i < count($list_of_application); $i++) {
            $current_application_id = $list_of_application[$i][0];
            echo "<div class=\"box\">";

            echo "<div class=\"tutor\">
               <img src=\"../img/profile.png\" alt=\"\">

            </div>
            <p>Tarikh: <span>", $list_of_application[$i][1], "</span></p>
            <p>Masa : <span>", $list_of_application[$i][2], "</span></p>
            <p>Nama : <span>", $list_of_application[$i][6], "</span></p>
            <p>Universiti : <span>", $list_of_application[$i][7], "</span></p>
            <p>Status : <span>", $list_of_application[$i][3], "</span></p>";
            for ($jjj = 0; $jjj < count($list_of_application[$i][5]); $jjj++) {

               $current_kategori = $list_of_application[$i][5][$jjj];
               if ($current_kategori != "") {


                  echo "<p>Kategori: " . $list_of_application[$i][5][$jjj] . "</p>
               ";
               }
            }
            echo "               <a href=\"./permohonan_details.php?id=$current_application_id&lecturer_id=$lecturer_id\" class=\"inline-btn\">LIHAT</a>

<br>";
            echo "               <a href=\"../functions/application_action.php?action=ACCEPT&id=$current_application_id&lecturer_id=$lecturer_id\" class=\"inline-btn\">TERIMA</a>
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