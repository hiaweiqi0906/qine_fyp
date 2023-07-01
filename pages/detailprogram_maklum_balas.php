<?php

include("../php/db.php");
// session_start();
include('../components/app_protected_route.php');

$app_program_id = $_GET["id"];
$typel = $_GET["type"];
$pid = $_GET["pid"];
$str_url = '../functions/check_access.php?id=' . $app_program_id . '&type=' . $typel . '&pid=' . $pid;
include('../functions/check_access.php');
include('../functions/search_all_laporan.php');
// include('../functions/search_all_maklum_balas.php');
// echo count($laporan_all_people);

$all_empty = true;
// $today_date = date("Y-m-d");
//   $effectiveDate = date('Y-m-d', strtotime("+6 months", strtotime($today_date)));
//   echo '-->'.strtotime($today_date).'<---->'.strtotime($effectiveDate);

for ($yyy = 0; $yyy < 3; $yyy++) {
  if (count($laporan_all_people[$yyy]) != 0) {
    $all_empty = false;
    break;
  }
}

if (isset($_POST['submit'])) {
  $lampiran_1 = "";
  $l1_1_ulasan = $_POST['1_1_mb1'];
  $l1_2_pujian = $_POST['1_2_mb2'];
  $l1_3_penegasan = $_POST['1_3_mb3'];
  $l1_4_syor = $_POST['1_4_mb4'];
  $l1_5 = $_POST['1_5_mb5'];
  $l1_6 = $_POST['1_6_mb6'];
  $lampiran_1 = $l1_1_ulasan . "~" . $l1_2_pujian . "~" . $l1_3_penegasan . "~" . $l1_4_syor . "~" . $l1_5 . "~" . $l1_6 . "<";

  $l2_1_ulasan = $_POST['2_1_mb1'];
  $l2_2_pujian = $_POST['2_2_mb2'];
  $l2_3_penegasan = $_POST['2_3_mb3'];
  $l2_4_syor = $_POST['2_4_mb4'];
  $l2_5 = $_POST['2_5_mb5'];
  $l2_6 = $_POST['2_6_mb6'];
  $lampiran_1 = $lampiran_1 . $l2_1_ulasan . "~" . $l2_2_pujian . "~" . $l2_3_penegasan . "~" . $l2_4_syor . "~" . $l2_5 . "~" . $l2_6 . "<";

  $l3_1_ulasan = $_POST['3_1_mb1'];
  $l3_2_pujian = $_POST['3_2_mb2'];
  $l3_3_penegasan = $_POST['3_3_mb3'];
  $l3_4_syor = $_POST['3_4_mb4'];
  $l3_5 = $_POST['3_5_mb5'];
  $l3_6 = $_POST['3_6_mb6'];
  $lampiran_1 = $lampiran_1 . $l3_1_ulasan . "~" . $l3_2_pujian . "~" . $l3_3_penegasan . "~" . $l3_4_syor . "~" . $l3_5 . "~" . $l3_6 . "<";

  $l4_1_ulasan = $_POST['4_1_mb1'];
  $l4_2_pujian = $_POST['4_2_mb2'];
  $l4_3_penegasan = $_POST['4_3_mb3'];
  $l4_4_syor = $_POST['4_4_mb4'];
  $l4_5 = $_POST['4_5_mb5'];
  $l4_6 = $_POST['4_6_mb6'];
  $lampiran_1 = $lampiran_1 . $l4_1_ulasan . "~" . $l4_2_pujian . "~" . $l4_3_penegasan . "~" . $l4_4_syor . "~" . $l4_5 . "~" . $l4_6 . "<";

  $l5_1_ulasan = $_POST['5_1_mb1'];
  $l5_2_pujian = $_POST['5_2_mb2'];
  $l5_3_penegasan = $_POST['5_3_mb3'];
  $l5_4_syor = $_POST['5_4_mb4'];
  $l5_5 = $_POST['5_5_mb5'];
  $l5_6 = $_POST['5_6_mb6'];
  $lampiran_1 = $lampiran_1 . $l5_1_ulasan . "~" . $l5_2_pujian . "~" . $l5_3_penegasan . "~" . $l5_4_syor . "~" . $l5_5 . "~" . $l5_6 . "<";

  $l6_1_ulasan = $_POST['6_1_mb1'];
  $l6_2_pujian = $_POST['6_2_mb2'];
  $l6_3_penegasan = $_POST['6_3_mb3'];
  $l6_4_syor = $_POST['6_4_mb4'];
  $l6_5 = $_POST['6_5_mb5'];
  $l6_6 = $_POST['6_6_mb6'];
  $lampiran_1 = $lampiran_1 . $l6_1_ulasan . "~" . $l6_2_pujian . "~" . $l6_3_penegasan . "~" . $l6_4_syor . "~" . $l6_5 . "~" . $l6_6 . "<";

  $l7_1_ulasan = $_POST['7_1_mb1'];
  $l7_2_pujian = $_POST['7_2_mb2'];
  $l7_3_penegasan = $_POST['7_3_mb3'];
  $l7_4_syor = $_POST['7_4_mb4'];
  $l7_5 = $_POST['7_5_mb5'];
  $l7_6 = $_POST['7_6_mb6'];
  $lampiran_1 = $lampiran_1 . $l7_1_ulasan . "~" . $l7_2_pujian . "~" . $l7_3_penegasan . "~" . $l7_4_syor . "~" . $l7_5 . "~" . $l7_6;

  date_default_timezone_set("Asia/Kuala_Lumpur");
  $today_date = date("Y-m-d");
  $current_time = date("H-i-s");
  $app_program_id = $_GET["id"];
  $typel = $_GET["type"];
  $effectiveDate = date('Y-m-d', strtotime("+6 months", strtotime($today_date)));

  if (
    $stmt = $con->prepare("UPDATE laporan SET `MAKLUM_BALAS` = '$lampiran_1', `SENTTOUSERFAKULTI` = 'TT' WHERE APPPROGRAM_ID = '$app_program_id' AND `TYPE` = '$typel' ")
  ) {
    $stmt->execute();
  } else {
    echo 'Could not prepare statement!';
  }



  // if (
  //   $stmt = $con->prepare("UPDATE appprogram SET TARIKH_MASA_KEMASKINI = '$today_date' WHERE APPPROGRAM_ID = '$app_program_id' LIMIT 1")
  // ) {
  //   $stmt->execute();
  // } else {
  //   echo 'Could not prepare statement!';
  // }

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

$lampiran_1 = $laporan_all_people[$typel][5];
$lampiran_1_arr = explode("<", $lampiran_1);
$lampiran_1_bidang = array();
for ($jj = 0; $jj < 7; $jj++) {
  array_push($lampiran_1_bidang, explode("~", $lampiran_1_arr[$jj]));
}

$mb = "";
$stuf = "";
if (
  $stmt = $con->prepare("SELECT MAKLUM_BALAS, SENTTOUSERFAKULTI from laporan WHERE APPPROGRAM_ID = '$app_program_id'")
) {
  $stmt->execute();
  mysqli_stmt_bind_result($stmt, $maklum_balas, $stuuf);
  while (mysqli_stmt_fetch($stmt)) {
    $mb = $maklum_balas;
    $stuf = $stuuf;
  }
} else {
  echo 'Could not prepare statement!';
}

if (!isset($mb)) {
  $mb = "~~~~~<~~~~~<~~~~~<~~~~~<~~~~~<~~~~~<~~~~~";
}

$mb_arr = explode("<", $mb);
$mb_bidang = array();
for ($jj = 0; $jj < 7; $jj++) {
  array_push($mb_bidang, explode("~", $mb_arr[$jj]));
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

    .table th {
      background-color: #ccc;
      font-size: 1rem;
      color: black !important;
    }

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
      display: block;
    }
  </style>

  <!-- <script>
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


  </script> -->

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
        <div class="promo_card">
          <h1 class="collapsible">Tajuk Program</h1>
          <span>Detail</span>
          <a href="../functions/generate_program.php?pid=<?php echo $pid; ?>">Muat Turun</a>


        </div>

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]), "?id=$app_program_id&type=$typel&pid=$pid"; ?>"
          method="post" autocomplete="off" class="sign-in-form">
          <h1 class="collapsible">Maklum Balas</h1>

          <?php
          // echo $lampiran_1_bidang[0][3];
          if ($lampiran_1_bidang[0][3] != "") {
            $hidden = "style=\"display: block\"";
          } else {
            $hidden = "style=\"display: none\"";

          }
          echo ' <div class="promo_card1" ' . $hidden . '>
            <h1>Bidang 1: Pembangunan & Penyampaian Program</h1>
            <h2><label for="1_1_mb1">1.1 Penemuan Panel Penilai:</label></h2>
            <textarea id="1_1_mb1" name="1_1_mb1" rows="4" cols="60" readonly>' . $lampiran_1_bidang[0][3] . '</textarea>
            <br>

            <h2><label for="1_2_mb2">1.2 Tindakan Penambahbaikan:</label></h2>
            <textarea id="1_2_mb2" name="1_2_mb2" rows="4" cols="60" readonly>' . $mb_bidang[0][1] . '</textarea>
            <br>

            <h2><label for="1_3_mb3">1.3 Pelaksana:</label></h2>
            <textarea id="1_3_mb3" name="1_3_mb3" rows="4" cols="60" readonly>' . $mb_bidang[0][2] . '</textarea>
            <br>

            <h2><label for="1_4_mb4">1.4 Penghasilan:</label></h2>
            <textarea id="1_4_mb4" name="1_4_mb4" rows="4" cols="60" readonly>' . $mb_bidang[0][3] . '</textarea>
            <br>
            <h2><label for="1_5_mb5">1.5 Jangka Masa Pelaksanaan Penambahbaikan:</label></h2>
            <textarea id="1_5_mb5" name="1_5_mb5" rows="4" cols="60" readonly>' . $mb_bidang[0][4] . '</textarea>
            <br>
            <h2><label for="1_6_mb6">1.6 Ulasan Panel Penilai:</label></h2>
            <textarea id="1_6_mb6" name="1_6_mb6" rows="4" cols="60">' . $mb_bidang[0][5] . '</textarea>
            <br>
          </div>
';

          $hidden = "style=\"display: none\"";


          if ($lampiran_1_bidang[1][3] != "") {
            $hidden = "style=\"display: block\"";
          }
          echo ' <div class="promo_card1" ' . $hidden . '>
            <h1>Bidang 2: Penilaian Pembelajaran Pelajar</h1>
            <h2><label for="2_1_mb1">1.1 Penemuan Panel Penilai:</label></h2>
            <textarea id="2_1_mb1" name="2_1_mb1" rows="4" cols="60" readonly>' . $lampiran_1_bidang[1][3] . '</textarea>
            <br>

            <h2><label for="2_2_mb2">1.2 Tindakan Penambahbaikan:</label></h2>
            <textarea id="2_2_mb2" name="2_2_mb2" rows="4" cols="60" readonly>' . $mb_bidang[1][1] . '</textarea>
            <br>

            <h2><label for="2_3_mb3">1.3 Pelaksana:</label></h2>
            <textarea id="2_3_mb3" name="2_3_mb3" rows="4" cols="60" readonly>' . $mb_bidang[1][2] . '</textarea>
            <br>

            <h2><label for="2_4_mb4">1.4 Penghasilan:</label></h2>
            <textarea id="2_4_mb4" name="2_4_mb4" rows="4" cols="60" readonly>' . $mb_bidang[1][3] . '</textarea>
            <br>
            <h2><label for="2_5_mb5">1.5 Jangka Masa Pelaksanaan Penambahbaikan:</label></h2>
            <textarea id="2_5_mb5" name="2_5_mb5" rows="4" cols="60" readonly>' . $mb_bidang[1][4] . '</textarea>
            <br>
            <h2><label for="2_6_mb6">1.6 Ulasan Panel Penilai:</label></h2>
            <textarea id="2_6_mb6" name="2_6_mb6" rows="4" cols="60">' . $mb_bidang[1][5] . '</textarea>
            <br>
          </div>
';

          $hidden = "style=\"display: none\"";


          if ($lampiran_1_bidang[2][3] != "") {
            $hidden = "style=\"display: block\"";
          }
          echo ' <div class="promo_card1" ' . $hidden . '>
            <h1>Bidang 3: Pemilihan Pelajar dan Perkhidmatan Sokongan</h1>
            <h2><label for="3_1_mb1">1.1 Penemuan Panel Penilai:</label></h2>
            <textarea id="3_1_mb1" name="3_1_mb1" rows="4" cols="60" readonly>' . $lampiran_1_bidang[2][3] . '</textarea>
            <br>

            <h2><label for="3_2_mb2">1.2 Tindakan Penambahbaikan:</label></h2>
            <textarea id="3_2_mb2" name="3_2_mb2" rows="4" cols="60" readonly>' . $mb_bidang[2][1] . '</textarea>
            <br>

            <h2><label for="3_3_mb3">1.3 Pelaksana:</label></h2>
            <textarea id="3_3_mb3" name="3_3_mb3" rows="4" cols="60" readonly>' . $mb_bidang[2][2] . '</textarea>
            <br>

            <h2><label for="3_4_mb4">1.4 Penghasilan:</label></h2>
            <textarea id="3_4_mb4" name="3_4_mb4" rows="4" cols="60" readonly>' . $mb_bidang[2][3] . '</textarea>
            <br>
            <h2><label for="3_5_mb5">1.5 Jangka Masa Pelaksanaan Penambahbaikan:</label></h2>
            <textarea id="3_5_mb5" name="3_5_mb5" rows="4" cols="60" readonly>' . $mb_bidang[2][4] . '</textarea>
            <br>
            <h2><label for="3_6_mb6">1.6 Ulasan Panel Penilai:</label></h2>
            <textarea id="3_6_mb6" name="3_6_mb6" rows="4" cols="60">' . $mb_bidang[2][5] . '</textarea>
            <br>
          </div>

';


          if ($lampiran_1_bidang[3][3] != "")
            $hidden = "style=\"display: block\"";
          echo ' <div class="promo_card1" ' . $hidden . '>
            <h1>Bidang 4: Kakitangan Akademik</h1>
            <h2><label for="4_1_mb1">1.1 Penemuan Panel Penilai:</label></h2>
            <textarea id="4_1_mb1" name="4_1_mb1" rows="4" cols="60" readonly>' . $lampiran_1_bidang[3][3] . '</textarea>
            <br>

            <h2><label for="4_2_mb2">1.2 Tindakan Penambahbaikan:</label></h2>
            <textarea id="4_2_mb2" name="4_2_mb2" rows="4" cols="60" readonly>' . $mb_bidang[3][1] . '</textarea>
            <br>

            <h2><label for="4_3_mb3">1.3 Pelaksana:</label></h2>
            <textarea id="4_3_mb3" name="4_3_mb3" rows="4" cols="60" readonly>' . $mb_bidang[3][2] . '</textarea>
            <br>

            <h2><label for="4_4_mb4">1.4 Penghasilan:</label></h2>
            <textarea id="4_4_mb4" name="4_4_mb4" rows="4" cols="60" readonly>' . $mb_bidang[3][3] . '</textarea>
            <br>
            <h2><label for="4_5_mb5">1.5 Jangka Masa Pelaksanaan Penambahbaikan:</label></h2>
            <textarea id="4_5_mb5" name="4_5_mb5" rows="4" cols="60" readonly>' . $mb_bidang[3][4] . '</textarea>
            <br>
            <h2><label for="4_6_mb6">1.6 Ulasan Panel Penilai:</label></h2>
            <textarea id="4_6_mb6" name="4_6_mb6" rows="4" cols="60">' . $mb_bidang[3][5] . '</textarea>
            <br>
          </div>
';

          $hidden = "style=\"display: none\"";


          if ($lampiran_1_bidang[4][3] != "")
            $hidden = "style=\"display: block\"";
          echo ' <div class="promo_card1" ' . $hidden . '>
            <h1>Bidang 5: Sumber Pendidikan</h1>
            <h2><label for="5_1_mb1">1.1 Penemuan Panel Penilai:</label></h2>
            <textarea id="5_1_mb1" name="5_1_mb1" rows="4" cols="60" readonly>' . $lampiran_1_bidang[4][3] . '</textarea>
            <br>

            <h2><label for="5_2_mb2">1.2 Tindakan Penambahbaikan:</label></h2>
            <textarea id="5_2_mb2" name="5_2_mb2" rows="4" cols="60" readonly>' . $mb_bidang[4][1] . '</textarea>
            <br>

            <h2><label for="5_3_mb3">1.3 Pelaksana:</label></h2>
            <textarea id="5_3_mb3" name="5_3_mb3" rows="4" cols="60" readonly>' . $mb_bidang[4][2] . '</textarea>
            <br>

            <h2><label for="5_4_mb4">1.4 Penghasilan:</label></h2>
            <textarea id="5_4_mb4" name="5_4_mb4" rows="4" cols="60" readonly>' . $mb_bidang[4][3] . '</textarea>
            <br>
            <h2><label for="5_5_mb5">1.5 Jangka Masa Pelaksanaan Penambahbaikan:</label></h2>
            <textarea id="5_5_mb5" name="5_5_mb5" rows="4" cols="60" readonly>' . $mb_bidang[4][4] . '</textarea>
            <br>
            <h2><label for="5_6_mb6">1.6 Ulasan Panel Penilai:</label></h2>
            <textarea id="5_6_mb6" name="5_6_mb6" rows="4" cols="60">' . $mb_bidang[4][5] . '</textarea>
            <br>
          </div>

';


          if ($lampiran_1_bidang[5][3] != "")
            $hidden = "style=\"display: block\"";
          echo ' <div class="promo_card1" ' . $hidden . '>
            <h1>Bidang 6: Pengurusan Program</h1>
            <h2><label for="6_1_mb1">1.1 Penemuan Panel Penilai:</label></h2>
            <textarea id="6_1_mb1" name="6_1_mb1" rows="4" cols="60" readonly>' . $lampiran_1_bidang[5][3] . '</textarea>
            <br>

            <h2><label for="6_2_mb2">1.2 Tindakan Penambahbaikan:</label></h2>
            <textarea id="6_2_mb2" name="6_2_mb2" rows="4" cols="60" readonly>' . $mb_bidang[5][1] . '</textarea>
            <br>

            <h2><label for="6_3_mb3">1.3 Pelaksana:</label></h2>
            <textarea id="6_3_mb3" name="6_3_mb3" rows="4" cols="60" readonly>' . $mb_bidang[5][2] . '</textarea>
            <br>

            <h2><label for="6_4_mb4">1.4 Penghasilan:</label></h2>
            <textarea id="6_4_mb4" name="6_4_mb4" rows="4" cols="60" readonly>' . $mb_bidang[5][3] . '</textarea>
            <br>
            <h2><label for="6_5_mb5">1.5 Jangka Masa Pelaksanaan Penambahbaikan:</label></h2>
            <textarea id="6_5_mb5" name="6_5_mb5" rows="4" cols="60" readonly>' . $mb_bidang[5][4] . '</textarea>
            <br>
            <h2><label for="6_6_mb6">1.6 Ulasan Panel Penilai:</label></h2>
            <textarea id="6_6_mb6" name="6_6_mb6" rows="4" cols="60">' . $mb_bidang[5][5] . '</textarea>
            <br>
          </div>
';

          $hidden = "style=\"display: none\"";


          if ($lampiran_1_bidang[6][3] != "")
            $hidden = "style=\"display: block\"";
          echo '
            <div class="promo_card1" ' . $hidden . '>
            <h1>Bidang 7: Pemantauan, Semakan dan Penambahbaikan Kualiti Berterusan Program</h1>
            <h2><label for="7_1_mb1">1.1 Penemuan Panel Penilai:</label></h2>
            <textarea id="7_1_mb1" name="7_1_mb1" rows="4" cols="60" readonly>' . $lampiran_1_bidang[6][3] . '</textarea>
            <br>

            <h2><label for="7_2_mb2">1.2 Tindakan Penambahbaikan:</label></h2>
            <textarea id="7_2_mb2" name="7_2_mb2" rows="4" cols="60" readonly>' . $mb_bidang[6][1] . '</textarea>
            <br>

            <h2><label for="7_3_mb3">1.3 Pelaksana:</label></h2>
            <textarea id="7_3_mb3" name="7_3_mb3" rows="4" cols="60" readonly>' . $mb_bidang[6][2] . '</textarea>
            <br>

            <h2><label for="7_4_mb4">1.4 Penghasilan:</label></h2>
            <textarea id="7_4_mb4" name="7_4_mb4" rows="4" cols="60" readonly>' . $mb_bidang[6][3] . '</textarea>
            <br>
            <h2><label for="7_5_mb5">1.5 Jangka Masa Pelaksanaan Penambahbaikan:</label></h2>
            <textarea id="7_5_mb5" name="7_5_mb5" rows="4" cols="60" readonly>' . $mb_bidang[6][4] . '</textarea>
            <br>
            <h2><label for="7_6_mb6">1.6 Ulasan Panel Penilai:</label></h2>
            <textarea id="7_6_mb6" name="7_6_mb6" rows="4" cols="60">' . $mb_bidang[6][5] . '</textarea>
            <br>
          </div>
          ';
          if ($stuf == "F") {
            echo '<div class="field">
            <input type="submit" class="btn" id="submit" name="submit" value="Hantar" required>
          </div>';
          }

          ?>






    </div>
    </form>
    <button onclick="printLaporan()" style="margin: 10px 0 0 0px;padding: 10px 30px; background-color: #5d7851;"
      class="btn" id="submit" name="submit" value="Hantar">Cetak</button>
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
    // var coll = document.getElementsByClassName("collapsible");
    // var i;

    // for (i = 0; i < coll.length; i++) {
    //   coll[i].addEventListener("click", function () {
    //     this.classList.toggle("active");
    //     var content = this.nextElementSibling;
    //     if (content.style.display === "block") {
    //       content.style.display = "none";
    //     } else {
    //       content.style.display = "block";
    //     }
    //   });
    // }

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

    function printLaporan() {
      //     var printwin = window.open("");
      // printwin.document.write(document.getElementById("main-page").innerHTML);
      // allOpen();
      // printwin.stop();
      printOnlyLaporan();
      window.print();
      printRating();
      window.print();
      allClose();
    }

  </script>


  </div>
</body>

</html>