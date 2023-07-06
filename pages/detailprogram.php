<?php

include("../php/db.php");
// session_start();
include('../components/app_protected_route.php');
include('../functions/php_upload_cloudinary.php');

$app_program_id = $_GET["id"];
$typel = $_GET["type"];
$pid = $_GET["pid"];
$str_url = '../functions/check_access.php?id=' . $app_program_id . '&type=' . $typel . '&pid=' . $pid;
include('../functions/check_access.php');
include('../functions/search_all_laporan.php');

$all_empty = true;

for ($yyy = 0; $yyy < 3; $yyy++) {
  if (count($laporan_all_people[$yyy]) != 0) {
    $all_empty = false;
    break;
  }
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

if (isset($_POST['submit'])) {
  if (file_exists($_FILES['tandatangan_1']['tmp_name']) || is_uploaded_file($_FILES['tandatangan_1']['tmp_name'])) {

    // $cloudinary->image('olympic_flag')->resize(Resize::fill(100, 150))->toUrl();
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["tandatangan_1"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image

    $check = getimagesize($_FILES["tandatangan_1"]["tmp_name"]);
    if ($check !== false) {
      $uploadOk = 1;
    } else {
      echo "File is not an image.";
      $uploadOk = 0;
    }


    // Check if file already exists
    if (file_exists($target_file)) {
      echo "Sorry, file already exists.";
      $uploadOk = 0;
    }

    // Check file size
    if ($_FILES["tandatangan_1"]["size"] > 500000) {
      echo "Sorry, your file is too large.";
      $uploadOk = 0;
    }

    // Allow certain file formats
    if (
      $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
      && $imageFileType != "gif"
    ) {
      echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
      $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
      echo "Sorry, your file was not uploaded.";
      // if everything is ok, try to upload file
    } else {
      // if (move_uploaded_file($_FILES["tandatangan_1"]["tmp_name"], $target_file)) {
      //   echo "The file ". htmlspecialchars( basename( $_FILES["tandatangan_1"]["name"])). " has been uploaded.";
      // } else {
      //   echo "Sorry, there was an error uploading your file.";
      // }
      $resp = $cloudinary->uploadApi()->upload(
        $_FILES["tandatangan_1"]["tmp_name"]
      );
      $url_avatar = $resp->offsetGet('secure_url');
    }
  }
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

  $bahagian_lain = $_POST["b_a"] . ";" . $_POST["b1"] . ";" . $_POST["b2"] . ";" . $_POST["b3"] . ";" . $_POST["b4_a"];
  $tt_link = $url_avatar;
  if ($typel == 0) {
    $tt_link1 = $laporan_all_people[1][11];
    $insert_stmt = "INSERT INTO laporan (`STATUS`, `TARIKH_AWAL`, `TARIKH_AKHIR`, `APPPROGRAM_ID`, `LAMPIRAN_1`, `AKREDASI_PENUH`, `TYPE`, `TARIKH_EFEKTIF`, BAHAGIAN_LAIN, TANDATANGAN_0, TANDATANGAN_1) VALUES
    ('SUDAH HANTAR', '$today_date', '', '$app_program_id', '$lampiran_1', '$akredasi_penuh', '$typel', '$effectiveDate', '$bahagian_lain', '$tt_link', '$tt_link1')";
  } else {
    $insert_stmt = "INSERT INTO laporan (`STATUS`, `TARIKH_AWAL`, `TARIKH_AKHIR`, `APPPROGRAM_ID`, `LAMPIRAN_1`, `AKREDASI_PENUH`, `TYPE`, `TARIKH_EFEKTIF`, BAHAGIAN_LAIN, TANDATANGAN_1) VALUES
    ('SUDAH HANTAR', '$today_date', '', '$app_program_id', '$lampiran_1', '$akredasi_penuh', '$typel', '$effectiveDate', '$bahagian_lain', '$tt_link')";
  }

  date_default_timezone_set("Asia/Kuala_Lumpur");
  $today_date = date("Y-m-d");
  $current_time = date("H-i-s");
  $app_program_id = $_GET["id"];
  $typel = $_GET["type"];
  $effectiveDate = date('Y-m-d', strtotime("+6 months", strtotime($today_date)));

  if (
    $stmt = $con->prepare($insert_stmt)
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
  <link rel="stylesheet" media="all" href="../style/stylearea.css">

  <!-- custom css file link  -->
  <link rel="stylesheet" media="all" href="../style/stylepertanyaan.css">
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
        overflow: visible !important;
      }
    }

    .collapsible {
      /* display:none; */
    }

    .active,
    .collapsible:hover {
      background-color: #d3d3d3;
    }

    .content {
      padding: 0 18px;
      display: none;
      overflow: hidden;
      background-color: #f1f1f1;
    }

    .invi-at-first {
      display: none;
    }
  </style>

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

    /* html {
      padding: 15px;
      overflow: visible !important;
    } */

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

    <?php
    include("../components/navbar_app.php");
    include("../components/sidebar_app.php");
    include("../components/pengumuman.php");
    ?>

    <div class="page-2">

      <section class="courses">

        <h2>Penilaian Detail Program</h2>
        <div class="promo_card1">
          <h1 class="collapsible">Informasi Program</h1>
          <table>

            <?php
            //execute
            $programinfo = array();
            if ($stmt = $con->prepare("SELECT `PROGRAM_ID`, `TARIKH`, `URL_FILE_DRIVE`, `NAMA`, `URL_DRIVE`, `BIDANG`, `STATUS`, `DESCRIPTION` FROM `program` WHERE `PROGRAM_ID` = '$pid'")) {

              $stmt->execute();
              mysqli_stmt_bind_result($stmt, $program_id, $tarikh, $masa, $nama, $url_drive, $bidang,$status,$description);

           // }   /* fetch values */
              while (mysqli_stmt_fetch($stmt)) {
                 array_push($programinfo, array($program_id, $tarikh, $masa, $nama, $url_drive, $bidang,$status,$description));
              }
              // echo $stmt->field_count;
           } else {
              // Something is wrong with the SQL statement, so you must check to make sure your accounts table exists with all 3 fields.
              echo 'Could not prepare statement!';
           }

            echo '
   <tr><td style="width: 33%; border: 1px solid black;">Gambar Program: </td><td style="width: 66%; border: 1px solid black;"><img style="display: block; margin: 10px auto; margin-left: auto; margin-right: auto; width:200px; height: 200px;" src="'.$programinfo[0][4].'"></td></tr>
   <tr><td style="width: 33%; border: 1px solid black;">Nama Program: </td><td style="width: 66%; border: 1px solid black;">'.$programinfo[0][3].'</td></tr>
   <tr><td style="width: 33%; border: 1px solid black;">Tarikh: </td><td style="width: 66%; border: 1px solid black;">'.$programinfo[0][1].'</td></tr>
   <tr><td style="width: 33%; border: 1px solid black;">Link Fail-fail Proram: </td><td style="width: 66%; border: 1px solid black;"><a href="'.$programinfo[0][2].'">'.$programinfo[0][2].'</a></td></tr>
   <tr><td style="width: 33%; border: 1px solid black;">Bidang: </td><td style="width: 66%; border: 1px solid black;">'.$programinfo[0][5].'</td></tr>
   <tr><td style="width: 33%; border: 1px solid black;">Informasi Seterusnya: </td><td style="width: 66%; border: 1px solid black;">'.$programinfo[0][7].'</td></tr>
            ';
            ?>
          </table>

          <a href="../functions/generate_program.php?pid=<?php echo $pid; ?>"  class="btn" style="margin-top: 20px;">Muat Turun</a>
        </div>

        <div class="box-container">
          <?php
          if ($typel == 0) {
            for ($i = 1; $i < count($laporan_all_people) - 1; $i++) {
              // if ($i == 0) {
              //   $typee = "Pengerusi";
              // } else
              if ($i == 1) {
                $typee = "Ahli Panel 1";
              }
              echo "<div class=\"box\">
              <div class=\"tutor\">
                <img src=\"../img/program.jpg\" alt=\"\">
                <div>
                    <span>Report " . ($i) . "</span>
                </div>
              </div>

              <p>Jawatan: <span>", $typee, "</span></p>
              <p>Status: <span>", $laporan_all_people[$i][1], "</span></p>";
              if ($laporan_all_people[$i][1] != "NOT STARTED")
                echo "<a href=\"./other_people_laporan.php?id=$app_program_id&type=$i&pid=$pid\" class=\"inline-btn\">Lihat</a>";
              echo "</div>";
            }
          }

          ?>
        </div>
        <div class="rating-1 promo_card1" style="display: block;">
          <h1 class="" style="display: block;">Overall</h1>

          <?php
          include('./area_overall.php');
          ?>
          <div id="chart-container" style="width: 100%; height: 300px; ">

          </div>
        </div>

        <div class="rating-1 promo_card1" style="display: block;">
          <h1 class="" style="display: block;">Details</h1>

          <?php
          include('./area_details.php');
          ?>
        </div>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]), "?id=$app_program_id&type=$typel&pid=$pid"; ?>"
          enctype="multipart/form-data" method="post" autocomplete="off" class="sign-in-form">
          <div class="promo_card1 laporan-1">
            <h1 class="collapsible" style="display: block;">Bidang 1: Pembangunan & Penyampaian Program</h1>
            <div>
              <h2><label for="1_1_ulasan">1.1 Ulasan:</label></h2>
              <textarea id="1_1_ulasan" name="1_1_ulasan" rows="4" cols="60"></textarea>
              <br>


              <h2><label for="1_2_pujian">1.2 Pujian (Commendation):</label></h2>
              <textarea id="1_2_pujian" name="1_2_pujian" rows="4" cols="60"></textarea>
              <br>

              <h2><label for="1_3_penegasan">1.3 Penegasan (Affirmation):</label></h2>
              <textarea id="1_3_penegasan" name="1_3_penegasan" rows="4" cols="60"></textarea>
              <br>

              <h2><label for="1_4_syor">1.4 Syor (Recommendation):</label></h2>
              <textarea id="1_4_syor" name="1_4_syor" rows="4" cols="60"></textarea>
              <br>
              <?php
              include('./area1.php');
              ?>
            </div>
          </div>

          <div class="promo_card1 laporan-1">
            <h1 class="collapsible">Bidang 2: Penilaian Pembelajaran Pelajar</h1>
            <div class="invi-at-first">
              <h2><label for="2_1_ulasan">1.1 Ulasan:</label></h2>
              <textarea id="2_1_ulasan" name="2_1_ulasan" rows="4" cols="60"></textarea>
              <br>

              <h2><label for="2_2_pujian">1.2 Pujian (Commendation):</label></h2>
              <textarea id="2_2_pujian" name="2_2_pujian" rows="4" cols="60"></textarea>
              <br>

              <h2><label for="2_3_penegasan">1.3 Penegasan (Affirmation):</label></h2>
              <textarea id="2_3_penegasan" name="2_3_penegasan" rows="4" cols="60"></textarea>
              <br>

              <h2><label for="2_4_syor">1.4 Syor (Recommendation):</label></h2>
              <textarea id="2_4_syor" name="2_4_syor" rows="4" cols="60"></textarea>
              <br>
              <?php
              include('./area2.php');
              ?>
            </div>
          </div>

          <div class="promo_card1 laporan-1">
            <h1 class="collapsible">Bidang 3: Pemilihan Pelajar dan Perkhidmatan Sokongan </h1>
            <div class="invi-at-first">
              <h2><label for="3_1_ulasan">1.1 Ulasan:</label></h2>
              <textarea id="3_1_ulasan" name="3_1_ulasan" rows="4" cols="60"></textarea>
              <br>

              <h2><label for="3_2_pujian">1.2 Pujian (Commendation):</label></h2>
              <textarea id="3_2_pujian" name="3_2_pujian" rows="4" cols="60"></textarea>
              <br>

              <h2><label for="3_3_penegasan">1.3 Penegasan (Affirmation):</label></h2>
              <textarea id="3_3_penegasan" name="3_3_penegasan" rows="4" cols="60"></textarea>
              <br>

              <h2><label for="3_4_syor">1.4 Syor (Recommendation):</label></h2>
              <textarea id="3_4_syor" name="3_4_syor" rows="4" cols="60"></textarea>
              <br>
              <?php
              include('./area3.php');
              ?>
            </div>
          </div>

          <div class="promo_card1 laporan-1">
            <h1 class="collapsible">Bidang 4: Kakitangan Akademik</h1>
            <div class="invi-at-first">
              <h2><label for="4_1_ulasan">1.1 Ulasan:</label></h2>
              <textarea id="4_1_ulasan" name="4_1_ulasan" rows="4" cols="60"></textarea>
              <br>

              <h2><label for="4_2_pujian">1.2 Pujian (Commendation):</label></h2>
              <textarea id="4_2_pujian" name="4_2_pujian" rows="4" cols="60"></textarea>
              <br>

              <h2><label for="4_3_penegasan">1.3 Penegasan (Affirmation):</label></h2>
              <textarea id="4_3_penegasan" name="4_3_penegasan" rows="4" cols="60"></textarea>
              <br>

              <h2><label for="4_4_syor">1.4 Syor (Recommendation):</label></h2>
              <textarea id="4_4_syor" name="4_4_syor" rows="4" cols="60"></textarea>
              <br>
              <?php
              include('./area4.php');
              ?>
            </div>
          </div>

          <div class="promo_card1 laporan-1">
            <h1 class="collapsible">Bidang 5: Sumber Pendidikan</h1>
            <div class="invi-at-first">
              <h2><label for="5_1_ulasan">1.1 Ulasan:</label></h2>
              <textarea id="5_1_ulasan" name="5_1_ulasan" rows="4" cols="60"></textarea>
              <br>

              <h2><label for="5_2_pujian">1.2 Pujian (Commendation):</label></h2>
              <textarea id="5_2_pujian" name="5_2_pujian" rows="4" cols="60"></textarea>
              <br>

              <h2><label for="5_3_penegasan">1.3 Penegasan (Affirmation):</label></h2>
              <textarea id="5_3_penegasan" name="5_3_penegasan" rows="4" cols="60"></textarea>
              <br>

              <h2><label for="5_4_syor">1.4 Syor (Recommendation):</label></h2>
              <textarea id="5_4_syor" name="5_4_syor" rows="4" cols="60"></textarea>
              <br>
              <?php
              include('./area5.php');
              ?>
            </div>
          </div>

          <div class="promo_card1 laporan-1">
            <h1 class="collapsible">Bidang 6: Pengurusan Program</h1>
            <div class="invi-at-first">
              <h2><label for="6_1_ulasan">1.1 Ulasan:</label></h2>
              <textarea id="6_1_ulasan" name="6_1_ulasan" rows="4" cols="60"></textarea>
              <br>

              <h2><label for="6_2_pujian">1.2 Pujian (Commendation):</label></h2>
              <textarea id="6_2_pujian" name="6_2_pujian" rows="4" cols="60"></textarea>
              <br>

              <h2><label for="6_3_penegasan">1.3 Penegasan (Affirmation):</label></h2>
              <textarea id="6_3_penegasan" name="6_3_penegasan" rows="4" cols="60"></textarea>
              <br>

              <h2><label for="6_4_syor">1.4 Syor (Recommendation):</label></h2>
              <textarea id="6_4_syor" name="6_4_syor" rows="4" cols="60"></textarea>
              <br>
              <?php
              include('./area6.php');
              ?>
            </div>
          </div>

          <div class="promo_card1 laporan-1">
            <h1 class="collapsible">Bidang 7: Pemantauan, Semakan dan Penambahbaikan Kualiti Berterusan Program </h1>
            <div class="invi-at-first">
              <h2><label for="7_1_ulasan">1.1 Ulasan:</label></h2>
              <textarea id="7_1_ulasan" name="7_1_ulasan" rows="4" cols="60"></textarea>
              <br>

              <h2><label for="7_2_pujian">1.2 Pujian (Commendation):</label></h2>
              <textarea id="7_2_pujian" name="7_2_pujian" rows="4" cols="60"></textarea>
              <br>

              <h2><label for="7_3_penegasan">1.3 Penegasan (Affirmation):</label></h2>
              <textarea id="7_3_penegasan" name="7_3_penegasan" rows="4" cols="60"></textarea>
              <br>

              <h2><label for="7_4_syor">1.4 Syor (Recommendation):</label></h2>
              <textarea id="7_4_syor" name="7_4_syor" rows="4" cols="60"></textarea>
              <br>
              <?php
              include('./area7.php');
              ?>
            </div>
          </div>

          <div class="promo_card1 laporan-1" style="display: block">
            <h1 class="">BAHAGIAN B : PERAKUAN TERHADAP PENILAIAN PROGRAMPENGAJIAN OLEH PANEL PENILAI </h1>
            <h2 class="collapsible">JAWATANKUASA PANEL PENILAIAN PROGRAM memperakukan bahawa program pengajian ini:
            </h2>
            <div class="invi-at-first">
              <h2><input type="checkbox" id="b_1" name="b_1" value="1" onclick="ensureChooseOne(1)">
                <label for="vehicle3"> Dianugerahkan akreditasi program pengajian tanpa sebarang syarat.</label>
              </h2><br>
              <h2><input type="checkbox" id="b_2" name="b_2" value="2" onclick="ensureChooseOne(2)">
                <label for="vehicle3"> Dianugerahkan akreditasi dengan keperluan seperti yang dijelaskan di Bahagian
                  B1.</label>
              </h2><br>
              <h2><input type="checkbox" id="b_3" name="b_3" value="3" onclick="ensureChooseOne(3)">
                <label for="vehicle3"> Dianugerahkan akreditasi dengan syarat seperti yang dijelaskan di Bahagian
                  B2.</label>
              </h2><br>
              <h2><input type="checkbox" id="b_4" name="b_4" value="4" onclick="ensureChooseOne(4)">
                <label for="vehicle3"> Tidak layak untuk dianugerahkan akreditasi. Rujuk penafian seperti di Bahagian
                  B3</label>
              </h2><br><br>
              <h2><label for="b1">BAHAGIAN B1: KEPERLUAN TERHADAP PENILAIAN PROGRAM OLEH PANEL PENILAI
                  (lengkapkan sekiranya berkaitan):
                </label></h2>
              <textarea id="b1" name="b1" rows="4" cols="60"></textarea>
              <br>

              <h2><label for="b2">BAHAGIAN B2: SYARAT TERHADAP PENILAIAN PROGRAM OLEH PANEL PENILAI:</label></h2>
              <textarea id="b2" name="b2" rows="4" cols="60"></textarea>
              <br>

              <h2><label for="b3">BAHAGIAN B3: PENAFIAN PENGANUGERAHAN AKREDITASI OLEH PANEL PENILAI
                  (lengkapkan sekiranya berkaitan):</label></h2>
              <textarea id="b3" name="b3" rows="4" cols="60"></textarea>
              <br>

              <h2><label for="b4">BAHAGIAN B4: TEMPOH PERAKUAN AKREDITASI:</label></h2>
              <h2><input type="checkbox" id="b4_1" name="b4_1" value="1" onclick="ensureChooseOneB4(1)">
                <label for="b4"> Program ini AKAN dapat akredasi.</label>
              </h2><br>
              <h2><input type="checkbox" id="b4_2" name="b4_2" value="0" onclick="ensureChooseOneB4(2)">
                <label for="b4"> Program ini TIDAK AKAN dapat akredasi.</label>
              </h2><br> <br>
              <input type="text" name="b_a" id="b_a" hidden>
              <input type="text" name="b4_a" id="b4_a" hidden>
            </div>
          </div>
          <div class="promo_card1 laporan-1" style="display: block">
            <h1 class="">BAHAGIAN C : PENGESAHAN DAN TANDATANGAN PANEL PENILAI </h1>
            <h2 class="">JAWATANKUASA PANEL PENILAIAN PROGRAM memperakukan bahawa program pengajian ini:
            </h2>
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
                <td>PENGERUSI:  <?php echo $p0; ?></td>
                <td>
                  <?php if ($typel == 0) {
                    echo '<input type="file" name="tandatangan_1" id="tandatangan_1">';
                  } ?>
                </td>
              </tr>
              <tr>
                <td>AHLI PANEL 1:  <?php echo $p1; ?></td>
                <td>
                  <?php if ($typel == 1) {
                    echo '<input type="file" name="tandatangan_1" id="tandatangan_1">';
                  } else if ($typel == 0) {
                    echo '<img width="150" height="150" src="'.$laporan_all_people[1][11].'">';
                  } ?>
                </td>
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
          }
          //   echo '<button onclick="printLaporan()" style="margin: 10px 0 0 0px;padding: 10px 30px; background-color: #5d7851;"
          // class="btn" id="submit" name="submit" value="Hantar">Cetak</button>';
          ?>

    </div>
    </form>
    </section>
  </div>



  <footer>
    <ul class="footer-icons">
      <li><a href="#">
          <ion-icon name="call-outline"></ion-icon>
        </a></li>
      <li><a href="#">
          <ion-icon name="mail-outline"></ion-icon>
        </a></li>
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
  <script>
    var coll = document.getElementsByClassName("collapsible");
    var i;

    for (i = 0; i < coll.length; i++) {
      coll[i].addEventListener("click", function () {
        this.classList.toggle("active");
        var content = this.nextElementSibling;
        if (content.style.display === "block") {
          content.style.display = "none";
        } else {
          content.style.display = "block";
        }
      });
    }

    function allOpen() {
      var coll = document.getElementsByClassName("collapsible");
      for (i = 0; i < coll.length; i++) {
        var content = coll[i].nextElementSibling;
        // coll[i].classList.toggle("active");
        content.style.display = "block";

      }
    }

    function ensureChooseOne(current_b) {
      document.getElementById("b_1").checked = false;
      document.getElementById("b_2").checked = false;
      document.getElementById("b_3").checked = false;
      document.getElementById("b_4").checked = false;
      document.getElementById("b_a").value = current_b;

      switch (current_b) {
        case 1:
          document.getElementById("b_1").checked = true;
          break;
        case 2:
          document.getElementById("b_2").checked = true;
          break;
        case 3:
          document.getElementById("b_3").checked = true;
          break;
        case 4:
          document.getElementById("b_4").checked = true;
          break;
      }
    }

    function ensureChooseOneB4(current_b4) {
      document.getElementById("b4_1").checked = false;
      document.getElementById("b4_2").checked = false;
      document.getElementById("b4_a").value = current_b4;

      switch (current_b4) {
        case 1:
          document.getElementById("b4_1").checked = true;
          break;
        case 2:
          document.getElementById("b4_2").checked = true;
          break;
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