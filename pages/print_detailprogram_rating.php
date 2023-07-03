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

$lampiran_1_arr = explode("<", $lampiran_1);
$akredasi_penuh_arr = explode("|", $akredasi_penuh);

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
  <script src="https://cdn.anychart.com/releases/8.11.0/js/anychart-exports.min.js"></script>

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

    textarea, input {
      border: none;
    }

    textarea:focus, input:focus, input {
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

    h3.collapsible{
      margin-top: 30px;
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
  </script>
</head>

<body>
  <div id="main-page">







    <div class="page-2">


      <section class="courses">
        <div class="div-center">

          <img src="../img/ukm_logo.png" alt="" style="width: 25rem">
          <h3>LAPORAN AKREDITASI PENUH PROGRAM PENGAJIAN<br>
UNIVERSITI KEBANGSAAN MALAYSIA<br>
MENGIKUT KOD AMALAN AKREDITASI PROGRAM (EDISI KEDUA, 2017), MQA

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


          <div class="rating-1 promo_card1">
            <div class="rating-1 promo_card1" style="display: block; margin-top: 30px;">

              <?php
              include('./print_area_overall.php');
              ?>
              <h3>RECOMMENDATION: ACCREDITATION GRANTED FOR 5 YEARS</h3>
              <div id="chart-container" style="width: 100%; height: 300px; ">

              </div>
            </div>
            <div class="rating-1 promo_card1" style="display: block;">
              <h1 class="" style="display: block;">Details</h1>

              <?php
              include('./print_area_details.php');
              ?>
            </div>
            <?php
            include('./print_area1.php');
            include('./print_area2.php');
            include('./print_area3.php');
            include('./print_area4.php');
            include('./print_area5.php');
            include('./print_area6.php');
            include('./print_area7.php');
            ?>
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

          ?>

    </div>

    </section>
  </div>





  <script src="../js/script.js"></script>
  <script>




  </script>


  </div>
</body>

</html>