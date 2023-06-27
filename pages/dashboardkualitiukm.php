<?php
include("../php/db.php");

// session_start();
include('../components/kualitiukm_protected_route.php');
$id = $_SESSION["id"];
$list_of_program = array();
$list_of_app_program = array();
if ($stmt = $con->prepare("SELECT `PROGRAM_ID` FROM program WHERE 1")) {

	$stmt->execute();
	mysqli_stmt_bind_result($stmt, $program_id);

	while (mysqli_stmt_fetch($stmt)) {
		array_push($list_of_program, $program_id);
	}
} else {
	// Something is wrong with the SQL statement, so you must check to make sure your accounts table exists with all 3 fields.
	echo 'Could not prepare statement!';
}

if ($stmt = $con->prepare("SELECT `APPPROGRAM_ID`, `KUALITIUKM_ID` FROM appprogram WHERE 1")) {

	$stmt->execute();
	mysqli_stmt_bind_result($stmt, $appprogram_id, $kualitiukm_id);

	while (mysqli_stmt_fetch($stmt)) {
		array_push($list_of_app_program, array($appprogram_id, $kualitiukm_id));
	}
} else {
	// Something is wrong with the SQL statement, so you must check to make sure your accounts table exists with all 3 fields.
	echo 'Could not prepare statement!';
}
$list_of_kukm_program = array();
for($xxx=0; $xxx<count($list_of_app_program); $xxx++){
	if($list_of_app_program[$xxx][1] == $id){
		array_push($list_of_kukm_program, $list_of_app_program[$xxx][0]);
	}
}
$count_collected = 0;
$list_of_collected_kukm_program = array();
$whole_arr_str = "";
if(isset( $list_of_kukm_program[0])){

	$whole_arr_str = $list_of_kukm_program[0];
	for($yy=1; $yy<count($list_of_kukm_program)-1; $yy++)
	{
		$whole_arr_str = $whole_arr_str .",".$list_of_kukm_program[$yy];
	}
	$whole_arr_str = $whole_arr_str .",".$list_of_kukm_program[count($list_of_kukm_program)-1];


	if ($stmt = $con->prepare("SELECT `LAPORAN_ID` FROM laporan WHERE `APPPROGRAM_ID` IN ($whole_arr_str)")) {

	$stmt->execute();
	mysqli_stmt_bind_result($stmt, $laporan_id);

	while (mysqli_stmt_fetch($stmt)) {
		array_push($list_of_collected_kukm_program, array($laporan_id));
	}

	$count_collected = count($list_of_collected_kukm_program);
} else {
	// Something is wrong with the SQL statement, so you must check to make sure your accounts table exists with all 3 fields.
	echo 'Could not prepare statement!';
}
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Dashboard Kualiti-UKM</title>

	<!-- font awesome cdn link  -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

	<!-- custom css file link  -->
	<link rel="stylesheet" href="../style/stylepertanyaan.css">
	<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
	<script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
</head>

<body>

	<?php
	include("../components/navbar_kualitiukm.php");
	include("../components/sidebar_kualitiukm.php");
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
						<h5 class="card--title">Jumlah Program Diagihkan</h5>
						<h1>
							<?php echo count($list_of_app_program); ?>
						</h1>
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
						<h5 class="card--title">Jumlah Program Belum Diagihkan</h5>
						<h1>
							<?php echo count($list_of_program) - count($list_of_app_program); ?>
						</h1>
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
						<h5 class="card--title">Jumlah Laporan Belum Diterima</h5>
						<h1>
							<?php echo count($list_of_kukm_program)*2-count($list_of_collected_kukm_program); ?>
						</h1>
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