<?php
$pid = $_GET['pid'];
$appid = $_GET['id'];

$result = array();
$nama = $emel = $password = $nokp = $fakulti = $alamat = $notelefon = $bidang = $urlAvatar = "";

include("../php/db.php");
// session_start();
include('../components/kualitiukm_protected_route.php');

if ($stmt = $con->prepare("UPDATE `laporan` SET `SENTTOUSERFAKULTI` = 'F' WHERE `APPPROGRAM_ID` = '$appid'")) {

   $stmt->execute();


   //    mysqli_stmt_bind_result($stmt, $application_id, $tarikh, $masa, $status, $lecturer_id);

} else {
   // Something is wrong with the SQL statement, so you must check to make sure your accounts table exists with all 3 fields.
   echo 'Could not prepare statement!';
}

$con->close();
$stmt->close();


header("location: ../pages/senaraimaklumbalas.php");

?>