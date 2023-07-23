<?php
include("../php/db.php");
// session_start();
include('../components/kualitiukm_protected_route.php');

$username = "";
$email = "";
$errors = array();
$id = $_SESSION["id"];

$assigned = false;

$program_id = $_GET["id"];
$program_details = array();
$assigned_program_details = array();
$assigned_app = array();
$list_of_app = array();
date_default_timezone_set("Asia/Kuala_Lumpur");
$today_date = date("Y-m-d");
$current_time = date("H-i-s");


// $stmt = $con->prepare("SELECT `APPPROGRAM_ID`, `TARIKH_TERIMA`, `APP_ID_PENGERUSI`, `PROGRAM_ID`, `KUALITIUKM_ID`, `APP_ID_PANEL_1`, `APP_ID_PANEL_2` FROM `appprogram` WHERE 1")
// $stmt = $con->prepare("SELECT `PROGRAM_ID`, `NAMA`, `TARIKH`, `URL_DRIVE`, `BIDANG`, `STATUS`, `DESCRIPTION`, `MASA` FROM `program` WHERE `PROGRAM_ID`='$program_id'")
if ($stmt = $con->prepare("SELECT `APPPROGRAM_ID`, `TARIKH_TERIMA`, `APP_ID_PENGERUSI`, `PROGRAM_ID`, `KUALITIUKM_ID`, `APP_ID_PANEL_1`, `KATEGORI` FROM `appprogram` WHERE `PROGRAM_ID`='$program_id'")) {

   $stmt->execute();
   mysqli_stmt_bind_result($stmt, $app_program_id, $tarikh_terima, $app_id_pengerusi, $program_id, $kualiti_ukm_id, $app_id_panel_1, $kat);

   // }   /* fetch values */
   while (mysqli_stmt_fetch($stmt)) {
      $assigned = true;
      array_push($assigned_program_details, array($app_program_id, $tarikh_terima, $app_id_pengerusi, $program_id, $kualiti_ukm_id, $app_id_panel_1, $kat));
   }
} else {
   // Something is wrong with the SQL statement, so you must check to make sure your accounts table exists with all 3 fields.
   echo 'Could not prepare statement!';
}

if ($stmt = $con->prepare("SELECT `PROGRAM_ID`, `NAMA`, `TARIKH`, `URL_DRIVE`, `BIDANG`, `STATUS`, `DESCRIPTION`, `URL_FILE_DRIVE` FROM `program` WHERE `PROGRAM_ID`='$program_id'")) {

   $stmt->execute();
   mysqli_stmt_bind_result($stmt, $program_id, $nama, $tarikh, $url_drive, $bidang, $status, $description, $masa);

   // }   /* fetch values */
   while (mysqli_stmt_fetch($stmt)) {
      array_push($program_details, array($program_id, $nama, $tarikh, $url_drive, $bidang, $status, $description, $masa));
   }
} else {
   // Something is wrong with the SQL statement, so you must check to make sure your accounts table exists with all 3 fields.
   echo 'Could not prepare statement!';
}

$appr_people = array();
$program_bidang = $program_details[0][4];
if (
   $stmt = $con->prepare("SELECT xxx.APP_ID, xxx.NAMA, xxx.UNIVERSITI, xxx.KATEGORI, COUNT(xxx.APP_ID) AS FREQ FROM

(SELECT a.APP_ID, a.NAMA, a.UNIVERSITI, a.KATEGORI, ap.APPPROGRAM_ID FROM `app` a JOIN appprogram ap ON a.APP_ID = ap.APP_ID_PENGERUSI WHERE a.`BIDANG`='$program_bidang'
UNION
SELECT a.APP_ID,a.NAMA, a.UNIVERSITI, a.KATEGORI, ap.APPPROGRAM_ID as cnt FROM `app` a JOIN appprogram ap ON a.APP_ID = ap.APP_ID_PANEL_1 WHERE a.`BIDANG`='$program_bidang'
 ) xxx

GROUP BY xxx.APP_ID ")
) {
   $stmt->execute();
   mysqli_stmt_bind_result($stmt, $app_id, $nama, $uni, $kat, $bilangan);
   while (mysqli_stmt_fetch($stmt)) {
      array_push($appr_people, array($app_id, $nama, $uni, $kat, $bilangan));
   }
} else {
   echo 'Could not prepare statement!';
}

$bb = 0;
if (
   $stmt = $con->prepare("SELECT xxx.APP_ID, xxx.NAMA, xxx.UNIVERSITI, xxx.KATEGORI FROM

app xxx")
) {
   $stmt->execute();
   mysqli_stmt_bind_result($stmt, $app_id, $nama, $uni, $kat);
   $a_p = $appr_people;
   $b_f = true;
   while (mysqli_stmt_fetch($stmt)) {
      for ($jjjj = 0; $jjjj < count($a_p); $jjjj++) {
         if ($a_p[$jjjj][0] == $app_id) {
            $b_f = false;
            break;
         }
      }
      if ($b_f) {
         array_push($appr_people, array($app_id, $nama, $uni, $kat, $bb));
      }$b_f = true;

   }
} else {
   echo 'Could not prepare statement!';
}

function arrangeInternalAndExternal($arr) {
   return $arr;
 }


if ($stmt = $con->prepare("SELECT `APP_ID`, `NAMA` FROM `app` WHERE 1")) {
   $stmt->execute();
   mysqli_stmt_bind_result($stmt, $app_id, $nama);
   while (mysqli_stmt_fetch($stmt)) {
      array_push($list_of_app, array($app_id, $nama));
   }
} else {
   echo 'Could not prepare statement!';
}
// $list_of_app = array();
$list_of_app_iso = array();
$list_of_app_eksa = array();
$list_of_app_isms = array();
$list_of_app_mqa = array();

$list_of_app_iso_ = array();
$list_of_app_eksa_ = array();
$list_of_app_isms_ = array();
$list_of_app_mqa_ = array();

for ($uu = 0; $uu < count($appr_people); $uu++) {
   if (str_contains($appr_people[$uu][3], 'EKSA') && $appr_people[$uu][4] < 5) {
      if($appr_people[$uu][2] == "Universiti Kebangsaan Malaysia"){
         array_push($list_of_app_eksa, array($appr_people[$uu][0], $appr_people[$uu][1], $appr_people[$uu][4]));
      }else{
         array_push($list_of_app_eksa_, array($appr_people[$uu][0], $appr_people[$uu][1], $appr_people[$uu][4]));
      }
   }

   if (str_contains($appr_people[$uu][3], 'ISO') && $appr_people[$uu][4] < 5) {
      if($appr_people[$uu][2] == "Universiti Kebangsaan Malaysia"){
         array_push($list_of_app_iso, array($appr_people[$uu][0], $appr_people[$uu][1], $appr_people[$uu][4]));
      }else{
         array_push($list_of_app_iso_, array($appr_people[$uu][0], $appr_people[$uu][1], $appr_people[$uu][4]));
      }
   }

   if (str_contains($appr_people[$uu][3], 'ISMS') && $appr_people[$uu][4] < 5) {
      if($appr_people[$uu][2] == "Universiti Kebangsaan Malaysia"){
         array_push($list_of_app_isms, array($appr_people[$uu][0], $appr_people[$uu][1], $appr_people[$uu][4]));
      }else{
         array_push($list_of_app_isms_, array($appr_people[$uu][0], $appr_people[$uu][1], $appr_people[$uu][4]));
      }
   }

   if (str_contains($appr_people[$uu][3], 'MQA') && $appr_people[$uu][4] < 5) {
      if($appr_people[$uu][2] == "Universiti Kebangsaan Malaysia"){
         array_push($list_of_app_mqa, array($appr_people[$uu][0], $appr_people[$uu][1], $appr_people[$uu][4]));
      }else{
         array_push($list_of_app_mqa_, array($appr_people[$uu][0], $appr_people[$uu][1], $appr_people[$uu][4]));
      }
   }
   // array_push($list_of_app, array($appr_people[$uu][0], $appr_people[$uu][1]));
}

if ($assigned) {
   for ($x = 0; $x < count($list_of_app); $x++) {
      if ($list_of_app[$x][0] == $assigned_program_details[0][2]) {
         array_push($assigned_app, array($list_of_app[$x][0], $list_of_app[$x][1]));
      }
   }

   for ($x = 0; $x < count($list_of_app); $x++) {
      if ($list_of_app[$x][0] == $assigned_program_details[0][5]) {
         array_push($assigned_app, array($list_of_app[$x][0], $list_of_app[$x][1]));
      }
   }




}

if (isset($_POST['submit'])) {
   $pengerusi = $_POST["pengerusi"];
   $panel_1 = $_POST["panel_1"];
   $kat = $_POST["kat"];
   $program_id = $program_details[0][0];
   if (
      $stmt = $con->prepare("INSERT INTO `appprogram`(`TARIKH_TERIMA`, `APP_ID_PENGERUSI`, `PROGRAM_ID`, `KUALITIUKM_ID`, `APP_ID_PANEL_1`, `KATEGORI`)
                                             VALUES ('$today_date','$pengerusi','$program_id','$id','$panel_1', '$kat')")
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

   if (
      $stmt = $con->prepare("UPDATE `program`SET `STATUS` = 'ASSIGNED' WHERE PROGRAM_ID = '$program_id'")
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

   if (
      $stmt = $con->prepare("INSERT INTO `app_noti`(`APP_ID`, `TEXT`, `TARIKH`, `MASA`) VALUES ('$pengerusi', 'ANDA TELAH DIBAHAGIKAN SATU PROGRAM UNTUK MEMBUAT LAPORAN.\n JAWATAN: PENGERUSI', '$today_date','$current_time')")
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

   if (
      $stmt = $con->prepare("INSERT INTO `app_noti`(`APP_ID`, `TEXT`, `TARIKH`, `MASA`) VALUES ('$panel_1', 'ANDA TELAH DIBAHAGIKAN SATU PROGRAM UNTUK MEMBUAT LAPORAN.\n JAWATAN: AHLI PANEL 1', '$today_date','$current_time')")
   ) {
      // We do not want to expose passwords in our database, so hash the password and use password_verify when a user logs in.
      // $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
      // $stmt->bind_param('sss', $_POST['username'], $password, $_POST['email']);
      // $stmt->bindParam(':email', $email, PDO::PARAM_STR);
      $stmt->execute();
      echo 'You have successfully registered! You can now login!';
   } else {
      // Something is wrong with the SQL statement, so you must check to make sure your accounts table exists with all 3 fields.
      echo 'Could not prepare statement!';
   }



   if (
      $stmt = $con->prepare("INSERT INTO `kualitiukm_noti`(`KUALITIUKM_ID`, `TEXT`, `TARIKH`, `MASA`) VALUES ('$id', 'ANDA TELAH AGIH PROGRAM!', '$today_date','$current_time')")
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

   header("location: ./senaraiprogram.php");

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
   <script type="text/javascript">
      var apps = <?php echo json_encode($appr_people); ?>;
   </script>
   <style>
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
   </style>
</head>

<body>

   <?php
   include("../components/navbar_kualitiukm.php");
   include("../components/sidebar_kualitiukm.php");
   ?>

   <section class="teachers">

      <h1 class="heading">Program Informasi</h1>

      <div class="box-container">
         <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]), "?id=$program_id"; ?>" method="post"
            autocomplete="off" class="sign-in-form">

            <?php
            for ($i = 0; $i < count($program_details); $i++) {
               $current_application_id = $program_details[$i][0];

               echo "<div class=\"box\">
            <div class=\"tutor\">
            ";
               if (isset($program_details[$i][3])) {
                  echo "<img src=\"" . $program_details[$i][3] . "\" alt=\"\">";
               } else {
                  echo "<img src=\"../img/program.jpg\" alt=\"\">";
               }
               echo "               <div>
                  <h3>Nama Program: ", $program_details[$i][1], "</h3>
                  <span>Tarikh Terima: ", $program_details[$i][2], "</span>
               </div>
            </div>
            <p>Informasi: <a href=\"../functions/generate_program.php?pid=" . $program_details[$i][0] . "\"><span>Muat Turun</span></a></p>
            <p>Tarikh: <span>", $program_details[$i][2], "</span></p>
            <p>URL Fail Program : <span>", $program_details[$i][7], "</span></p>
            <p>Status : <span>", $program_details[$i][5], "</span></p>";
               echo "<p><label for=\"kat\">Kategori:</label></p>";
               if (!$assigned) {
                  echo '
         <select name="kat" id="kat" onchange="update_app()">
               <option value="ISO" selected>ISO</option>
               <option value="EKSA" >EKSA</option>
               <option value="ISMS" >ISMS</option>
               <option value="MQA" >MQA</option>
         </select>';
               } else {
                  echo '
         <select name="kat" id="kat">
               <option value="" selected>' . $assigned_program_details[0][6] . '</option>
         </select>';
               }

               echo "<div id=\"div-iso\" style=\"display: block;\">";
               if (!$assigned) {
                  echo "<p>People Suggestions : <span>";
                  $ll =count($list_of_app_iso) > 6? 6 : count($list_of_app_iso);
                  for ($oo = 0; $oo < $ll; $oo++) {
                     echo "" . $list_of_app_iso[$oo][1] . ", ";
                  }
                  $lll =count($list_of_app_iso_) > 6? 6 : count($list_of_app_iso_);
                  for ($oo = 0; $oo < $lll; $oo++) {
                     echo "" . $list_of_app_iso_[$oo][1] . ", ";
                  }
                  echo "</span></p>";
                  echo "<table><tr><td>Nama (APP Internal)</td><td>Bilangan Program Yang Diagih</td></tr>";
                  for ($oo = 0; $oo < $ll; $oo++) {
                     echo "<tr><td>" . $list_of_app_iso[$oo][1] . "</td><td>" . $list_of_app_iso[$oo][2] . "</td></tr>";
                  }
                  echo"</table>";

                  echo "<table><tr><td>Nama (APP External)</td><td>Bilangan Program Yang Diagih</td></tr>";
                  for ($oo = 0; $oo < $lll; $oo++) {
                     echo "<tr><td>" . $list_of_app_iso_[$oo][1] . "</td><td>" . $list_of_app_iso_[$oo][2] . "</td></tr>";
                  }
                  echo"</table>";
               }


               echo "<p><label for=\"pengerusi\">Pengerusi:</label></p>

            <select name=\"pengerusi1\" id=\"pengerusi1\"  onchange=\"update_pengerusi_1()\">
            ";
               if ($assigned) {
                  echo "<option value='", $assigned_app[0][0], "' selected>", $assigned_app[0][1], "</option>";
               } else {
                  for ($y = 0; $y < ($ll); $y++) {
                     echo "<option value='", $list_of_app_iso[$y][0], "'>", $list_of_app_iso[$y][1], "</option>";
                  }
               }

               echo "</select>

            <p><label for=\"panel_1\">Ahli Panel 1:</label></p>

            <select name=\"panel_11\" id=\"panel_11\" onchange=\"update_panel_1()\">
            ";
               if ($assigned) {
                  echo "<option value='", $assigned_app[1][0], "' selected>", $assigned_app[1][1], "</option>";
               } else {
                  for ($y = 0; $y < ($lll); $y++) {
                     echo "<option value='", $list_of_app_iso_[$y][0], "'>", $list_of_app_iso_[$y][1], "</option>";
                  }
               }

               echo "</select></div>
            ";

               echo "<div id=\"div-eksa\" style=\"display: none;\">";
               if (!$assigned) {
                  echo "<p>People Suggestions : <span>";
                  $ll =count($list_of_app_eksa) > 6? 6 : count($list_of_app_eksa);
                  for ($oo = 0; $oo < $ll; $oo++) {
                     echo "" . $list_of_app_eksa[$oo][1] . ", ";
                  }
                  $lll =count($list_of_app_eksa_) > 6? 6 : count($list_of_app_eksa_);
                  for ($oo = 0; $oo < $lll; $oo++) {
                     echo "" . $list_of_app_eksa_[$oo][1] . ", ";
                  }
                  echo "</span></p>";
                  echo "<table><tr><td>Nama (APP Internal)</td><td>Bilangan Program Yang Diagih</td></tr>";
                  for ($oo = 0; $oo < $ll; $oo++) {
                     echo "<tr><td>" . $list_of_app_eksa[$oo][1] . "</td><td>" . $list_of_app_eksa[$oo][2] . "</td></tr>";
                  }
                  echo"</table>";

                  echo "<table><tr><td>Nama (APP External)</td><td>Bilangan Program Yang Diagih</td></tr>";
                  for ($oo = 0; $oo < $lll; $oo++) {
                     echo "<tr><td>" . $list_of_app_eksa_[$oo][1] . "</td><td>" . $list_of_app_eksa_[$oo][2] . "</td></tr>";
                  }
                  echo"</table>";
               }

               echo "<p><label for=\"pengerusi\">Pengerusi:</label></p>

            <select name=\"pengerusi2\" id=\"pengerusi2\" onchange=\"update_pengerusi_2()\">
            ";
               if ($assigned) {
                  echo "<option value='", $assigned_app[0][0], "' selected>", $assigned_app[0][1], "</option>";
               } else {
                  for ($y = 0; $y < ($ll); $y++) {
                     echo "<option value='", $list_of_app_eksa[$y][0], "'>", $list_of_app_eksa[$y][1], "</option>";
                  }
               }

               echo "</select>

            <p><label for=\"panel_1\">Ahli Panel 1:</label></p>

            <select name=\"panel_12\" id=\"panel_12\" onchange=\"update_panel_2()\">
            ";
               if ($assigned) {
                  echo "<option value='", $assigned_app[1][0], "' selected>", $assigned_app[1][1], "</option>";
               } else {
                  for ($y = 0; $y < $lll; $y++) {
                     echo "<option value='", $list_of_app_eksa_[$y][0], "'>", $list_of_app_eksa_[$y][1], "</option>";
                  }
               }

               echo "</select></div>
            ";

               echo "<div id=\"div-isms\" style=\"display: none;\">";
               if (!$assigned) {
                  echo "<p>People Suggestions : <span>";
                  $ll =count($list_of_app_isms) > 6? 6 : count($list_of_app_isms);
                  for ($oo = 0; $oo < $ll; $oo++) {
                     echo "" . $list_of_app_isms[$oo][1] . ", ";
                  }
                  $lll =count($list_of_app_isms_) > 6? 6 : count($list_of_app_isms_);
                  for ($oo = 0; $oo < $lll; $oo++) {
                     echo "" . $list_of_app_isms_[$oo][1] . ", ";
                  }
                  echo "</span></p>";
                  echo "<table><tr><td>Nama (APP Internal)</td><td>Bilangan Program Yang Diagih</td></tr>";
                  for ($oo = 0; $oo < $ll; $oo++) {
                     echo "<tr><td>" . $list_of_app_isms[$oo][1] . "</td><td>" . $list_of_app_isms[$oo][2] . "</td></tr>";
                  }
                  echo"</table>";

                  echo "<table><tr><td>Nama (APP External)</td><td>Bilangan Program Yang Diagih</td></tr>";
                  for ($oo = 0; $oo < $lll; $oo++) {
                     echo "<tr><td>" . $list_of_app_isms_[$oo][1] . "</td><td>" . $list_of_app_isms_[$oo][2] . "</td></tr>";
                  }
                  echo"</table>";
               }

               echo "<p><label for=\"pengerusi\">Pengerusi:</label></p>

            <select name=\"pengerusi3\" id=\"pengerusi3\" onchange=\"update_pengerusi_3()\">
            ";
               if ($assigned) {
                  echo "<option value='", $assigned_app[0][0], "' selected>", $assigned_app[0][1], "</option>";
               } else {
                  for ($y = 0; $y < $ll; $y++) {
                     echo "<option value='", $list_of_app_isms[$y][0], "'>", $list_of_app_isms[$y][1], "</option>";
                  }
               }

               echo "</select>

            <p><label for=\"panel_13\">Ahli Panel 1:</label></p>

            <select name=\"panel_13\" id=\"panel_13\"onchange=\"update_panel_3()\">
            ";
               if ($assigned) {
                  echo "<option value='", $assigned_app[1][0], "' selected>", $assigned_app[1][1], "</option>";
               } else {
                  for ($y = 0; $y < ($lll); $y++) {
                     echo "<option value='", $list_of_app_isms_[$y][0], "'>", $list_of_app_isms_[$y][1], "</option>";
                  }
               }

               echo "</select></div>
            ";

               echo "<div id=\"div-mqa\" style=\"display: none;\">";
               if (!$assigned) {
                  echo "<p>People Suggestions : <span>";
                  $ll =count($list_of_app_mqa) > 6? 6 : count($list_of_app_mqa);
                  for ($oo = 0; $oo < $ll; $oo++) {
                     echo "" . $list_of_app_mqa[$oo][1] . ", ";
                  }
                  $lll =count($list_of_app_mqa_) > 6? 6 : count($list_of_app_mqa_);
                  for ($oo = 0; $oo < $lll; $oo++) {
                     echo "" . $list_of_app_mqa_[$oo][1] . ", ";
                  }
                  echo "</span></p>";
                  echo "<table><tr><td>Nama (APP Internal)</td><td>Bilangan Program Yang Diagih</td></tr>";
                  for ($oo = 0; $oo < $ll; $oo++) {
                     echo "<tr><td>" . $list_of_app_mqa[$oo][1] . "</td><td>" . $list_of_app_mqa[$oo][2] . "</td></tr>";
                  }
                  echo"</table>";

                  echo "<table><tr><td>Nama (APP External)</td><td>Bilangan Program Yang Diagih</td></tr>";
                  for ($oo = 0; $oo < $lll; $oo++) {
                     echo "<tr><td>" . $list_of_app_mqa_[$oo][1] . "</td><td>" . $list_of_app_mqa_[$oo][2] . "</td></tr>";
                  }
                  echo"</table>";
               }

               echo "<p><label for=\"pengerusi\">Pengerusi:</label></p>

            <select name=\"pengerusi4\" id=\"pengerusi4\" onchange=\"update_pengerusi_4()\">
            ";
               if ($assigned) {
                  echo "<option value='", $assigned_app[0][0], "' selected>", $assigned_app[0][1], "</option>";
               } else {
                  for ($y = 0; $y < ($ll); $y++) {
                     echo "<option value='", $list_of_app_mqa[$y][0], "'>", $list_of_app_mqa[$y][1], "</option>";
                  }
               }

               echo "</select>

            <p><label for=\"panel_14\">Ahli Panel 1:</label></p>

            <select name=\"panel_14\" id=\"panel_14\" onchange=\"update_panel_4()\">
            ";
               if ($assigned) {
                  echo "<option value='" . $assigned_app[1][0] . "' selected>" . $assigned_app[1][1] . "</option>";
               } else {
                  for ($y = 0; $y < ($lll); $y++) {
                     echo "<option value='" . $list_of_app_mqa_[$y][0] . "'>" . $list_of_app_mqa_[$y][1] . "</option>";
                  }
               }

               echo "</select></div>
            ";


               echo "

         </div>";
            }
            if (!$assigned) {
               echo "<input type=\"submit\" class=\"btn\" name=\"submit\" value=\"Daftar\" required>";

            }
            ?>

            <input type="text" name="pengerusi" id="pengerusi" hidden>
            <input type="text" name="panel_1" id="panel_1" hidden>
         </form>

      </div>

   </section>

   <script>
      <?php

      for ($pp = 1; $pp <= 4; $pp++) {

         echo '
   function update_pengerusi_' . $pp . '(){
      document.getElementById("pengerusi").value = document.getElementById("pengerusi' . $pp . '").value;
   }
   function update_panel_' . $pp . '(){
      document.getElementById("panel_1").value = document.getElementById("panel_1' . $pp . '").value;
      console.log(document.getElementById("panel_1").value);
   }
   ';
      }
      ?>
      function update_app() {
         var kat = document.getElementById("kat").value;
         if (kat == "ISO") {
            document.getElementById("div-iso").style.display = "block";
            document.getElementById("div-eksa").style.display = "none";
            document.getElementById("div-isms").style.display = "none";
            document.getElementById("div-mqa").style.display = "none";
         }

         if (kat == "EKSA") {
            document.getElementById("div-eksa").style.display = "block";
            document.getElementById("div-iso").style.display = "none";
            document.getElementById("div-isms").style.display = "none";
            document.getElementById("div-mqa").style.display = "none";
         }

         if (kat == "ISMS") {
            document.getElementById("div-isms").style.display = "block";
            document.getElementById("div-iso").style.display = "none";
            document.getElementById("div-eksa").style.display = "none";
            document.getElementById("div-mqa").style.display = "none";
         }

         if (kat == "MQA") {
            document.getElementById("div-mqa").style.display = "block";
            document.getElementById("div-iso").style.display = "none";
            document.getElementById("div-isms").style.display = "none";
            document.getElementById("div-eksa").style.display = "none";
         }
      }
   </script>
   <footer>
      <ul class="footer-icons">
         <li><a href="#"><ion-icon name="call-outline"></ion-icon></a></li>
         <li><a href="#"><ion-icon name="mail-outline"></ion-icon></a></li>
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