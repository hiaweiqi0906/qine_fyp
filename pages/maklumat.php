<?php
// Include config file
require_once "../php/db.php";

// Initialize the session
// session_start();
include('../components/lecturer_protected_route.php');
$results = array();

// Define variables and initialize with empty values
$email = $password = $types = "";
$email_err = $password_err = $login_err = "";

$id = $_SESSION["id"];

// Processing form data when form is submitted
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Maklumat</title>

  <!-- font awesome cdn link  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

  <!-- custom css file link  -->
  <link rel="stylesheet" href="../style/stylepertanyaan.css">
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
</head>

<body>

  <?php
  include("../components/navbar_lecturer.php");
  include("../components/sidebar_lecturer.php");
  include("../components/pengumuman.php");
  ?>

  <div class="main-body">

    <img src="../img/Selamat Datang.png" class="promo_card">

    <div class="title-size">
      <h2>Maklumat</h2>
    </div>

    <div class="promo_card1">
      <table class="table">
        <tr>
          <th>Bil.</th>
          <th>Tarikh Permohonan</th>
          <th>Masa</th>
          <th>Status</th>
        </tr>
        <tr>
          <td>1</td>

      <?php if ($stmt = $con->prepare("SELECT `APPLICATION_ID`, `TARIKH`, `MASA`, `STATUS`, `LECTURER_ID`, `KELAYAKAN_AKADEMIK`, `PENGALAMAN`, `PENGANUGERAHAN` FROM `appapplication` WHERE LECTURER_ID = '$id' ")) {

        $stmt->execute();
        mysqli_stmt_bind_result($stmt, $application_id, $tarikh, $masa, $status, $lecturer_id, $kelayakan_akademik, $pengalaman, $penganugerahan);

        // }   /* fetch values */
        while (mysqli_stmt_fetch($stmt)) {
          array_push($results, array($application_id, $tarikh, $masa, $status, $lecturer_id, $kelayakan_akademik, $pengalaman, $penganugerahan));
        }


        if (count($results) == 1) {
          echo "<td>".$results[0][1]."</td>"."<td>".$results[0][2]."</td>";
          if ($results[0][3] == "PROCESSING")
            echo "<td>Permohonan anda sedang diproseskan. </td>";
          else if ($results[0][3] == "ACCEPT")
          echo "<td>Permohonan anda telah diterima. </td>";
          else
          echo "<td>Permohonan anda telah ditolak. </td>";
        } else {
          echo "<td>-</td><td>-</td><td>Tiada permohonan. </td>";
        }
      } else {
        // Something is wrong with the SQL statement, so you must check to make sure your accounts table exists with all 3 fields.
        echo 'Could not prepare statement!';
      } ?>
      </tr>
      </table>

    </div>

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

</body>

</html>