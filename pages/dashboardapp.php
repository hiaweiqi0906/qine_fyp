<?php
// session_start();
include("../php/db.php");

include('../components/app_protected_route.php');
// include('../functions/search_all_laporan.php');

$username = "";
$email = "";
$errors = array();
$id = $_SESSION["id"];

$list_of_program_app = array();
$list_of_program_panel_1 = array();

$list_of_appprogram_id = array(array(), array(), array());

$report_of_program_app = 0;
$report_of_program_panel_1 = 0;

$penilaian_info = array();

if ($stmt = $con->prepare("SELECT `APPPROGRAM_ID` FROM appprogram WHERE APP_ID_PENGERUSI = '$id'")) {

   $stmt->execute();
   mysqli_stmt_bind_result($stmt, $appprogram_id);

   while (mysqli_stmt_fetch($stmt)) {
      array_push($list_of_appprogram_id[0], $appprogram_id);
   }
} else {
   // Something is wrong with the SQL statement, so you must check to make sure your accounts table exists with all 3 fields.
   echo 'Could not prepare statement!';
}

if ($stmt = $con->prepare("SELECT `APPPROGRAM_ID` FROM appprogram WHERE APP_ID_PANEL_1 = '$id'")) {

   $stmt->execute();
   mysqli_stmt_bind_result($stmt, $appprogram_id);

   while (mysqli_stmt_fetch($stmt)) {
      array_push($list_of_appprogram_id[1], $appprogram_id);
   }
} else {
   // Something is wrong with the SQL statement, so you must check to make sure your accounts table exists with all 3 fields.
   echo 'Could not prepare statement!';

}


$temp_arr = array(0,0,0);
$current_app_id = array();


for($xxxx=0; $xxxx<3; $xxxx++){
  for($jjj=0; $jjj<count($list_of_appprogram_id[$xxxx]); $jjj++){
    $current_app_id = $list_of_appprogram_id[$xxxx][$jjj];


  if ($stmt = $con->prepare("SELECT `LAPORAN_ID` FROM `laporan` WHERE `APPPROGRAM_ID` = '$current_app_id' AND `TYPE` = $xxxx")) {

    $stmt->execute();
    mysqli_stmt_bind_result($stmt, $laporan1);

    while (mysqli_stmt_fetch($stmt)) {
       $temp_arr[$xxxx]++;
    }
 } else {
    // Something is wrong with the SQL statement, so you must check to make sure your accounts table exists with all 3 fields.
    echo 'Could not prepare statement!';
 }  }
}

$con->close();
$stmt->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Dashboard APP</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

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
	 <img src="../img/Selamat Datang.png" class="promo_card">
	 <div class="title-font">
		<h2>Dashboard</h2><br>
	</div>
      <div class="cards">
      <div class="card card-3">
				<div class="card--data">
					<div class="card--content">
						<h5 class="card--title">Jumlah Laporan Diterima</h5>
						<h1><?php echo count($list_of_appprogram_id[0]) + count($list_of_appprogram_id[1]) + count($list_of_appprogram_id[2]);?></h1>
					</div>
					<!-- <i class="ri-user-2-line card--icon--lg"></i> -->
				</div>
				<div class="card--stats">
					<!--<span><i class="ri-bar-chart-fill card--icon stat--icon">65%</i></span>
					<span><i class="ri-arrow-up-fill card--icon up--icon">10</i></span>
					<span><i class="ri-arrow-down-s-fill card--icon down--icon">2</i></span>-->
				</div>
			</div>
			<div class="card card-3">
				<div class="card--data">
					<div class="card--content">
						<h5 class="card--title">Jumlah Laporan Selesai</h5>
						<h1><?php echo $temp_arr[0] + $temp_arr[1] + $temp_arr[2];?></h1>
					</div>
					<!-- <i class="ri-user-2-line card--icon--lg"></i> -->
				</div>
				<div class="card--stats">
					<!--<span><i class="ri-bar-chart-fill card--icon stat--icon">65%</i></span>
					<span><i class="ri-arrow-up-fill card--icon up--icon">10</i></span>
					<span><i class="ri-arrow-down-s-fill card--icon down--icon">2</i></span>-->
				</div>
			</div>
			<div class="card card-4">
				<div class="card--data">
					<div class="card--content">
						<h5 class="card--title">Jumlah Laporan Belum Selesai</h5>
						<h1><?php echo count($list_of_appprogram_id[0]) + count($list_of_appprogram_id[1]) + count($list_of_appprogram_id[2]) - $temp_arr[0] - $temp_arr[1] - $temp_arr[2];?></h1>
					</div>
					<!-- <i class="ri-user-2-line card--icon--lg"></i> -->
				</div>
				<div class="card--stats">
					<!--<span><i class="ri-bar-chart-fill card--icon stat--icon">65%</i></span>
					<span><i class="ri-arrow-up-fill card--icon up--icon">10</i></span>
					<span><i class="ri-arrow-down-s-fill card--icon down--icon">2</i></span>-->
				</div>
			</div>
		</div>


     </div>

	 <?php
	 	include("../components/footer.php");
	 ?>

	  <script src="../js/script.js"></script>

</body>
</html>