<?php

include("../php/db.php");
// session_start();
// include('../components/app_protected_route.php');

$app_program_id = $_GET["id"];
$typel = $_GET["type"];
$pid = $_GET["pid"];
// $str_url = '../functions/check_access.php?id=' . $app_program_id . '&type=' . $typel . '&pid=' . $pid;
// include('../functions/check_access.php');
include('../functions/search_all_laporan.php');

$all_empty = true;

for ($yyy = 0; $yyy < 3; $yyy++) {
  if (count($laporan_all_people[$yyy]) != 0) {
    $all_empty = false;
    break;
  }
}

$programinfo = array();
$pengerusi = $panel1 = "";
if ($stmt = $con->prepare("SELECT `PROGRAM_ID`, `TARIKH`, `URL_FILE_DRIVE`, `NAMA`, `URL_DRIVE`, `BIDANG`, `STATUS`, `DESCRIPTION` FROM `program` WHERE `PROGRAM_ID` = '$pid'")) {

  $stmt->execute();
  mysqli_stmt_bind_result($stmt, $program_id, $tarikh, $masa, $nama, $url_drive, $bidang, $status, $description);

  // }   /* fetch values */
  while (mysqli_stmt_fetch($stmt)) {
    $programinfo = array($program_id, $tarikh, $masa, $nama, $url_drive, $bidang, $status, $description);
  }
  // echo $stmt->field_count;
} else {
  // Something is wrong with the SQL statement, so you must check to make sure your accounts table exists with all 3 fields.
  echo 'Could not prepare statement!';
}

if ($stmt = $con->prepare("SELECT `APP_ID_PENGERUSI`, `APP_ID_PANEL_1` FROM `appprogram` WHERE `APPPROGRAM_ID` = '$app_program_id'")) {

  $stmt->execute();
  mysqli_stmt_bind_result($stmt, $p0, $p1);

  // }   /* fetch values */
  while (mysqli_stmt_fetch($stmt)) {
    $pengerusi = $p0;
    $panel1 = $p1;
  }
  // echo $stmt->field_count;
} else {
  // Something is wrong with the SQL statement, so you must check to make sure your accounts table exists with all 3 fields.
  echo 'Could not prepare statement!';
}

if ($stmt = $con->prepare("SELECT `NAMA` FROM `app` WHERE `APP_ID` = '$p0'")) {

  $stmt->execute();
  mysqli_stmt_bind_result($stmt, $p0);

  // }   /* fetch values */
  while (mysqli_stmt_fetch($stmt)) {
    $pengerusi = $p0;
  }
  // echo $stmt->field_count;
} else {
  // Something is wrong with the SQL statement, so you must check to make sure your accounts table exists with all 3 fields.
  echo 'Could not prepare statement!';
}

if ($stmt = $con->prepare("SELECT `NAMA` FROM `app` WHERE `APP_ID` = '$p1'")) {

  $stmt->execute();
  mysqli_stmt_bind_result($stmt, $p1);

  // }   /* fetch values */
  while (mysqli_stmt_fetch($stmt)) {
    $panel1 = $p1;
  }
  // echo $stmt->field_count;
} else {
  // Something is wrong with the SQL statement, so you must check to make sure your accounts table exists with all 3 fields.
  echo 'Could not prepare statement!';
}
$lampiran_1 = $laporan_all_people[$typel][5];
$akredasi_penuh = $laporan_all_people[$typel][6];
$bahagian_lain = $laporan_all_people[$typel][9];


$lampiran_1_arr = explode("<", $lampiran_1);
$akredasi_penuh_arr = explode("|", $akredasi_penuh);
$bahagian_lain_arr = explode(";", $bahagian_lain);

$lampiran_1_bidang = array();
$akredasi_penuh_bidang = array();
for ($jj = 0; $jj < 7; $jj++) {
  array_push($lampiran_1_bidang, explode("~", $lampiran_1_arr[$jj]));
  array_push($akredasi_penuh_bidang, explode(";", $akredasi_penuh_arr[$jj]));
}

if (isset($_POST['submit'])) {
  $lampiran_1 = "";
  $l1_1_ulasan = $_POST['1_1_ulasan'];
  $l1_2_pujian = $_POST['1_2_pujian'];
  $l1_3_penegasan = $_POST['1_3_penegasan'];
  $l1_4_syor = $_POST['1_4_syor'];
  $lampiran_1 = $l1_1_ulasan . "~" . $l1_2_pujian . "~" . $l1_3_penegasan . "~" . $l1_4_syor . "<";

  $l2_1_ulasan = $_POST['2_1_ulasan'];
  $l2_2_pujian = $_POST['2_2_pujian'];
  $l2_3_penegasan = $_POST['2_3_penegasan'];
  $l2_4_syor = $_POST['2_4_syor'];
  $lampiran_1 = $lampiran_1 . $l2_1_ulasan . "~" . $l2_2_pujian . "~" . $l2_3_penegasan . "~" . $l2_4_syor . "<";

  $l3_1_ulasan = $_POST['3_1_ulasan'];
  $l3_2_pujian = $_POST['3_2_pujian'];
  $l3_3_penegasan = $_POST['3_3_penegasan'];
  $l3_4_syor = $_POST['3_4_syor'];
  $lampiran_1 = $lampiran_1 . $l3_1_ulasan . "~" . $l3_2_pujian . "~" . $l3_3_penegasan . "~" . $l3_4_syor . "<";

  $l4_1_ulasan = $_POST['4_1_ulasan'];
  $l4_2_pujian = $_POST['4_2_pujian'];
  $l4_3_penegasan = $_POST['4_3_penegasan'];
  $l4_4_syor = $_POST['4_4_syor'];
  $lampiran_1 = $lampiran_1 . $l4_1_ulasan . "~" . $l4_2_pujian . "~" . $l4_3_penegasan . "~" . $l4_4_syor . "<";

  $l5_1_ulasan = $_POST['5_1_ulasan'];
  $l5_2_pujian = $_POST['5_2_pujian'];
  $l5_3_penegasan = $_POST['5_3_penegasan'];
  $l5_4_syor = $_POST['5_4_syor'];
  $lampiran_1 = $lampiran_1 . $l5_1_ulasan . "~" . $l5_2_pujian . "~" . $l5_3_penegasan . "~" . $l5_4_syor . "<";

  $l6_1_ulasan = $_POST['6_1_ulasan'];
  $l6_2_pujian = $_POST['6_2_pujian'];
  $l6_3_penegasan = $_POST['6_3_penegasan'];
  $l6_4_syor = $_POST['6_4_syor'];
  $lampiran_1 = $lampiran_1 . $l6_1_ulasan . "~" . $l6_2_pujian . "~" . $l6_3_penegasan . "~" . $l6_4_syor . "<";

  $l7_1_ulasan = $_POST['7_1_ulasan'];
  $l7_2_pujian = $_POST['7_2_pujian'];
  $l7_3_penegasan = $_POST['7_3_penegasan'];
  $l7_4_syor = $_POST['7_4_syor'];
  $lampiran_1 = $lampiran_1 . $l7_1_ulasan . "~" . $l7_2_pujian . "~" . $l7_3_penegasan . "~" . $l7_4_syor;


  $score_1 = $_POST["score_1"];
  $score_1_1 = $_POST["score_1_1"];
  $score_1_1_1 = $_POST["score_1_1_1"];
  $score_1_1_2 = $_POST["score_1_1_2"];
  $score_1_1_3 = $_POST["score_1_1_3"];
  $score_1_1_4 = $_POST['score_1_1_4'];
  $score_1_1_5 = $_POST['score_1_1_5'];
  $score_1_2 = $_POST['score_1_2'];
  $score_1_2_1 = $_POST['score_1_2_1'];
  $score_1_2_2 = $_POST['score_1_2_2'];
  $score_1_2_3 = $_POST['score_1_2_3'];
  $score_1_2_4 = $_POST['score_1_2_4'];
  $score_1_2_5 = $_POST['score_1_2_5'];
  $score_1_2_6 = $_POST['score_1_2_6'];
  $score_1_3 = $_POST['score_1_3'];
  $score_1_3_1 = $_POST['score_1_3_1'];
  $score_1_3_2 = $_POST['score_1_3_2'];
  $score_1_3_3 = $_POST['score_1_3_3'];
  $score_1_3_4 = $_POST['score_1_3_4'];
  $score_1_3_5 = $_POST['score_1_3_5'];
  $score_1_3_6 = $_POST['score_1_3_6'];

  $score_2 = $_POST['score_2'];
  $score_2_1 = $_POST['score_2_1'];
  $score_2_1_1 = $_POST['score_2_1_1'];
  $score_2_1_2 = $_POST['score_2_1_2'];
  $score_2_2 = $_POST['score_2_2'];
  $score_2_2_1 = $_POST['score_2_2_1'];
  $score_2_2_2 = $_POST['score_2_2_2'];
  $score_2_2_3 = $_POST['score_2_2_3'];
  $score_2_2_4 = $_POST['score_2_2_4'];
  $score_2_3 = $_POST['score_2_3'];
  $score_2_3_1 = $_POST['score_2_3_1'];
  $score_2_3_2 = $_POST['score_2_3_2'];
  $score_2_3_3 = $_POST['score_2_3_3'];
  $score_2_3_4 = $_POST['score_2_3_4'];
  $score_2_3_5 = $_POST['score_2_3_5'];

  $score_3 = $_POST['score_3'];
  $score_3_1 = $_POST['score_3_1'];
  $score_3_1_1 = $_POST['score_3_1_1'];
  $score_3_1_2 = $_POST['score_3_1_2'];
  $score_3_1_3 = $_POST['score_3_1_3'];
  $score_3_1_4 = $_POST['score_3_1_4'];
  $score_3_1_5 = $_POST['score_3_1_5'];
  $score_3_2 = $_POST['score_3_2'];
  $score_3_2_1 = $_POST['score_3_2_1'];
  $score_3_2_2 = $_POST['score_3_2_2'];
  $score_3_3 = $_POST['score_3_3'];
  $score_3_3_1 = $_POST['score_3_3_1'];
  $score_3_3_2 = $_POST['score_3_3_2'];
  $score_3_3_3 = $_POST['score_3_3_3'];
  $score_3_3_4 = $_POST['score_3_3_4'];
  $score_3_3_5 = $_POST['score_3_3_5'];
  $score_3_3_6 = $_POST['score_3_3_6'];
  $score_3_3_7 = $_POST['score_3_3_7'];
  $score_3_3_8 = $_POST['score_3_3_8'];
  $score_3_4 = $_POST['score_3_4'];
  $score_3_4_1 = $_POST['score_3_4_1'];
  $score_3_4_2 = $_POST['score_3_4_2'];
  $score_3_4_3 = $_POST['score_3_4_3'];
  $score_3_4_4 = $_POST['score_3_4_4'];
  $score_3_5 = $_POST['score_3_5'];
  $score_3_5_1 = $_POST['score_3_5_1'];

  $score_4 = $_POST['score_4'];
  $score_4_1 = $_POST['score_4_1'];
  $score_4_1_1 = $_POST['score_4_1_1'];
  $score_4_1_2 = $_POST['score_4_1_2'];
  $score_4_1_3 = $_POST['score_4_1_3'];
  $score_4_1_4 = $_POST['score_4_1_4'];
  $score_4_1_5 = $_POST['score_4_1_5'];
  $score_4_1_6 = $_POST['score_4_1_6'];
  $score_4_1_7 = $_POST['score_4_1_7'];
  $score_4_1_8 = $_POST['score_4_1_8'];
  $score_4_2 = $_POST['score_4_2'];
  $score_4_2_1 = $_POST['score_4_2_1'];
  $score_4_2_2 = $_POST['score_4_2_2'];
  $score_4_2_3 = $_POST['score_4_2_3'];
  $score_4_2_4 = $_POST['score_4_2_4'];
  $score_4_2_5 = $_POST['score_4_2_5'];
  $score_4_2_6 = $_POST['score_4_2_6'];
  $score_4_2_7 = $_POST['score_4_2_7'];

  $score_5 = $_POST['score_5'];
  $score_5_1 = $_POST['score_5_1'];
  $score_5_1_1 = $_POST['score_5_1_1'];
  $score_5_1_2 = $_POST['score_5_1_2'];
  $score_5_1_3 = $_POST['score_5_1_3'];
  $score_5_1_4 = $_POST['score_5_1_4'];
  $score_5_2 = $_POST['score_5_2'];
  $score_5_2_1 = $_POST['score_5_2_1'];
  $score_5_2_2 = $_POST['score_5_2_2'];
  $score_5_2_3 = $_POST['score_5_2_3'];
  $score_5_3 = $_POST['score_5_3'];
  $score_5_3_1 = $_POST['score_5_3_1'];
  $score_5_3_2 = $_POST['score_5_3_2'];
  $score_5_3_3 = $_POST['score_5_3_3'];

  $score_6 = $_POST['score_6'];
  $score_6_1 = $_POST['score_6_1'];
  $score_6_1_1 = $_POST['score_6_1_1'];
  $score_6_1_2 = $_POST['score_6_1_2'];
  $score_6_1_3 = $_POST['score_6_1_3'];
  $score_6_1_4 = $_POST['score_6_1_4'];
  $score_6_1_5 = $_POST['score_6_1_5'];
  $score_6_1_6 = $_POST['score_6_1_6'];
  $score_6_2 = $_POST['score_6_2'];
  $score_6_2_1 = $_POST['score_6_2_1'];
  $score_6_2_2 = $_POST['score_6_2_2'];
  $score_6_2_3 = $_POST['score_6_2_3'];
  $score_6_3 = $_POST['score_6_3'];
  $score_6_3_1 = $_POST['score_6_3_1'];
  $score_6_3_2 = $_POST['score_6_3_2'];
  $score_6_3_3 = $_POST['score_6_3_3'];
  $score_6_4 = $_POST['score_6_4'];
  $score_6_4_1 = $_POST['score_6_4_1'];
  $score_6_4_2 = $_POST['score_6_4_2'];
  $score_6_4_3 = $_POST['score_6_4_3'];
  $score_6_4_4 = $_POST['score_6_4_4'];

  $score_7 = $_POST['score_7'];
  $score_7_1 = $_POST['score_7_1'];
  $score_7_1_1 = $_POST['score_7_1_1'];
  $score_7_1_2 = $_POST['score_7_1_2'];
  $score_7_1_3 = $_POST['score_7_1_3'];
  $score_7_1_4 = $_POST['score_7_1_4'];
  $score_7_1_5 = $_POST['score_7_1_5'];
  $score_7_1_6 = $_POST['score_7_1_6'];
  $score_7_1_7 = $_POST['score_7_1_7'];
  $score_7_1_8 = $_POST['score_7_1_8'];
  $score_7_1_9 = $_POST['score_7_1_9'];
  $akredasi_penuh = $score_1 . ";" . $score_1_1 . ";" . $score_1_1_1 . ";" . $score_1_1_2 . ";" .
    $score_1_1_3 . ";" . $score_1_1_4 . ";" . $score_1_1_5 . ";" .
    $score_1_2 . ";" . $score_1_2_1 . ";" . $score_1_2_2 . ";" .
    $score_1_2_3 . ";" . $score_1_2_4 . ";" . $score_1_2_5 . ";" .
    $score_1_2_6 . ";" . $score_1_3 . ";" . $score_1_3_1 . ";" .
    $score_1_3_2 . ";" . $score_1_3_3 . ";" . $score_1_3_4 . ";" .
    $score_1_3_5 . ";" . $score_1_3_6;
  $akredasi_penuh = $akredasi_penuh . "|";
  $akredasi_penuh = $akredasi_penuh . $score_2 . ";" . $score_2_1 . ";" . $score_2_1_1 . ";" .
    $score_2_1_2 . ";" . $score_2_2 . ";" . $score_2_2_1 . ";" .
    $score_2_2_2 . ";" . $score_2_2_3 . ";" . $score_2_2_4 . ";" .
    $score_2_3 . ";" . $score_2_3_1 . ";" . $score_2_3_2 . ";" .
    $score_2_3_3 . ";" . $score_2_3_4 . ";" . $score_2_3_5;
  $akredasi_penuh = $akredasi_penuh . "|";

  $akredasi_penuh = $akredasi_penuh . $score_3 . ";" . $score_3_1 . ";" . $score_3_1_1 . ";" .
    $score_3_1_2 . ";" . $score_3_1_3 . ";" . $score_3_1_4 . ";" .
    $score_3_1_5 . ";" . $score_3_2 . ";" . $score_3_2_1 . ";" .
    $score_3_2_2 . ";" . $score_3_3 . ";" . $score_3_3_1 . ";" .
    $score_3_3_2 . ";" . $score_3_3_3 . ";" . $score_3_3_4 . ";" .
    $score_3_3_5 . ";" . $score_3_3_6 . ";" . $score_3_3_7 . ";" .
    $score_3_3_8 . ";" . $score_3_4 . ";" . $score_3_4_1 . ";" .
    $score_3_4_2 . ";" . $score_3_4_3 . ";" . $score_3_4_4 . ";" .
    $score_3_5 . ";" . $score_3_5_1;
  $akredasi_penuh = $akredasi_penuh . "|";
  $akredasi_penuh = $akredasi_penuh . $score_4 . ";" . $score_4_1 . ";" . $score_4_1_1 . ";" .
    $score_4_1_2 . ";" . $score_4_1_3 . ";" . $score_4_1_4 . ";" .
    $score_4_1_5 . ";" . $score_4_1_6 . ";" . $score_4_1_7 . ";" .
    $score_4_1_8 . ";" . $score_4_2 . ";" . $score_4_2_1 . ";" .
    $score_4_2_2 . ";" . $score_4_2_3 . ";" . $score_4_2_4 . ";" .
    $score_4_2_5 . ";" . $score_4_2_6 . ";" . $score_4_2_7;

  $akredasi_penuh = $akredasi_penuh . "|";
  $akredasi_penuh = $akredasi_penuh . $score_5 . ";" . $score_5_1 . ";" . $score_5_1_1 . ";" .
    $score_5_1_2 . ";" . $score_5_1_3 . ";" . $score_5_1_4 . ";" .
    $score_5_2 . ";" . $score_5_2_1 . ";" . $score_5_2_2 . ";" .
    $score_5_2_3 . ";" . $score_5_3 . ";" . $score_5_3_1 . ";" .
    $score_5_3_2 . ";" . $score_5_3_3;

  $akredasi_penuh = $akredasi_penuh . "|";
  $akredasi_penuh = $akredasi_penuh . $score_6 . ";" . $score_6_1 . ";" . $score_6_1_1 . ";" .
    $score_6_1_2 . ";" . $score_6_1_3 . ";" . $score_6_1_4 . ";" .
    $score_6_1_5 . ";" . $score_6_1_6 . ";" . $score_6_2 . ";" .
    $score_6_2_1 . ";" . $score_6_2_2 . ";" . $score_6_2_3 . ";" .
    $score_6_3 . ";" . $score_6_3_1 . ";" . $score_6_3_2 . ";" .
    $score_6_3_3 . ";" . $score_6_4 . ";" . $score_6_4_1 . ";" .
    $score_6_4_2 . ";" . $score_6_4_3 . ";" . $score_6_4_4;

  $akredasi_penuh = $akredasi_penuh . "|";
  $akredasi_penuh = $akredasi_penuh . $score_7 . ";" . $score_7_1 . ";" . $score_7_1_1 . ";" .
    $score_7_1_2 . ";" . $score_7_1_3 . ";" . $score_7_1_4 . ";" .
    $score_7_1_5 . ";" . $score_7_1_6 . ";" . $score_7_1_7 . ";" . $score_7_1_8 . ";" .
    $score_7_1_9;

  date_default_timezone_set("Asia/Kuala_Lumpur");
  $today_date = date("Y-m-d");
  $current_time = date("H-i-s");
  $app_program_id = $_GET["id"];
  $typel = $_GET["type"];
  $effectiveDate = date('Y-m-d', strtotime("+6 months", strtotime($today_date)));

  if (
    $stmt = $con->prepare("INSERT INTO laporan (`STATUS`, `TARIKH_AWAL`, `TARIKH_AKHIR`, `APPPROGRAM_ID`, `LAMPIRAN_1`, `AKREDASI_PENUH`, `TYPE`, `TARIKH_EFEKTIF`) VALUES
   ('SUDAH HANTAR', '$today_date', '', '$app_program_id', '$lampiran_1', '$akredasi_penuh', '$typel', '$effectiveDate')")
  ) {
    $stmt->execute();
  } else {
    echo 'Could not prepare statement!';
  }

  if (
    $stmt = $con->prepare("UPDATE appprogram SET TARIKH_MASA_KEMASKINI = '$today_date' WHERE APPPROGRAM_ID = '$app_program_id' LIMIT 1")
  ) {
    $stmt->execute();
  } else {
    echo 'Could not prepare statement!';
  }

  $necc_info = array();

  if (
    $stmt = $con->prepare("SELECT APP_ID_PENGERUSI, APP_ID_PANEL_1, KUALITIUKM_ID from appprogram WHERE APPPROGRAM_ID = '$app_program_id'")
  ) {
    $stmt->execute();
    mysqli_stmt_bind_result($stmt, $app_id_pengerusi, $app_id_panel_1, $kualitiukm_id);
    while (mysqli_stmt_fetch($stmt)) {
      array_push($necc_info, array($app_id_pengerusi, $app_id_panel_1, $kualitiukm_id));
    }
  } else {
    echo 'Could not prepare statement!';
  }

  $pengerusi_id = $necc_info[0][0];
  $kualitiukm_id = $necc_info[0][3];
  $panel1_id = $necc_info[0][1];

  if ($typel == 0) {
    if (
      $stmt = $con->prepare("SELECT * from laporan WHERE APPPROGRAM_ID = '$app_program_id'")
    ) {
      $stmt->execute();
      $stmt->store_result();
      // Store the result so we can check if the account exists in the database.
      if ($stmt->num_rows == 2) {
        if (
          $stmt = $con->prepare("UPDATE laporan SET TARIKH_AKHIR = '$today_date' WHERE APPPROGRAM_ID = '$app_program_id'")
        ) {
          $stmt->execute();
        } else {
          echo 'Could not prepare statement!';
        }
      }
    } else {
      echo 'Could not prepare statement!';
    }

    if (
      $stmt = $con->prepare("INSERT INTO `app_noti` (`APP_ID`, `TEXT`, `TARIKH`, `MASA`) VALUES ('$panel1_id', 'PENGERUSI SUDAH HANTAR LAPORAN. ', '$today_date','$current_time')")
    ) {
      $stmt->execute();
    } else {
      // Something is wrong with the SQL statement, so you must check to make sure your accounts table exists with all 3 fields.
      echo 'Could not prepare statement!';
    }

    if (
      $stmt = $con->prepare("INSERT INTO `kualitiukm_noti`(`KUALITIUKM_ID`, `TEXT`, `TARIKH`, `MASA`) VALUES ('$kualitiukm_id', 'PENGERUSI SUDAH HANTAR LAPORAN. ', '$today_date','$current_time')")
    ) {
      $stmt->execute();
    } else {
      // Something is wrong with the SQL statement, so you must check to make sure your accounts table exists with all 3 fields.
      echo 'Could not prepare statement!';
    }
  } else {


    if (
      $stmt = $con->prepare("INSERT INTO `app_noti`(`APP_ID`, `TEXT`, `TARIKH`, `MASA`) VALUES ('$pengerusi_id', 'AHLI PANEL SUDAH BUAT LAPORAN. ', '$today_date','$current_time')")
    ) {
      $stmt->execute();
    } else {
      // Something is wrong with the SQL statement, so you must check to make sure your accounts table exists with all 3 fields.
      echo 'Could not prepare statement!';
    }

    if (
      $stmt = $con->prepare("INSERT INTO `kualitiukm_noti`(`KUALITIUKM_ID`, `TEXT`, `TARIKH`, `MASA`) VALUES ('$kualitiukm_id', 'AHLI PANEL SUDAH BUAT LAPORAN. ', '$today_date','$current_time')")
    ) {
      $stmt->execute();
    } else {
      // Something is wrong with the SQL statement, so you must check to make sure your accounts table exists with all 3 fields.
      echo 'Could not prepare statement!';
    }
  }


  header("Location: penilaianprogram.php");

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Maklumat Program</title>

  <!-- font awesome cdn link  -->
  <link rel="stylesheet" media="all" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
  <!-- <link rel="stylesheet" media="all" href="../style/stylearea.css"> -->

  <!-- custom css file link  -->
  <!-- <link rel="stylesheet" media="all" href="../style/stylepertanyaan.css"> -->
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
  <script src="https://cdn.anychart.com/releases/8.11.0/js/anychart-core.min.js"></script>
  <script src="https://cdn.anychart.com/releases/8.11.0/js/anychart-radar.min.js"></script>
  <style>
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

    html {
      padding: 15px;
      overflow: visible !important;
    }

    .collapsible {
      /* display:none; */
    }

    textarea {
      border: none;
    }

    textarea:focus {
      outline: none;

    }


    .content {
      padding: 0 18px;
      display: block;
      overflow: hidden;
      background-color: #f1f1f1;
    }

    .div-center{
      text-align: center;
      margin-bottom: 30px;
    }

    .invi-at-first {
      display: block;
    }

    td{
      padding:10px;
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
  </style>

  <script>
    var coll = document.getElementsByClassName("collapsible");
    var i;

    for (i = 0; i < coll.length; i++) {

      this.classList.toggle("active");
      var content = this.nextElementSibling;
      if (content.style.display === "block") {
        content.style.display = "none";
      } else {
        content.style.display = "block";
      }
    }


  </script>

  <script>
    function drawChart() {
      document.getElementById("chart-container").innerHTML = "";
      anychart.onDocumentReady(function () {
        var score_1 = Number(document.getElementById("score_1").value);
        var score_2 = Number(document.getElementById("score_2").value);
        var score_3 = Number(document.getElementById("score_3").value);
        var score_4 = Number(document.getElementById("score_4").value);
        var score_5 = Number(document.getElementById("score_5").value);
        var score_6 = Number(document.getElementById("score_6").value);
        var score_7 = Number(document.getElementById("score_7").value);
        // create a data set
        var chartData = {
          header: ['#', 'Program'],
          rows: [
            ['Area 1', score_1],
            ['Area 2', score_2],
            ['Area 3', score_3],
            ['Area 4', score_4],
            ['Area 5', score_5],
            ['Area 6', score_6],
            ['Area 7', score_7]
          ]
        };

        // create a radar chart
        var chart = anychart.radar();

        // set the chart data
        chart.data(chartData);

        // set the chart title
        chart.title("Achivements Based on Areas of Evaluation");

        // set the container id
        chart.container('chart-container');

        // display the radar chart
        chart.draw();

      });
    }
  </script>
</head>

<body>
  <div id="main-page">







    <div class="page-2">


      <section class="courses">
        <div class="div-center">

          <img src="../img/ukm_logo.png" alt="" style="width: 25rem">
          <h3>LAPORAN PENILAIAN PROGRAM<br>
            OLEH PANEL PENILAI
          </h3>
        </div>
        <div class="promo_card">
          <table>
            <tr>
              <td>Nama Program</td>
              <td>
                <?php echo $programinfo[3]; ?>
              </td>
            </tr>
            <tr>
              <td>Bidang Program</td>
              <td>
                <?php echo $programinfo[5]; ?>
              </td>
            </tr>
            <tr>
              <td>Tarikh Program</td>
              <td>
                <?php echo $programinfo[1]; ?>
              </td>
            </tr>
            <tr>
              <td>Nama Panel Penilai</td>
              <td>
                <?php echo $p0 . "<br>" . $p1; ?>
              </td>
            </tr>
            <tr>
              <td colspan="2">Nota : Laporan sulit ini adalah milik Kualiti-UKM</td>
            </tr>
          </table>


        </div>

        <h3 style="margin-top: 30px;">LAPORAN PANEL PENILAI BAGI PEMATUHAN MENGIKUT KOD AMALAN AKREDITASI PROGRAM MQA</h3>
        <h3 class="bahagian">BAHAGIAN A: PENEMUAN PANEL PENILAI MENGIKUT BIDANG</h3>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]), "?id=$app_program_id&type=$typel&pid=$pid"; ?>"
          method="post" autocomplete="off" class="sign-in-form">
          <div class="promo_card1 laporan-1">
            <table>
              <tr>
                <td>
                  <h2 class="collapsible" style="display: block;">Bidang 1: Pembangunan & Penyampaian Program</h3>
                </td>
              </tr>
              <tr>
                <td>
                  <h3><label for="1_1_ulasan">1.1 Ulasan:</label></h3>
                  <textarea id="1_1_ulasan" name="1_1_ulasan" rows="8" cols="160"><?php echo $lampiran_1_bidang[0][0]; ?></textarea>
                  <br>
                </td>
              </tr>
              <tr>
                <td>
                  <h3><label for="1_2_pujian">1.2 Pujian (Commendation):</label></h3>
                  <textarea id="1_2_pujian" name="1_2_pujian" rows="8" cols="160"><?php echo $lampiran_1_bidang[0][1]; ?></textarea>
                  <br>
                </td>
              </tr>
              <tr>
                <td>
                  <h3><label for="1_3_penegasan">1.3 Penegasan (Affirmation):</label></h3>
                  <textarea id="1_3_penegasan" name="1_3_penegasan" rows="8" cols="160"><?php echo $lampiran_1_bidang[0][2]; ?></textarea>
                  <br>
                </td>
              </tr>
              <tr>
                <td>
                  <h3><label for="1_4_syor">1.4 Syor (Recommendation):</label></h3>
                  <textarea id="1_4_syor" name="1_4_syor" rows="8" cols="160"><?php echo $lampiran_1_bidang[0][3]; ?></textarea>
                  <br>
                </td>
              </tr>
            </table>
          </div>

          <div class="promo_card1 laporan-1">
            <table>
              <tr>
                <td>
                  <h2 class="collapsible">Bidang 2: Penilaian Pembelajaran Pelajar</h3>

                </td>
              </tr>
              <tr>
                <td>
                  <div class="invi-at-first">
                    <h3><label for="2_1_ulasan">1.1 Ulasan:</label></h3>
                    <textarea id="2_1_ulasan" name="2_1_ulasan" rows="8" cols="160"><?php echo $lampiran_1_bidang[1][0]; ?></textarea>
                    <br>
                </td>
              </tr>
              <tr>
                <td>
                  <h3><label for="2_2_pujian">1.2 Pujian (Commendation):</label></h3>
                  <textarea id="2_2_pujian" name="2_2_pujian" rows="8" cols="160"><?php echo $lampiran_1_bidang[1][1]; ?></textarea>
                  <br>
                </td>
              </tr>
              <tr>
                <td>
                  <h3><label for="2_3_penegasan">1.3 Penegasan (Affirmation):</label></h3>
                  <textarea id="2_3_penegasan" name="2_3_penegasan" rows="8" cols="160"><?php echo $lampiran_1_bidang[1][2]; ?></textarea>
                  <br>
                </td>
              </tr>
              <tr>
                <td>
                  <h3><label for="2_4_syor">1.4 Syor (Recommendation):</label></h3>
                  <textarea id="2_4_syor" name="2_4_syor" rows="8" cols="160"><?php echo $lampiran_1_bidang[1][3]; ?></textarea>
                  <br>
                </td>
              </tr>
            </table>







          </div>

          <div class="promo_card1 laporan-1">
            <table>
              <tr>
                <td>
                  <h2 class="collapsible">Bidang 3: Pemilihan Pelajar dan Perkhidmatan Sokongan </h3>

                </td>
              </tr>
              <tr>
                <td>

                  <h3><label for="3_1_ulasan">1.1 Ulasan:</label></h3>
                  <textarea id="3_1_ulasan" name="3_1_ulasan" rows="8" cols="160"><?php echo $lampiran_1_bidang[2][0]; ?></textarea>
                  <br>
                </td>
              </tr>
              <tr>
                <td>
                  <h3><label for="3_2_pujian">1.2 Pujian (Commendation):</label></h3>
                  <textarea id="3_2_pujian" name="3_2_pujian" rows="8" cols="160"><?php echo $lampiran_1_bidang[2][1]; ?></textarea>
                  <br>

                </td>
              </tr>
              <tr>
                <td>
                  <h3><label for="3_3_penegasan">1.3 Penegasan (Affirmation):</label></h3>
                  <textarea id="3_3_penegasan" name="3_3_penegasan" rows="8" cols="160"><?php echo $lampiran_1_bidang[2][2]; ?></textarea>
                  <br>

                </td>
              </tr>
              <tr>
                <td>
                  <h3><label for="3_4_syor">1.4 Syor (Recommendation):</label></h3>
                  <textarea id="3_4_syor" name="3_4_syor" rows="8" cols="160"><?php echo $lampiran_1_bidang[2][3]; ?></textarea>
                  <br>

                </td>
              </tr>
            </table>

          </div>

          <div class="promo_card1 laporan-1">
            <table>
              <tr>
                <td>

                  <h2 class="collapsible">Bidang 4: Kakitangan Akademik</h3>
                </td>
              </tr>
              <tr>
                <td>
                  <h3><label for="4_1_ulasan">1.1 Ulasan:</label></h3>
                  <textarea id="4_1_ulasan" name="4_1_ulasan" rows="8" cols="160"><?php echo $lampiran_1_bidang[3][0]; ?></textarea>
                  <br>

                </td>
              </tr>
              <tr>
                <td>
                  <h3><label for="4_2_pujian">1.2 Pujian (Commendation):</label></h3>
                  <textarea id="4_2_pujian" name="4_2_pujian" rows="8" cols="160"><?php echo $lampiran_1_bidang[3][1]; ?></textarea>
                  <br>

                </td>
              </tr>
              <tr>
                <td>
                  <h3><label for="4_3_penegasan">1.3 Penegasan (Affirmation):</label></h3>
                  <textarea id="4_3_penegasan" name="4_3_penegasan" rows="8" cols="160"><?php echo $lampiran_1_bidang[3][2]; ?></textarea>
                  <br>

                </td>
              </tr>
              <tr>
                <td>
                  <h3><label for="4_4_syor">1.4 Syor (Recommendation):</label></h3>
                  <textarea id="4_4_syor" name="4_4_syor" rows="8" cols="160"><?php echo $lampiran_1_bidang[3][3]; ?></textarea>
                  <br>
                </td>
              </tr>
            </table>

          </div>

          <div class="promo_card1 laporan-1">
            <table>
              <tr>
                <td>
                  <h2 class="collapsible">Bidang 5: Sumber Pendidikan</h3>

                </td>
              </tr>
              <tr>
                <td>

                  <h3><label for="5_1_ulasan">1.1 Ulasan:</label></h3>
                  <textarea id="5_1_ulasan" name="5_1_ulasan" rows="8" cols="160"><?php echo $lampiran_1_bidang[4][0]; ?></textarea>
                  <br>
                </td>
              </tr>
              <tr>
                <td>
                  <h3><label for="5_2_pujian">1.2 Pujian (Commendation):</label></h3>
                  <textarea id="5_2_pujian" name="5_2_pujian" rows="8" cols="160"><?php echo $lampiran_1_bidang[4][1]; ?></textarea>
                  <br>

                </td>
              </tr>
              <tr>
                <td>
                  <h3><label for="5_3_penegasan">1.3 Penegasan (Affirmation):</label></h3>
                  <textarea id="5_3_penegasan" name="5_3_penegasan" rows="8" cols="160"><?php echo $lampiran_1_bidang[4][2]; ?></textarea>
                  <br>

                </td>
              </tr>
              <tr>
                <td>
                  <h3><label for="5_4_syor">1.4 Syor (Recommendation):</label></h3>
                  <textarea id="5_4_syor" name="5_4_syor" rows="8" cols="160"><?php echo $lampiran_1_bidang[4][3]; ?></textarea>
                  <br>
                </td>
              </tr>
            </table>
          </div>

          <div class="promo_card1 laporan-1">
            <table>
              <tr>
                <td>

                  <h2 class="collapsible">Bidang 6: Pengurusan Program</h3>
                </td>
              </tr>
              <tr>
                <td>

                  <h3><label for="6_1_ulasan">1.1 Ulasan:</label></h3>
                  <textarea id="6_1_ulasan" name="6_1_ulasan" rows="8" cols="160"><?php echo $lampiran_1_bidang[5][0]; ?></textarea>
                  <br>
                </td>
              </tr>
              <tr>
                <td>
                  <h3><label for="6_2_pujian">1.2 Pujian (Commendation):</label></h3>
                  <textarea id="6_2_pujian" name="6_2_pujian" rows="8" cols="160"><?php echo $lampiran_1_bidang[5][1]; ?></textarea>
                  <br>


                </td>
              </tr>
              <tr>
                <td>

                  <h3><label for="6_3_penegasan">1.3 Penegasan (Affirmation):</label></h3>
                  <textarea id="6_3_penegasan" name="6_3_penegasan" rows="8" cols="160"><?php echo $lampiran_1_bidang[5][2]; ?></textarea>
                  <br>

                </td>
              </tr>
              <tr>
                <td>

                  <h3><label for="6_4_syor">1.4 Syor (Recommendation):</label></h3>
                  <textarea id="6_4_syor" name="6_4_syor" rows="8" cols="160"><?php echo $lampiran_1_bidang[5][3]; ?></textarea>
                  <br>
                </td>
              </tr>

            </table>
          </div>

          <div class="promo_card1 laporan-1">
            <table>
              <tr>
                <td>
                  <h2 class="collapsible">Bidang 7: Pemantauan, Semakan dan Penambahbaikan Kualiti Berterusan Program
                  </h3>

                </td>
              </tr>
              <tr>
                <td>
                  <h3><label for="7_1_ulasan">1.1 Ulasan:</label></h3>
                  <textarea id="7_1_ulasan" name="7_1_ulasan" rows="8" cols="160"><?php echo $lampiran_1_bidang[6][0]; ?></textarea>
                  <br>

                </td>
              </tr>
              <tr>
                <td>
                  <h3><label for="7_2_pujian">1.2 Pujian (Commendation):</label></h3>
                  <textarea id="7_2_pujian" name="7_2_pujian" rows="8" cols="160"><?php echo $lampiran_1_bidang[6][1]; ?></textarea>
                  <br>

                </td>
              </tr>
              <tr>
                <td>
                  <h3><label for="7_3_penegasan">1.3 Penegasan (Affirmation):</label></h3>
                  <textarea id="7_3_penegasan" name="7_3_penegasan" rows="8" cols="160"><?php echo $lampiran_1_bidang[6][2]; ?></textarea>
                  <br>

                </td>
              </tr>
              <tr>
                <td>




                  <h3><label for="7_4_syor">1.4 Syor (Recommendation):</label></h3>
                  <textarea id="7_4_syor" name="7_4_syor" rows="8" cols="160"><?php echo $lampiran_1_bidang[6][3]; ?></textarea>
                  <br>
                </td>
              </tr>
            </table>
            <div class="invi-at-first">
            </div>
          </div>

          <div class="promo_card1 laporan-1">
            <h3 class="bahagian">BAHAGIAN B : PERAKUAN TERHADAP PENILAIAN PROGRAMPENGAJIAN OLEH PANEL PENILAI </h3>
            <h2 class="collapsible">JAWATANKUASA PANEL PENILAIAN PROGRAM memperakukan bahawa program pengajian ini:
            </h3>
            <div class="invi-at-first">
              <h3><input type="checkbox" id="opt1" name="opt1" value="opt1" <?php if($bahagian_lain_arr[0]==0){echo "checked";} ?>>
                <label for="vehicle3"> Dianugerahkan akreditasi program pengajian tanpa sebarang syarat.</label>
              </h3><br>
              <h3><input type="checkbox" id="opt2" name="opt2" value="opt2" <?php if($bahagian_lain_arr[0]==1){echo "checked";} ?>>
                <label for="vehicle3"> Dianugerahkan akreditasi dengan keperluan seperti yang dijelaskan di Bahagian
                  B1.</label>
              </h3><br>
              <h3><input type="checkbox" id="opt3" name="opt3" value="opt3" <?php if($bahagian_lain_arr[0]==2){echo "checked";} ?>>
                <label for="vehicle3"> Dianugerahkan akreditasi dengan syarat seperti yang dijelaskan di Bahagian
                  B2.</label>
              </h3><br>
              <h3><input type="checkbox" id="opt4" name="opt4" value="opt4" <?php if($bahagian_lain_arr[0]==3){echo "checked";} ?>>
                <label for="vehicle3"> Tidak layak untuk dianugerahkan akreditasi. Rujuk penafian seperti di Bahagian
                  B3</label>
              </h3><br><br>
              <h3><label for="b1">BAHAGIAN B1: KEPERLUAN TERHADAP PENILAIAN PROGRAM OLEH PANEL PENILAI
                  (lengkapkan sekiranya berkaitan):
                </label></h3>
              <textarea id="b1" name="b1" rows="8" cols="160"><?php echo $bahagian_lain_arr[1]; ?></textarea>
              <br>

              <h3><label for="b2">BAHAGIAN B2: SYARAT TERHADAP PENILAIAN PROGRAM OLEH PANEL PENILAI:</label></h3>
              <textarea id="b2" name="b2" rows="8" cols="160"><?php echo $bahagian_lain_arr[2]; ?></textarea>
              <br>

              <h3><label for="b3">BAHAGIAN B3: PENAFIAN PENGANUGERAHAN AKREDITASI OLEH PANEL PENILAI
                  (lengkapkan sekiranya berkaitan):</label></h3>
              <textarea id="b3" name="b3" rows="8" cols="160"><?php echo $bahagian_lain_arr[3]; ?></textarea>
              <br>

              <h3><label for="b4">BAHAGIAN B4: TEMPOH PERAKUAN AKREDITASI:</label></h3>
              <h3><input type="checkbox" id="b4" name="b4" value="yes"  <?php if($bahagian_lain_arr[4]==1){echo "checked";} ?>>
                <label for="b4"> Program ini AKAN dapat akredasi.</label>
              </h3><br>
              <h3><input type="checkbox" id="b4" name="b4" value="no" <?php if($bahagian_lain_arr[4]==2){echo "checked";} ?>>
                <label for="b4"> Program ini TIDAK AKAN dapat akredasi.</label>
              </h3><br> <br>
            </div>
          </div>
          <div class="promo_card1 laporan-1">
            <h3 class="bahagian">BAHAGIAN C : PENGESAHAN DAN TANDATANGAN PANEL PENILAI </h3>
            <h3 class="">JAWATANKUASA PANEL PENILAIAN PROGRAM memperakukan bahawa program pengajian ini:
            </h3>
            <table>
              <tr>
                <td colspan="2">

                  Disediakan Oleh:
                </td>
              </tr>
              <tr>
                <td>Nama, Jawatan & Alamat</td>
                <td>Tandatangan</td>
              </tr>
              <tr>
                <td>PENGERUSI: <?php echo $p0; ?></td>
                <?php
                    echo '<img width="150" height="150" src="'.$laporan_all_people[0][10].'">';
                  ?>              </tr>
              <tr>
                <td>AHLI PANEL 1: <?php echo $p1; ?></td>
                <?php
                    echo '<img width="150" height="150" src="'.$laporan_all_people[0][11].'">';
                   ?>
              </tr>
            </table>
          </div>
          <?php
          $flag = true;
          if ($typel == 0) {
            for ($i = 1; $i < count($laporan_all_people) - 1; $i++) {
              // if ($i == 0) {
              //   $typee = "Pengerusi";
              // } else
              if ($i == 1) {
                $typee = "Ahli Panel 1";
              }

              if ($laporan_all_people[$i][1] == "NOT STARTED") {
                $flag = false;
                break;
              }
            }

          }
          if ($flag) {
            echo '<div class="field">
              <input type="submit" class="btn" id="submit" name="submit" value="Hantar" required>
            </div>';

            echo '<button onclick="printLaporan()" style="margin: 10px 0 0 0px;padding: 10px 30px; background-color: #5d7851;"
            class="btn" id="submit" name="submit" value="Hantar">Cetak</button>';
          }
          ?>

    </div>
    </form>

    </section>
  </div>





  <script src="../js/script.js"></script>
  <script>


    function allOpen() {
      var coll = document.getElementsByClassName("collapsible");
      for (i = 0; i < coll.length; i++) {
        var content = coll[i].nextElementSibling;
        // coll[i].classList.toggle("active");
        content.style.display = "block";

      }
    }

    function allClose() {
      var coll = document.getElementsByClassName("collapsible");
      for (i = 0; i < coll.length; i++) {
        var content = coll[i].nextElementSibling;

        content.style.display = "none";

      }

      coll[0].style.display = "block";
    }

    function printRating() {
      var coll = document.getElementsByClassName("rating-1");
      for (i = 0; i < coll.length; i++) {
        coll[i].style.display = "block";
      }

      var coll = document.getElementsByClassName("laporan-1");
      for (i = 0; i < coll.length; i++) {
        coll[i].style.display = "none";
      }
    }

    function printOnlyLaporan() {
      var coll = document.getElementsByClassName("rating-1");
      for (i = 0; i < coll.length; i++) {
        coll[i].style.display = "none";
      }

      var coll = document.getElementsByClassName("laporan-1");
      for (i = 0; i < coll.length; i++) {
        coll[i].style.display = "block";
      }
    }
    function allExist() {
      var coll = document.getElementsByClassName("rating-1");
      for (i = 0; i < coll.length; i++) {
        coll[i].style.display = "block";
      }

      coll = document.getElementsByClassName("laporan-1");
      for (i = 0; i < coll.length; i++) {
        coll[i].style.display = "block";
      }
    }

    function printLaporan() {
      //     var printwin = window.open("");
      // printwin.document.write(document.getElementById("main-page").innerHTML);
      // allOpen();
      // printwin.stop();
      printOnlyLaporan();
      window.print();
      printRating();
      window.print();
      // allClose();
      allExist();
    }

  </script>


  </div>
</body>

</html>