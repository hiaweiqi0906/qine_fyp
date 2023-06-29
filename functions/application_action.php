<?php
$appid = $_GET['id'];
$action = $_GET['action'];
$lecturerid = $_GET['lecturer_id'];
date_default_timezone_set("Asia/Kuala_Lumpur");
$today_date = date("Y-m-d");
$current_time = date("H-i-s");

$result = array();
$nama = $emel = $password = $nokp = $fakulti = $alamat = $notelefon = $bidang = $urlAvatar = "";

include("../php/db.php");
// session_start();
include('../components/kualitiukm_protected_route.php');

if ($stmt = $con->prepare("UPDATE `appapplication` SET `STATUS` = '$action' WHERE `APPLICATION_ID` = '$appid'")) {

   $stmt->execute();


   //    mysqli_stmt_bind_result($stmt, $application_id, $tarikh, $masa, $status, $lecturer_id);

} else {
   // Something is wrong with the SQL statement, so you must check to make sure your accounts table exists with all 3 fields.
   echo 'Could not prepare statement!';
}



if ($stmt = $con->prepare("SELECT `KATEGORI` FROM appapplication WHERE `LECTURER_ID` = '$lecturerid'")) {
   // Bind parameters (s = string, i = int, b = blob, etc), hash the password using the PHP password_hash function.
   // $stmt->bind_param('s', $_POST['username']);
   // $stmt->execute();
   mysqli_stmt_execute($stmt);
   // $stmt -> store_result();
   // echo $stmt->num_rows;
   mysqli_stmt_bind_result($stmt, $col1);
   while (mysqli_stmt_fetch($stmt)) {
      $kategori = $col1;
   }
   // Store the result so we can check if the account exists in the database.



} else {
   // Something is wrong with the SQL statement, so you must check to make sure your accounts table exists with all 3 fields.
   echo 'Could not prepare statement!2';
}
// $kategori = $_GET['kategori'];

if ($action == 'ACCEPT') {
   if ($stmt = $con->prepare("SELECT `NAMA`, `EMEL`, `PASSWORD`, `NO_KP`, `FAKULTI`, `ALAMAT`, `NO_TELEFON`, `BIDANG`, `URL_AVATAR` FROM lecturer WHERE `LECTURER_ID` = '$lecturerid'")) {
      // Bind parameters (s = string, i = int, b = blob, etc), hash the password using the PHP password_hash function.
      // $stmt->bind_param('s', $_POST['username']);
      // $stmt->execute();
      mysqli_stmt_execute($stmt);
      // $stmt -> store_result();
      // echo $stmt->num_rows;
      mysqli_stmt_bind_result($stmt, $col1, $col2, $col3, $col4, $col5, $col6, $col7, $col8, $col9);
      while (mysqli_stmt_fetch($stmt)) {
         $nama = $col1;
         $emel = $col2;
         $password = $col3;
         $nokp = $col4;
         $fakulti = $col5;
         $alamat = $col6;
         $notelefon = $col7;
         $bidang = $col8;
         $urlAvatar = $col9;
      }
      // Store the result so we can check if the account exists in the database.

      if (
         $stmt = $con->prepare("INSERT INTO `lecturer_noti`(`LECTURER_ID`, `TEXT`, `TARIKH`, `MASA`) VALUES ('$lecturerid', 'PERMOHONAN ANDA UNTUK MENJADI APP SUDAH DITERIMA! SILA LOG MASUK SEBAGAI APP DGN KATA LALUAN YANG SAMA. ', '$today_date','$current_time')")
      ) {
         $stmt->execute();
      } else {
         // Something is wrong with the SQL statement, so you must check to make sure your accounts table exists with all 3 fields.
         echo 'Could not prepare statement!';
      }

   } else {
      // Something is wrong with the SQL statement, so you must check to make sure your accounts table exists with all 3 fields.
      echo 'Could not prepare statement!2';
   }

   if (
      $stmt1 = $con->prepare("INSERT INTO `app` (`NAMA`, `KATEGORI`, `PASSWORD`, `EMEL`, `NO_KP`, `FAKULTI`, `ALAMAT`, `NO_TELEFON`, `BIDANG`, `URL_AVATAR`, `APPLICATION_ID`, `VERIFY_TOKEN`) VALUES
          ('$nama', '$kategori', '$password', '$emel', '$nokp', '$fakulti', '$alamat', '$notelefon', '$bidang', '$urlAvatar', '$appid', ' ')")
   ) {

      $stmt1->execute();
   } else {
      echo 'Could not prepare statement!1';
      echo 'details', $nama, $emel, $password, $nokp, $fakulti, $alamat, $notelefon, $bidang, $urlAvatar;
   }

   if (
      $stmt = $con->prepare("UPDATE `appapplication`SET KATEGORI = '$kategori' WHERE `LECTURER_ID` = '$lecturerid'")
    ) {
      $stmt->execute();
    } else {
      // Something is wrong with the SQL statement, so you must check to make sure your accounts table exists with all 3 fields.
      echo 'Could not prepare statement!';
    }

   if (
      $stmt = $con->prepare("INSERT INTO `lecturer_noti`(`LECTURER_ID`, `TEXT`, `TARIKH`, `MASA`) VALUES ('$lecturerid', 'PERMOHONAN ANDA UNTUK MENJADI APP SUDAH DITERIMA! SILA LOG MASUK SEBAGAI APP DGN KATA LALUAN YANG SAMA. ', '$today_date','$current_time')")
   ) {
      $stmt->execute();
   } else {
      // Something is wrong with the SQL statement, so you must check to make sure your accounts table exists with all 3 fields.
      echo 'Could not prepare statement!';
   }
} else {
   if (
      $stmt = $con->prepare("UPDATE `appapplication`SET COUNT_KALI = COUNT_KALI + 1 WHERE `LECTURER_ID` = '$lecturerid'")
    ) {
      $stmt->execute();
    } else {
      // Something is wrong with the SQL statement, so you must check to make sure your accounts table exists with all 3 fields.
      echo 'Could not prepare statement!';
    }

   if (
      $stmt = $con->prepare("INSERT INTO `lecturer_noti`(`LECTURER_ID`, `TEXT`, `TARIKH`, `MASA`) VALUES ('$lecturerid', 'PERMOHONAN ANDA UNTUK MENJADI APP SUDAH DITOLAK. ', '$today_date','$current_time')")
   ) {
      $stmt->execute();
   } else {
      // Something is wrong with the SQL statement, so you must check to make sure your accounts table exists with all 3 fields.
      echo 'Could not prepare statement!';
   }
}


$con->close();
$stmt->close();


header("location: ../pages/senaraipermohonan.php");

?>