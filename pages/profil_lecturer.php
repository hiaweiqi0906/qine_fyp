<?php

// Initialize the session
// session_start();
include('../components/lecturer_protected_route.php');
include('../functions/php_upload_cloudinary.php');

// Include config file
require_once "../php/db.php";

// Define variables and initialize with empty values
$email = $password = $types = "";
$email_err = $password_err = $login_err = "";
$user = array();

$id = $_SESSION["id"];



if (isset($_POST['submit'])) {
  if (file_exists($_FILES['profil-img']['tmp_name']) || is_uploaded_file($_FILES['profil-img']['tmp_name'])) {

    // $cloudinary->image('olympic_flag')->resize(Resize::fill(100, 150))->toUrl();
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["profil-img"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image

    $check = getimagesize($_FILES["profil-img"]["tmp_name"]);
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
    if ($_FILES["profil-img"]["size"] > 500000) {
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
      // if (move_uploaded_file($_FILES["profil-img"]["tmp_name"], $target_file)) {
      //   echo "The file ". htmlspecialchars( basename( $_FILES["profil-img"]["name"])). " has been uploaded.";
      // } else {
      //   echo "Sorry, there was an error uploading your file.";
      // }
      $resp = $cloudinary->uploadApi()->upload(
        $_FILES["profil-img"]["tmp_name"]
      );
      $url_avatar = $resp->offsetGet('secure_url');
    }
  }

  $gelaran = $_POST["gelaran"];
  $nama = $_POST["nama"];
  $no_kad_pengenalan = $_POST["no-kad-pengenalan"];
  $alamat_tempat_bekerja = $_POST["alamat-tempat-bekerja"];
  $poskod = $_POST["poskod"];
  $daerah = $_POST["daerah"];
  $fakulti = $_POST["fakulti"];
  $bidang = $_POST["bidang"];
  $negeri = $_POST["negeri"];
  $universiti = $_POST["universiti"];
  $no_tel_pejabat = $_POST["no-tel-pejabat"];
  $no_tel_bimbit = $_POST["no-tel-bimbit"];
  $kelayakan_akademik = $_POST["kelayakan-akademik"];
  $pengalaman = $_POST["pengalaman"];
  $penganugerahan = $_POST["penganugerahan"];

  date_default_timezone_set("Asia/Kuala_Lumpur");
  $today_date = date("Y-m-d");
  $now_time = date("h:i:sa");

  if (file_exists($_FILES['profil-img']['tmp_name']) || is_uploaded_file($_FILES['profil-img']['tmp_name'])) {
    $stmt1 = "UPDATE lecturer SET `UNIVERSITI` = '$universiti', KELAYAKAN_AKADEMIK = '$kelayakan_akademik', PENGALAMAN = '$pengalaman', PENGANUGERAHAN = '$penganugerahan', `FAKULTI` = '$fakulti', `BIDANG` = '$bidang', `NO_KP` = '$no_kad_pengenalan', `GELARAN` = '$gelaran', `NAMA` = '$nama', `URL_AVATAR` = '$url_avatar',  `ALAMAT` = '$alamat_tempat_bekerja', `POSKOD` = '$poskod', `DAERAH` = '$daerah', `NEGERI` = '$negeri', `NO_TELEFON` = '$no_tel_bimbit', `NO_TELEFON_PEJABAT` = '$no_tel_pejabat' WHERE `LECTURER_ID` = '$id'";
  } else {
    $stmt1 = "UPDATE lecturer SET `UNIVERSITI` = '$universiti', KELAYAKAN_AKADEMIK = '$kelayakan_akademik', PENGALAMAN = '$pengalaman', PENGANUGERAHAN = '$penganugerahan', `FAKULTI` = '$fakulti', `BIDANG` = '$bidang', `NO_KP` = '$no_kad_pengenalan', `GELARAN` = '$gelaran', `NAMA` = '$nama', `ALAMAT` = '$alamat_tempat_bekerja', `POSKOD` = '$poskod', `DAERAH` = '$daerah', `NEGERI` = '$negeri', `NO_TELEFON` = '$no_tel_bimbit', `NO_TELEFON_PEJABAT` = '$no_tel_pejabat' WHERE `LECTURER_ID` = '$id'";
  }
  if ($stmt = $con->prepare($stmt1)) {

    $stmt->execute();
  } else {
    // Something is wrong with the SQL statement, so you must check to make sure your accounts table exists with all 3 fields.
    echo 'Could not prepare statement!';
  }

  $stmt->close();


}


if ($stmt = $con->prepare("SELECT `LECTURER_ID`, `KATEGORI_PERMOHONAN`, `NAMA`, `NO_KP`, `FAKULTI`, `EMEL`, `ALAMAT`, `NO_TELEFON`, `URL_AVATAR`, `PASSWORD`, `BIDANG`, `GELARAN`, `POSKOD`, `DAERAH`, `NEGERI`, `NO_TELEFON_PEJABAT`, `UNIVERSITI`, KELAYAKAN_AKADEMIK, PENGANUGERAHAN, PENGALAMAN FROM lecturer WHERE LECTURER_ID = '$id' ")) {
  $stmt->execute();
  mysqli_stmt_bind_result($stmt, $lecturer_id, $kategori_permohonan, $nama, $no_kp, $fakulti, $emel, $alamat, $no_telefon, $url_avatar, $password, $bidang, $gelaran, $poskod, $daerah, $negeri, $no_telefon_pejabat, $universiti, $kelayakan_akademik, $penganugerahan, $pengalaman);
  while (mysqli_stmt_fetch($stmt)) {
    array_push($user, array($lecturer_id, $kategori_permohonan, $nama, $no_kp, $fakulti, $emel, $alamat, $no_telefon, $url_avatar, $password, $bidang, $gelaran, $poskod, $daerah, $negeri, $no_telefon_pejabat, $universiti, $kelayakan_akademik, $penganugerahan, $pengalaman));
  }
} else {
  // Something is wrong with the SQL statement, so you must check to make sure your accounts table exists with all 3 fields.
  echo 'Could not prepare statement!';
}

$kelayakan_akademik_arr = explode("^", $user[0][17]);
$empty_str = array_shift($kelayakan_akademik_arr);
$penganugerahan_arr = explode("^", $user[0][18]);
$empty_str = array_shift($penganugerahan_arr);
$pengalaman_arr = explode("^", $user[0][19]);
$empty_str = array_shift($pengalaman_arr);

// $lampiran_1_arr = explode("<", $lampiran_1);
$con->close();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Polisi</title>

  <!-- font awesome cdn link  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

  <!-- custom css file link  -->
  <link rel="stylesheet" href="../style/styleform.css">
  <link rel="stylesheet" href="../style/stylepertanyaan.css">
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>

  <style>
    /* The Modal (background) */
    .modal {
      display: none;
      /* Hidden by default */
      position: fixed;
      /* Stay in place */
      z-index: 5000;
      /* Sit on top */
      padding-top: 100px;
      /* Location of the box */
      left: 0;
      top: 0;
      width: 100%;
      /* Full width */
      height: 100%;
      /* Full height */
      overflow: auto;
      /* Enable scroll if needed */
      background-color: rgb(0, 0, 0);
      /* Fallback color */
      background-color: rgba(0, 0, 0, 0.4);
      /* Black w/ opacity */
    }

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



    .collapsible {
      /* display:none; */
    }

    textarea,
    input {
      border: none;
    }

    textarea:focus,
    input:focus,
    input {
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

    h3.collapsible {
      margin-top: 30px;
    }

    /* Modal Content */
    .modal-content {
      background-color: var(--light-bg);
      ;
      margin: auto;
      padding: 20px;
      border: 1px solid #888;
      width: 50%;
    }

    /* The Close Button */
    .close {
      color: #aaaaaa;
      float: right;
      font-size: 28px;
      font-weight: bold;
    }

    .close:hover,
    .close:focus {
      color: #000;
      text-decoration: none;
      cursor: pointer;
    }
  </style>
</head>

<body>

  <?php
  include("../components/navbar_lecturer.php");
  include("../components/sidebar_lecturer.php");

  ?>

  <div class="main-body">
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" autocomplete="off"
      enctype="multipart/form-data" class="sign-in-form">
      <?php
      include("./form_profil.php");
      ?>
      <input type="submit" name="submit" value="Kemaskini" class="sign-btn"
        style="background-color: #5d7851; width: 30%; height: 50px; color: white; border-radius: 5px; margin-left: auto; margin-right: auto; display: block; font-size: 1.8rem;" />

    </form>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" autocomplete="off"
      class="sign-in-form">
      <?php
      include("./form_profil_password.php");
      ?>
      <input type="submit" name="change_password" value="Kemaskini Kata Laluan" class="sign-btn"
        style="background-color: #5d7851; width: 30%; height: 50px; color: white; border-radius: 5px; margin-left: auto; margin-right: auto; display: block; font-size: 1.8rem;" />

    </form>
  </div>

  <?php
  include("../components/footer.php");
  ?>

  <script src="../js/script.js"></script>
  <script>
    var modal = document.getElementById("myModal");
    var btn = document.getElementById("myBtn");
    var span = document.getElementsByClassName("close")[0];

    var modal2 = document.getElementById("myModal2");
    var btn2 = document.getElementById("myBtn2");
    var span2 = document.getElementsByClassName("close")[1];


    var modal3 = document.getElementById("myModal3");
    var btn3 = document.getElementById("myBtn3");
    var span3 = document.getElementsByClassName("close")[2];

    btn.onclick = function () {
      modal.style.display = "block";
    }
    span.onclick = function () {
      modal.style.display = "none";
    }
    btn2.onclick = function () {
      modal2.style.display = "block";
    }
    span2.onclick = function () {
      modal2.style.display = "none";
    }
    btn3.onclick = function () {
      modal3.style.display = "block";
    }
    span3.onclick = function () {
      modal3.style.display = "none";
    }

    window.onclick = function (event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }

      if (event.target == modal2) {
        modal2.style.display = "none";
      }

      if (event.target == modal3) {
        modal3.style.display = "none";
      }
    }


    function myFunction() {
      var table = document.getElementById("table-kelayakan-akademik");
      var latest = table.rows.length;
      var row = table.insertRow(latest);
      var cell2 = row.insertCell(0);
      var cell3 = row.insertCell(1);
      var cell4 = row.insertCell(2);
      var cell5 = row.insertCell(3);
      var cell6 = row.insertCell(4);
      cell2.innerHTML = document.getElementById("tahap").value;
      cell3.innerHTML = document.getElementById("nama-kelayakan").value;
      cell4.innerHTML = document.getElementById("institusi-penanugerah").value;
      cell5.innerHTML = document.getElementById("tahun-penganugerah").value;
      cell6.innerHTML = "<a href=\"#\"  onclick=\"deleteRow(this)\">Delete</a>";
      document.getElementById("kelayakan-akademik").value = document.getElementById("kelayakan-akademik").value.concat("^",
        document.getElementById("tahap").value, "|",
        document.getElementById("nama-kelayakan").value, "|",
        document.getElementById("institusi-penanugerah").value, "|",
        document.getElementById("tahun-penganugerah").value);

      document.getElementById("tahap").value = "";
      document.getElementById("nama-kelayakan").value = "";
      document.getElementById("institusi-penanugerah").value = "";
      document.getElementById("tahun-penganugerah").value = "";

      modal.style.display = "none";

    }

    function myFunction2() {
      var table = document.getElementById("table-pengalaman");
      var latest = table.rows.length;
      var row = table.insertRow(latest);
      var cell2 = row.insertCell(0);
      var cell3 = row.insertCell(1);
      var cell4 = row.insertCell(2);
      var cell5 = row.insertCell(3);
      var cell6 = row.insertCell(4);
      cell2.innerHTML = document.getElementById("jawatan").value;
      cell3.innerHTML = document.getElementById("tahun-berkhidmat").value;
      cell4.innerHTML = document.getElementById("tahun-berkhidmat-hingga").value;
      cell5.innerHTML = document.getElementById("nama-fakulti").value;
      cell6.innerHTML = "<a href=\"#\"  onclick=\"deleteRow2(this)\">Delete</a>";
      document.getElementById("pengalaman").value = document.getElementById("pengalaman").value.concat("^",
        document.getElementById("jawatan").value, "|",
        document.getElementById("tahun-berkhidmat").value, "|",
        document.getElementById("tahun-berkhidmat-hingga").value, "|",
        document.getElementById("nama-fakulti").value);

      document.getElementById("jawatan").value = "";
      document.getElementById("tahun-berkhidmat").value = "";
      document.getElementById("tahun-berkhidmat-hingga").value = "";
      document.getElementById("nama-fakulti").value = "";

      modal2.style.display = "none";

    }

    function myFunction3() {
      var table = document.getElementById("table-penganugerahan");
      var latest = table.rows.length;
      var row = table.insertRow(latest);
      var cell2 = row.insertCell(0);
      var cell3 = row.insertCell(1);
      cell2.innerHTML = document.getElementById("penganugerahan-1").value;
      cell3.innerHTML = "<a href=\"#\"  onclick=\"deleteRow3(this)\">Delete</a>";
      document.getElementById("penganugerahan").value = document.getElementById("penganugerahan").value.concat("^",
        document.getElementById("penganugerahan-1").value);

      document.getElementById("penganugerahan-1").value = "";

      modal3.style.display = "none";

    }

    function deleteRow(btn) {
      var row = btn.parentNode.parentNode;
      const myArray = document.getElementById("kelayakan-akademik").value.split("^");
      index = row.rowIndex;
      console.log(row);
      console.log(index);
      if (index > -1) { // only splice array when item is found
        myArray.splice(index, 1); // 2nd parameter means remove one item only
      }
      var newStr = "";
      console.log(myArray);
      for (var i = 1; i < myArray.length; i++) {
        newStr = newStr.concat("^", myArray[i]);
        console.log(newStr);
      }
      // if(myArray.length>0)
      //   newStr = newStr.concat(myArray[myArray.length-1]);
      document.getElementById("kelayakan-akademik").value = newStr;
      row.parentNode.removeChild(row);
    }

    function deleteRow2(btn) {
      var row = btn.parentNode.parentNode;
      const myArray = document.getElementById("pengalaman").value.split("^");
      index = row.rowIndex;
      console.log(row);
      console.log(index);
      if (index > -1) { // only splice array when item is found
        myArray.splice(index, 1); // 2nd parameter means remove one item only
      }
      var newStr = "";
      console.log(myArray);
      for (var i = 1; i < myArray.length; i++) {
        newStr = newStr.concat("^", myArray[i]);
        console.log(newStr);
      }
      // if(myArray.length>0)
      //   newStr = newStr.concat(myArray[myArray.length-1]);
      document.getElementById("pengalaman").value = newStr;
      row.parentNode.removeChild(row);
    }

    function deleteRow3(btn) {
      var row = btn.parentNode.parentNode;
      const myArray = document.getElementById("penganugerahan").value.split("^");
      index = row.rowIndex;
      console.log(row);
      console.log(index);
      if (index > -1) { // only splice array when item is found
        myArray.splice(index, 1); // 2nd parameter means remove one item only
      }
      var newStr = "";
      console.log(myArray);
      for (var i = 1; i < myArray.length; i++) {
        newStr = newStr.concat("^", myArray[i]);
        console.log(newStr);
      }
      // if(myArray.length>0)
      //   newStr = newStr.concat(myArray[myArray.length-1]);
      document.getElementById("penganugerahan").value = newStr;
      row.parentNode.removeChild(row);
    }
  </script>
<script type="text/javascript">
    var kelayakan_akademik_arr = <?php echo json_encode($kelayakan_akademik_arr); ?>;
    var penganugerahan_arr = <?php echo json_encode($penganugerahan_arr); ?>;
    var pengalaman_arr = <?php echo json_encode($pengalaman_arr); ?>;

    kelayakan_akademik_arr.forEach((element, index) => {
      const myArray = element.split("|");
      var table = document.getElementById("table-kelayakan-akademik");
      var latest = table.rows.length;
      var row = table.insertRow(latest);
      var cell2 = row.insertCell(0);
      var cell3 = row.insertCell(1);
      var cell4 = row.insertCell(2);
      var cell5 = row.insertCell(3);
      var cell6 = row.insertCell(4);
      cell2.innerHTML = myArray[0];
      cell3.innerHTML = myArray[1];
      cell4.innerHTML = myArray[2];
      cell5.innerHTML = myArray[3];
      cell6.innerHTML = "<a href=\"#\"  onclick=\"deleteRow(this)\">Delete</a>";
    });

    pengalaman_arr.forEach((element, index) => {
      const myArray = element.split("|");
      var table = document.getElementById("table-pengalaman");
      var latest = table.rows.length;
      var row = table.insertRow(latest);
      var cell2 = row.insertCell(0);
      var cell3 = row.insertCell(1);
      var cell4 = row.insertCell(2);
      var cell5 = row.insertCell(3);
      var cell6 = row.insertCell(4);
      cell2.innerHTML = myArray[0];
      cell3.innerHTML = myArray[1];
      cell4.innerHTML = myArray[2];
      cell5.innerHTML = myArray[3];
      cell6.innerHTML = "<a href=\"#\"  onclick=\"deleteRow2(this)\">Delete</a>";
    });

    penganugerahan_arr.forEach((element, index) => {
      const myArray = element.split("|");
      var table = document.getElementById("table-penganugerahan");
      var latest = table.rows.length;
      var row = table.insertRow(latest);
      var cell2 = row.insertCell(0);
      var cell3 = row.insertCell(1);
      cell2.innerHTML = myArray[0];
      cell3.innerHTML = "<a href=\"#\"  onclick=\"deleteRow3(this)\">Delete</a>";
    });
  </script>
</body>

</html>