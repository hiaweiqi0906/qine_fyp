<?php

include("../php/db.php");
// session_start();
include('../components/app_protected_route.php');
$app_program_id = $_GET["id"];
$typel = $_GET["type"];$pid = $_GET["pid"];


include('../functions/search_all_laporan.php');

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
                      $score_1_2_3. ";" . $score_1_2_4 . ";" . $score_1_2_5 . ";" .
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
  $app_program_id = $_GET["id"];
  $typel = $_GET["type"];

  if (
     $stmt = $con->prepare("INSERT INTO laporan  VALUES
   ('101', 'PREPARING', '$today_date', '', '$app_program_id', '$lampiran_1', '$akredasi_penuh', '$typel')")
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


}

$lampiran_1 = $laporan_all_people[$typel][5];
$akredasi_penuh = $laporan_all_people[$typel][6];

$lampiran_1_arr = explode("<", $lampiran_1);
$akredasi_penuh_arr = explode("|", $akredasi_penuh);

$lampiran_1_bidang = array();
$akredasi_penuh_bidang = array();
for($jj=0; $jj<7; $jj++){
  array_push($lampiran_1_bidang, explode("~", $lampiran_1_arr[$jj]));
  array_push($akredasi_penuh_bidang, explode(";", $akredasi_penuh_arr[$jj]));
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
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
   <link rel="stylesheet" href="../style/stylearea.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="../style/stylepertanyaan.css">
   <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
   <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
</head>
<body>


   <?php
   include("../components/navbar_app.php");
   include("../components/sidebar_app.php");
   include("../components/pengumuman.php");

 ?>


     <div class="main-body">
      <h2>Penilaian Detail Program</h2>
      <div class="promo_card">
         <h1>Tajuk Program</h1>
         <span>Detail</span>
         <a href="../functions/generate_program.php?pid=<?php echo $pid;?>">Muat Turun</a>


      </div>

      <?php
        $lampiran_1 = $laporan_all_people[1][5];
        $akredasi_penuh = $laporan_all_people[1][6];
      ?>

      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]),"?id=$app_program_id&type=$typel"; ?>" method="post" autocomplete="off" class="sign-in-form">
        <div class="promo_card1">
          <h1>Bidang 1: Pembangunan & Penyampaian Program</h1>
          <h2><label for="1_1_ulasan">1.1 Ulasan:</label></h2>
          <textarea id="1_1_ulasan" name="1_1_ulasan" rows="4" cols="60"><?php if(! isset($lampiran_1_bidang) )echo ""; else echo $lampiran_1_bidang[0][0];?></textarea>
          <br>

          <h2><label for="1_2_pujian">1.2 Pujian (Commendation):</label></h2>
          <textarea id="1_2_pujian" name="1_2_pujian" rows="4" cols="60"><?php if(! isset($lampiran_1_bidang) )echo ""; else echo $lampiran_1_bidang[0][1];?></textarea>
          <br>

          <h2><label for="1_3_penegasan">1.3 Penegasan (Affirmation):</label></h2>
          <textarea id="1_3_penegasan" name="1_3_penegasan" rows="4" cols="60"><?php if(! isset($lampiran_1_bidang) )echo ""; else echo $lampiran_1_bidang[0][2];?></textarea>
          <br>

          <h2><label for="1_4_syor">1.4	Syor (Recommendation):</label></h2>
          <textarea id="1_4_syor" name="1_4_syor" rows="4" cols="60"><?php if(! isset($lampiran_1_bidang) )echo ""; else echo $lampiran_1_bidang[0][3];?></textarea>
          <br>
        </div>

        <div class="promo_card1">
                <h1>Bidang 2: Penilaian Pembelajaran Pelajar</h1>
                <h2><label for="2_1_ulasan">1.1 Ulasan:</label></h2>
                <textarea id="2_1_ulasan" name="2_1_ulasan" rows="4" cols="60"><?php if(! isset($lampiran_1_bidang) )echo ""; else echo $lampiran_1_bidang[1][0];?></textarea>
                <br>

                <h2><label for="2_2_pujian">1.2 Pujian (Commendation):</label></h2>
                <textarea id="2_2_pujian" name="2_2_pujian" rows="4" cols="60"><?php if(! isset($lampiran_1_bidang) )echo ""; else echo $lampiran_1_bidang[1][1];?></textarea>
                <br>

                <h2><label for="2_3_penegasan">1.3 Penegasan (Affirmation):</label></h2>
                <textarea id="2_3_penegasan" name="2_3_penegasan" rows="4" cols="60"><?php if(! isset($lampiran_1_bidang) )echo ""; else echo $lampiran_1_bidang[1][2];?></textarea>
                <br>

                <h2><label for="2_4_syor">1.4	Syor (Recommendation):</label></h2>
                <textarea id="2_4_syor" name="2_4_syor" rows="4" cols="60"><?php if(! isset($lampiran_1_bidang) )echo ""; else echo $lampiran_1_bidang[1][3];?></textarea>
                <br>
        </div>

        <div class="promo_card1">
                <h1>Bidang 3: Pemilihan Pelajar dan Perkhidmatan Sokongan  </h1>
                <h2><label for="3_1_ulasan">1.1 Ulasan:</label></h2>
                <textarea id="3_1_ulasan" name="3_1_ulasan" rows="4" cols="60"><?php if(! isset($lampiran_1_bidang) )echo ""; else echo $lampiran_1_bidang[2][0];?></textarea>
                <br>

                <h2><label for="3_2_pujian">1.2 Pujian (Commendation):</label></h2>
                <textarea id="3_2_pujian" name="3_2_pujian" rows="4" cols="60"><?php if(! isset($lampiran_1_bidang) )echo ""; else echo $lampiran_1_bidang[2][1];?></textarea>
                <br>

                <h2><label for="3_3_penegasan">1.3 Penegasan (Affirmation):</label></h2>
                <textarea id="3_3_penegasan" name="3_3_penegasan" rows="4" cols="60"><?php if(! isset($lampiran_1_bidang) )echo ""; else echo $lampiran_1_bidang[2][2];?></textarea>
                <br>

                <h2><label for="3_4_syor">1.4	Syor (Recommendation):</label></h2>
                <textarea id="3_4_syor" name="3_4_syor" rows="4" cols="60"><?php if(! isset($lampiran_1_bidang) )echo ""; else echo $lampiran_1_bidang[2][3];?></textarea>
                <br>
        </div>

        <div class="promo_card1">
                <h1>Bidang 4: Kakitangan Akademik</h1>
                <h2><label for="4_1_ulasan">1.1 Ulasan:</label></h2>
                <textarea id="4_1_ulasan" name="4_1_ulasan" rows="4" cols="60"><?php if(! isset($lampiran_1_bidang) )echo ""; else echo $lampiran_1_bidang[3][0];?></textarea>
                <br>

                <h2><label for="4_2_pujian">1.2 Pujian (Commendation):</label></h2>
                <textarea id="4_2_pujian" name="4_2_pujian" rows="4" cols="60"><?php if(! isset($lampiran_1_bidang) )echo ""; else echo $lampiran_1_bidang[3][1];?></textarea>
                <br>

                <h2><label for="4_3_penegasan">1.3 Penegasan (Affirmation):</label></h2>
                <textarea id="4_3_penegasan" name="4_3_penegasan" rows="4" cols="60"><?php if(! isset($lampiran_1_bidang) )echo ""; else echo $lampiran_1_bidang[3][2];?></textarea>
                <br>

                <h2><label for="4_4_syor">1.4	Syor (Recommendation):</label></h2>
                <textarea id="4_4_syor" name="4_4_syor" rows="4" cols="60"><?php if(! isset($lampiran_1_bidang) )echo ""; else echo $lampiran_1_bidang[3][3];?></textarea>
                <br>
        </div>

        <div class="promo_card1">
                <h1>Bidang 5: Sumber Pendidikan</h1>
                <h2><label for="5_1_ulasan">1.1 Ulasan:</label></h2>
                <textarea id="5_1_ulasan" name="5_1_ulasan" rows="4" cols="60"><?php if(! isset($lampiran_1_bidang) )echo ""; else echo $lampiran_1_bidang[4][0];?></textarea>
                <br>

                <h2><label for="5_2_pujian">1.2 Pujian (Commendation):</label></h2>
                <textarea id="5_2_pujian" name="5_2_pujian" rows="4" cols="60"><?php if(! isset($lampiran_1_bidang) )echo ""; else echo $lampiran_1_bidang[4][1];?></textarea>
                <br>

                <h2><label for="5_3_penegasan">1.3 Penegasan (Affirmation):</label></h2>
                <textarea id="5_3_penegasan" name="5_3_penegasan" rows="4" cols="60"><?php if(! isset($lampiran_1_bidang) )echo ""; else echo $lampiran_1_bidang[4][2];?></textarea>
                <br>

                <h2><label for="5_4_syor">1.4	Syor (Recommendation):</label></h2>
                <textarea id="5_4_syor" name="5_4_syor" rows="4" cols="60"><?php if(! isset($lampiran_1_bidang) )echo ""; else echo $lampiran_1_bidang[4][3];?></textarea>
                <br>
        </div>

        <div class="promo_card1">
                <h1>Bidang 6: Pengurusan Program</h1>
                <h2><label for="6_1_ulasan">1.1 Ulasan:</label></h2>
                <textarea id="6_1_ulasan" name="6_1_ulasan" rows="4" cols="60"><?php if(! isset($lampiran_1_bidang) )echo ""; else echo $lampiran_1_bidang[5][0];?></textarea>
                <br>

                <h2><label for="6_2_pujian">1.2 Pujian (Commendation):</label></h2>
                <textarea id="6_2_pujian" name="6_2_pujian" rows="4" cols="60"><?php if(! isset($lampiran_1_bidang) )echo ""; else echo $lampiran_1_bidang[5][1];?></textarea>
                <br>

                <h2><label for="6_3_penegasan">1.3 Penegasan (Affirmation):</label></h2>
                <textarea id="6_3_penegasan" name="6_3_penegasan" rows="4" cols="60"><?php if(! isset($lampiran_1_bidang) )echo ""; else echo $lampiran_1_bidang[5][2];?></textarea>
                <br>

                <h2><label for="6_4_syor">1.4	Syor (Recommendation):</label></h2>
                <textarea id="6_4_syor" name="6_4_syor" rows="4" cols="60"><?php if(! isset($lampiran_1_bidang) )echo ""; else echo $lampiran_1_bidang[5][3];?></textarea>
                <br>
        </div>

        <div class="promo_card1">
                <h1>Bidang 7: Pemantauan, Semakan dan Penambahbaikan Kualiti Berterusan Program </h1>
                <h2><label for="7_1_ulasan">1.1 Ulasan:</label></h2>
                <textarea id="7_1_ulasan" name="7_1_ulasan" rows="4" cols="60"><?php if(! isset($lampiran_1_bidang) )echo ""; else echo $lampiran_1_bidang[6][0];?></textarea>
                <br>

                <h2><label for="7_2_pujian">1.2 Pujian (Commendation):</label></h2>
                <textarea id="7_2_pujian" name="7_2_pujian" rows="4" cols="60"><?php if(! isset($lampiran_1_bidang) )echo ""; else echo $lampiran_1_bidang[6][1];?></textarea>
                <br>

                <h2><label for="7_3_penegasan">1.3 Penegasan (Affirmation):</label></h2>
                <textarea id="7_3_penegasan" name="7_3_penegasan" rows="4" cols="60"><?php if(! isset($lampiran_1_bidang) )echo ""; else echo $lampiran_1_bidang[6][2];?></textarea>
                <br>

                <h2><label for="7_4_syor">1.4	Syor (Recommendation):</label></h2>
                <textarea id="7_4_syor" name="7_4_syor" rows="4" cols="60"><?php if(! isset($lampiran_1_bidang) )echo ""; else echo $lampiran_1_bidang[6][3];?></textarea>
                <br>
        </div>
        <div class="promo_card1">
                <h1>Penilaian Program</h1>
                <?php
                  include('./area1.php');
                  include('./area2.php');
                  include('./area3.php');
                  include('./area4.php');
                  include('./area5.php');
                  include('./area6.php');
                  include('./area7.php');
                ?>
              </div>
        <div class="field">
          <!-- <input type="submit" class="btn" id="submit" name="submit" value="Hantar" required> -->
        </div>
      </form>

      <?php
        $lampiran_1 = $laporan_all_people[2][5];
        $akredasi_penuh = $laporan_all_people[2][6];
      ?>

      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]),"?id=$app_program_id&type=$typel"; ?>" method="post" autocomplete="off" class="sign-in-form">
        <div class="promo_card1">
          <h1>Bidang 1: Pembangunan & Penyampaian Program</h1>
          <h2><label for="1_1_ulasan">1.1 Ulasan:</label></h2>
          <textarea id="1_1_ulasan" name="1_1_ulasan" rows="4" cols="60"><?php if(! isset($lampiran_1_bidang) )echo ""; else echo $lampiran_1_bidang[0][0];?></textarea>
          <br>

          <h2><label for="1_2_pujian">1.2 Pujian (Commendation):</label></h2>
          <textarea id="1_2_pujian" name="1_2_pujian" rows="4" cols="60"><?php if(! isset($lampiran_1_bidang) )echo ""; else echo $lampiran_1_bidang[0][1];?></textarea>
          <br>

          <h2><label for="1_3_penegasan">1.3 Penegasan (Affirmation):</label></h2>
          <textarea id="1_3_penegasan" name="1_3_penegasan" rows="4" cols="60"><?php if(! isset($lampiran_1_bidang) )echo ""; else echo $lampiran_1_bidang[0][2];?></textarea>
          <br>

          <h2><label for="1_4_syor">1.4	Syor (Recommendation):</label></h2>
          <textarea id="1_4_syor" name="1_4_syor" rows="4" cols="60"><?php if(! isset($lampiran_1_bidang) )echo ""; else echo $lampiran_1_bidang[0][3];?></textarea>
          <br>
        </div>

        <div class="promo_card1">
                <h1>Bidang 2: Penilaian Pembelajaran Pelajar</h1>
                <h2><label for="2_1_ulasan">1.1 Ulasan:</label></h2>
                <textarea id="2_1_ulasan" name="2_1_ulasan" rows="4" cols="60"><?php if(! isset($lampiran_1_bidang) )echo ""; else echo $lampiran_1_bidang[1][0];?></textarea>
                <br>

                <h2><label for="2_2_pujian">1.2 Pujian (Commendation):</label></h2>
                <textarea id="2_2_pujian" name="2_2_pujian" rows="4" cols="60"><?php if(! isset($lampiran_1_bidang) )echo ""; else echo $lampiran_1_bidang[1][1];?></textarea>
                <br>

                <h2><label for="2_3_penegasan">1.3 Penegasan (Affirmation):</label></h2>
                <textarea id="2_3_penegasan" name="2_3_penegasan" rows="4" cols="60"><?php if(! isset($lampiran_1_bidang) )echo ""; else echo $lampiran_1_bidang[1][2];?></textarea>
                <br>

                <h2><label for="2_4_syor">1.4	Syor (Recommendation):</label></h2>
                <textarea id="2_4_syor" name="2_4_syor" rows="4" cols="60"><?php if(! isset($lampiran_1_bidang) )echo ""; else echo $lampiran_1_bidang[1][3];?></textarea>
                <br>
        </div>

        <div class="promo_card1">
                <h1>Bidang 3: Pemilihan Pelajar dan Perkhidmatan Sokongan  </h1>
                <h2><label for="3_1_ulasan">1.1 Ulasan:</label></h2>
                <textarea id="3_1_ulasan" name="3_1_ulasan" rows="4" cols="60"><?php if(! isset($lampiran_1_bidang) )echo ""; else echo $lampiran_1_bidang[2][0];?></textarea>
                <br>

                <h2><label for="3_2_pujian">1.2 Pujian (Commendation):</label></h2>
                <textarea id="3_2_pujian" name="3_2_pujian" rows="4" cols="60"><?php if(! isset($lampiran_1_bidang) )echo ""; else echo $lampiran_1_bidang[2][1];?></textarea>
                <br>

                <h2><label for="3_3_penegasan">1.3 Penegasan (Affirmation):</label></h2>
                <textarea id="3_3_penegasan" name="3_3_penegasan" rows="4" cols="60"><?php if(! isset($lampiran_1_bidang) )echo ""; else echo $lampiran_1_bidang[2][2];?></textarea>
                <br>

                <h2><label for="3_4_syor">1.4	Syor (Recommendation):</label></h2>
                <textarea id="3_4_syor" name="3_4_syor" rows="4" cols="60"><?php if(! isset($lampiran_1_bidang) )echo ""; else echo $lampiran_1_bidang[2][3];?></textarea>
                <br>
        </div>

        <div class="promo_card1">
                <h1>Bidang 4: Kakitangan Akademik</h1>
                <h2><label for="4_1_ulasan">1.1 Ulasan:</label></h2>
                <textarea id="4_1_ulasan" name="4_1_ulasan" rows="4" cols="60"><?php if(! isset($lampiran_1_bidang) )echo ""; else echo $lampiran_1_bidang[3][0];?></textarea>
                <br>

                <h2><label for="4_2_pujian">1.2 Pujian (Commendation):</label></h2>
                <textarea id="4_2_pujian" name="4_2_pujian" rows="4" cols="60"><?php if(! isset($lampiran_1_bidang) )echo ""; else echo $lampiran_1_bidang[3][1];?></textarea>
                <br>

                <h2><label for="4_3_penegasan">1.3 Penegasan (Affirmation):</label></h2>
                <textarea id="4_3_penegasan" name="4_3_penegasan" rows="4" cols="60"><?php if(! isset($lampiran_1_bidang) )echo ""; else echo $lampiran_1_bidang[3][2];?></textarea>
                <br>

                <h2><label for="4_4_syor">1.4	Syor (Recommendation):</label></h2>
                <textarea id="4_4_syor" name="4_4_syor" rows="4" cols="60"><?php if(! isset($lampiran_1_bidang) )echo ""; else echo $lampiran_1_bidang[3][3];?></textarea>
                <br>
        </div>

        <div class="promo_card1">
                <h1>Bidang 5: Sumber Pendidikan</h1>
                <h2><label for="5_1_ulasan">1.1 Ulasan:</label></h2>
                <textarea id="5_1_ulasan" name="5_1_ulasan" rows="4" cols="60"><?php if(! isset($lampiran_1_bidang) )echo ""; else echo $lampiran_1_bidang[4][0];?></textarea>
                <br>

                <h2><label for="5_2_pujian">1.2 Pujian (Commendation):</label></h2>
                <textarea id="5_2_pujian" name="5_2_pujian" rows="4" cols="60"><?php if(! isset($lampiran_1_bidang) )echo ""; else echo $lampiran_1_bidang[4][1];?></textarea>
                <br>

                <h2><label for="5_3_penegasan">1.3 Penegasan (Affirmation):</label></h2>
                <textarea id="5_3_penegasan" name="5_3_penegasan" rows="4" cols="60"><?php if(! isset($lampiran_1_bidang) )echo ""; else echo $lampiran_1_bidang[4][2];?></textarea>
                <br>

                <h2><label for="5_4_syor">1.4	Syor (Recommendation):</label></h2>
                <textarea id="5_4_syor" name="5_4_syor" rows="4" cols="60"><?php if(! isset($lampiran_1_bidang) )echo ""; else echo $lampiran_1_bidang[4][3];?></textarea>
                <br>
        </div>

        <div class="promo_card1">
                <h1>Bidang 6: Pengurusan Program</h1>
                <h2><label for="6_1_ulasan">1.1 Ulasan:</label></h2>
                <textarea id="6_1_ulasan" name="6_1_ulasan" rows="4" cols="60"><?php if(! isset($lampiran_1_bidang) )echo ""; else echo $lampiran_1_bidang[5][0];?></textarea>
                <br>

                <h2><label for="6_2_pujian">1.2 Pujian (Commendation):</label></h2>
                <textarea id="6_2_pujian" name="6_2_pujian" rows="4" cols="60"><?php if(! isset($lampiran_1_bidang) )echo ""; else echo $lampiran_1_bidang[5][1];?></textarea>
                <br>

                <h2><label for="6_3_penegasan">1.3 Penegasan (Affirmation):</label></h2>
                <textarea id="6_3_penegasan" name="6_3_penegasan" rows="4" cols="60"><?php if(! isset($lampiran_1_bidang) )echo ""; else echo $lampiran_1_bidang[5][2];?></textarea>
                <br>

                <h2><label for="6_4_syor">1.4	Syor (Recommendation):</label></h2>
                <textarea id="6_4_syor" name="6_4_syor" rows="4" cols="60"><?php if(! isset($lampiran_1_bidang) )echo ""; else echo $lampiran_1_bidang[5][3];?></textarea>
                <br>
        </div>

        <div class="promo_card1">
                <h1>Bidang 7: Pemantauan, Semakan dan Penambahbaikan Kualiti Berterusan Program </h1>
                <h2><label for="7_1_ulasan">1.1 Ulasan:</label></h2>
                <textarea id="7_1_ulasan" name="7_1_ulasan" rows="4" cols="60"><?php if(! isset($lampiran_1_bidang) )echo ""; else echo $lampiran_1_bidang[6][0];?></textarea>
                <br>

                <h2><label for="7_2_pujian">1.2 Pujian (Commendation):</label></h2>
                <textarea id="7_2_pujian" name="7_2_pujian" rows="4" cols="60"><?php if(! isset($lampiran_1_bidang) )echo ""; else echo $lampiran_1_bidang[6][1];?></textarea>
                <br>

                <h2><label for="7_3_penegasan">1.3 Penegasan (Affirmation):</label></h2>
                <textarea id="7_3_penegasan" name="7_3_penegasan" rows="4" cols="60"><?php if(! isset($lampiran_1_bidang) )echo ""; else echo $lampiran_1_bidang[6][2];?></textarea>
                <br>

                <h2><label for="7_4_syor">1.4	Syor (Recommendation):</label></h2>
                <textarea id="7_4_syor" name="7_4_syor" rows="4" cols="60"><?php if(! isset($lampiran_1_bidang) )echo ""; else echo $lampiran_1_bidang[6][3];?></textarea>
                <br>
        </div>
        <div class="promo_card1">
                <h1>Penilaian Program</h1>
                <?php
                  include('./area1.php');
                  include('./area2.php');
                  include('./area3.php');
                  include('./area4.php');
                  include('./area5.php');
                  include('./area6.php');
                  include('./area7.php');
                ?>
              </div>
        <div class="field">
          <!-- <input type="submit" class="btn" id="submit" name="submit" value="Hantar" required> -->
        </div>
      </form>

      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]),"?id=$app_program_id&type=0"; ?>" method="post" autocomplete="off" class="sign-in-form">
        <div class="promo_card1">
          <h1>Bidang 1: Pembangunan & Penyampaian Program</h1>
          <h2><label for="1_1_ulasan">1.1 Ulasan:</label></h2>
          <textarea id="1_1_ulasan" name="1_1_ulasan" rows="4" cols="60"><?php if(! isset($lampiran_1_bidang) )echo ""; else echo $lampiran_1_bidang[0][0];?></textarea>
          <br>

          <h2><label for="1_2_pujian">1.2 Pujian (Commendation):</label></h2>
          <textarea id="1_2_pujian" name="1_2_pujian" rows="4" cols="60"><?php if(! isset($lampiran_1_bidang) )echo ""; else echo $lampiran_1_bidang[0][1];?></textarea>
          <br>

          <h2><label for="1_3_penegasan">1.3 Penegasan (Affirmation):</label></h2>
          <textarea id="1_3_penegasan" name="1_3_penegasan" rows="4" cols="60"><?php if(! isset($lampiran_1_bidang) )echo ""; else echo $lampiran_1_bidang[0][2];?></textarea>
          <br>

          <h2><label for="1_4_syor">1.4	Syor (Recommendation):</label></h2>
          <textarea id="1_4_syor" name="1_4_syor" rows="4" cols="60"><?php if(! isset($lampiran_1_bidang) )echo ""; else echo $lampiran_1_bidang[0][3];?></textarea>
          <br>
        </div>

        <div class="promo_card1">
                <h1>Bidang 2: Penilaian Pembelajaran Pelajar</h1>
                <h2><label for="2_1_ulasan">1.1 Ulasan:</label></h2>
                <textarea id="2_1_ulasan" name="2_1_ulasan" rows="4" cols="60"><?php if(! isset($lampiran_1_bidang) )echo ""; else echo $lampiran_1_bidang[1][0];?></textarea>
                <br>

                <h2><label for="2_2_pujian">1.2 Pujian (Commendation):</label></h2>
                <textarea id="2_2_pujian" name="2_2_pujian" rows="4" cols="60"><?php if(! isset($lampiran_1_bidang) )echo ""; else echo $lampiran_1_bidang[1][1];?></textarea>
                <br>

                <h2><label for="2_3_penegasan">1.3 Penegasan (Affirmation):</label></h2>
                <textarea id="2_3_penegasan" name="2_3_penegasan" rows="4" cols="60"><?php if(! isset($lampiran_1_bidang) )echo ""; else echo $lampiran_1_bidang[1][2];?></textarea>
                <br>

                <h2><label for="2_4_syor">1.4	Syor (Recommendation):</label></h2>
                <textarea id="2_4_syor" name="2_4_syor" rows="4" cols="60"><?php if(! isset($lampiran_1_bidang) )echo ""; else echo $lampiran_1_bidang[1][3];?></textarea>
                <br>
        </div>

        <div class="promo_card1">
                <h1>Bidang 3: Pemilihan Pelajar dan Perkhidmatan Sokongan  </h1>
                <h2><label for="3_1_ulasan">1.1 Ulasan:</label></h2>
                <textarea id="3_1_ulasan" name="3_1_ulasan" rows="4" cols="60"><?php if(! isset($lampiran_1_bidang) )echo ""; else echo $lampiran_1_bidang[2][0];?></textarea>
                <br>

                <h2><label for="3_2_pujian">1.2 Pujian (Commendation):</label></h2>
                <textarea id="3_2_pujian" name="3_2_pujian" rows="4" cols="60"><?php if(! isset($lampiran_1_bidang) )echo ""; else echo $lampiran_1_bidang[2][1];?></textarea>
                <br>

                <h2><label for="3_3_penegasan">1.3 Penegasan (Affirmation):</label></h2>
                <textarea id="3_3_penegasan" name="3_3_penegasan" rows="4" cols="60"><?php if(! isset($lampiran_1_bidang) )echo ""; else echo $lampiran_1_bidang[2][2];?></textarea>
                <br>

                <h2><label for="3_4_syor">1.4	Syor (Recommendation):</label></h2>
                <textarea id="3_4_syor" name="3_4_syor" rows="4" cols="60"><?php if(! isset($lampiran_1_bidang) )echo ""; else echo $lampiran_1_bidang[2][3];?></textarea>
                <br>
        </div>

        <div class="promo_card1">
                <h1>Bidang 4: Kakitangan Akademik</h1>
                <h2><label for="4_1_ulasan">1.1 Ulasan:</label></h2>
                <textarea id="4_1_ulasan" name="4_1_ulasan" rows="4" cols="60"><?php if(! isset($lampiran_1_bidang) )echo ""; else echo $lampiran_1_bidang[3][0];?></textarea>
                <br>

                <h2><label for="4_2_pujian">1.2 Pujian (Commendation):</label></h2>
                <textarea id="4_2_pujian" name="4_2_pujian" rows="4" cols="60"><?php if(! isset($lampiran_1_bidang) )echo ""; else echo $lampiran_1_bidang[3][1];?></textarea>
                <br>

                <h2><label for="4_3_penegasan">1.3 Penegasan (Affirmation):</label></h2>
                <textarea id="4_3_penegasan" name="4_3_penegasan" rows="4" cols="60"><?php if(! isset($lampiran_1_bidang) )echo ""; else echo $lampiran_1_bidang[3][2];?></textarea>
                <br>

                <h2><label for="4_4_syor">1.4	Syor (Recommendation):</label></h2>
                <textarea id="4_4_syor" name="4_4_syor" rows="4" cols="60"><?php if(! isset($lampiran_1_bidang) )echo ""; else echo $lampiran_1_bidang[3][3];?></textarea>
                <br>
        </div>

        <div class="promo_card1">
                <h1>Bidang 5: Sumber Pendidikan</h1>
                <h2><label for="5_1_ulasan">1.1 Ulasan:</label></h2>
                <textarea id="5_1_ulasan" name="5_1_ulasan" rows="4" cols="60"><?php if(! isset($lampiran_1_bidang) )echo ""; else echo $lampiran_1_bidang[4][0];?></textarea>
                <br>

                <h2><label for="5_2_pujian">1.2 Pujian (Commendation):</label></h2>
                <textarea id="5_2_pujian" name="5_2_pujian" rows="4" cols="60"><?php if(! isset($lampiran_1_bidang) )echo ""; else echo $lampiran_1_bidang[4][1];?></textarea>
                <br>

                <h2><label for="5_3_penegasan">1.3 Penegasan (Affirmation):</label></h2>
                <textarea id="5_3_penegasan" name="5_3_penegasan" rows="4" cols="60"><?php if(! isset($lampiran_1_bidang) )echo ""; else echo $lampiran_1_bidang[4][2];?></textarea>
                <br>

                <h2><label for="5_4_syor">1.4	Syor (Recommendation):</label></h2>
                <textarea id="5_4_syor" name="5_4_syor" rows="4" cols="60"><?php if(! isset($lampiran_1_bidang) )echo ""; else echo $lampiran_1_bidang[4][3];?></textarea>
                <br>
        </div>

        <div class="promo_card1">
                <h1>Bidang 6: Pengurusan Program</h1>
                <h2><label for="6_1_ulasan">1.1 Ulasan:</label></h2>
                <textarea id="6_1_ulasan" name="6_1_ulasan" rows="4" cols="60"><?php if(! isset($lampiran_1_bidang) )echo ""; else echo $lampiran_1_bidang[5][0];?></textarea>
                <br>

                <h2><label for="6_2_pujian">1.2 Pujian (Commendation):</label></h2>
                <textarea id="6_2_pujian" name="6_2_pujian" rows="4" cols="60"><?php if(! isset($lampiran_1_bidang) )echo ""; else echo $lampiran_1_bidang[5][1];?></textarea>
                <br>

                <h2><label for="6_3_penegasan">1.3 Penegasan (Affirmation):</label></h2>
                <textarea id="6_3_penegasan" name="6_3_penegasan" rows="4" cols="60"><?php if(! isset($lampiran_1_bidang) )echo ""; else echo $lampiran_1_bidang[5][2];?></textarea>
                <br>

                <h2><label for="6_4_syor">1.4	Syor (Recommendation):</label></h2>
                <textarea id="6_4_syor" name="6_4_syor" rows="4" cols="60"><?php if(! isset($lampiran_1_bidang) )echo ""; else echo $lampiran_1_bidang[5][3];?></textarea>
                <br>
        </div>

        <div class="promo_card1">
                <h1>Bidang 7: Pemantauan, Semakan dan Penambahbaikan Kualiti Berterusan Program </h1>
                <h2><label for="7_1_ulasan">1.1 Ulasan:</label></h2>
                <textarea id="7_1_ulasan" name="7_1_ulasan" rows="4" cols="60"><?php if(! isset($lampiran_1_bidang) )echo ""; else echo $lampiran_1_bidang[6][0];?></textarea>
                <br>

                <h2><label for="7_2_pujian">1.2 Pujian (Commendation):</label></h2>
                <textarea id="7_2_pujian" name="7_2_pujian" rows="4" cols="60"><?php if(! isset($lampiran_1_bidang) )echo ""; else echo $lampiran_1_bidang[6][1];?></textarea>
                <br>

                <h2><label for="7_3_penegasan">1.3 Penegasan (Affirmation):</label></h2>
                <textarea id="7_3_penegasan" name="7_3_penegasan" rows="4" cols="60"><?php if(! isset($lampiran_1_bidang) )echo ""; else echo $lampiran_1_bidang[6][2];?></textarea>
                <br>

                <h2><label for="7_4_syor">1.4	Syor (Recommendation):</label></h2>
                <textarea id="7_4_syor" name="7_4_syor" rows="4" cols="60"><?php if(! isset($lampiran_1_bidang) )echo ""; else echo $lampiran_1_bidang[6][3];?></textarea>
                <br>
        </div>
        <div class="promo_card1">
                <h1>Penilaian Program</h1>
                <?php
                  include('./area1.php');
                  include('./area2.php');
                  include('./area3.php');
                  include('./area4.php');
                  include('./area5.php');
                  include('./area6.php');
                  include('./area7.php');
                ?>
              </div>
        <div class="field">
          <input type="submit" class="btn" id="submit" name="submit" value="Hantar" required>
        </div>
      </form>
    </div>
    
    <?php
          include("../components/footer.php");
        ?>

	  <script src="../js/script.js"></script>
    <script>
      var coll = document.getElementsByClassName("collapsible");
      var i;

      for (i = 0; i < coll.length; i..) {
        coll[i].addEventListener("click", function() {
          this.classList.toggle("active");
          var content = this.nextElementSibling;
          if (content.style.maxHeight){
            content.style.maxHeight = null;
          } else {
            content.style.maxHeight = content.scrollHeight . "px";
          }
        });
      }
    </script>

</body>
</html>