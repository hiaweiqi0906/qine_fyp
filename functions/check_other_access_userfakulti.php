<?php
// session_start();
include("../php/db.php");
$app_program_id = $_GET["id"];
$program_id = $_GET["pid"];
// $typel = $_GET["type"];
$selfId = $_SESSION["id"];
$report = array();
if ($stmt = $con->prepare("SELECT `APPPROGRAM_ID` FROM `appprogram` t1 LEFT JOIN program t2 ON t1.PROGRAM_ID = t2.PROGRAM_ID WHERE t1.`APPPROGRAM_ID` = '$app_program_id' AND t1.`PROGRAM_ID` = '$program_id' AND t2.UPLOADEDBY = '$selfId'")) {

   $stmt->execute();
   mysqli_stmt_bind_result($stmt, $app_program_id);

   while (mysqli_stmt_fetch($stmt)) {
      // echo"he";
      array_push($report, $app_program_id);
   }
} else {
   // Something is wrong with the SQL statement, so you must check to make sure your accounts table exists with all 3 fields.
   echo 'Could not prepare statement!';
}


if(isset($report)){
   if(count($report) == 0)
      header("Location: ../pages/penilaianprogram.php");
}
?>