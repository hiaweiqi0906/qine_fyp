<?php
// session_start();
include("../php/db.php");
$app_program_id = $_GET["id"];
$typel = $_GET["type"];
$selfId = $_SESSION["id"];
$report = array();
if($typel == 0){
   if ($stmt = $con->prepare("SELECT `APPPROGRAM_ID` FROM `appprogram` t1 WHERE `APPPROGRAM_ID` = '$app_program_id' AND `APP_ID_PENGERUSI` = '$selfId'")) {

      $stmt->execute();
      mysqli_stmt_bind_result($stmt, $app_program_id);

      while (mysqli_stmt_fetch($stmt)) {
         // echo"he";
         array_push($report, $app_program_id);
      }
   } else {
      echo 'Could not prepare statement!';
   }
}else if($typel == 1){
   if ($stmt = $con->prepare("SELECT `APPPROGRAM_ID` FROM `appprogram` t1 WHERE `APPPROGRAM_ID` = '$app_program_id' AND `APP_ID_PANEL_1` = '$selfId'")) {
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
}else{
   header("Location: index.php");
}

if(isset($report)){
   if(count($report) == 0)
      header("Location: ../pages/penilaianprogram.php");
}
?>