<?php
// session_start();
include("../php/db.php");

include('../components/kualitiukm_protected_route.php');
// include('../functions/search_all_laporan.php');

$username = "";
$email = "";
$errors = array();
$id = $_SESSION["id"];

$list_of_lecturers = array();
$list_of_program_app = array();
$list_of_kualiti_ukm = array();
$list_of_uf = array();

$list_of_appprogram_id = array(array(), array(), array());

$count_app = 0;
$count_kukm = 0;
$count_lecturer = 0;
$count_uf = 0;


if ($stmt = $con->prepare("SELECT `APP_ID`, `NAMA`, `URL_AVATAR` FROM app WHERE 1 ORDER BY CREATED_DATE DESC")) {

	$stmt->execute();
	mysqli_stmt_bind_result($stmt, $app_id, $nama, $url_avatar);

	while (mysqli_stmt_fetch($stmt)) {
		$count_app++;
	}
} else {
	// Something is wrong with the SQL statement, so you must check to make sure your accounts table exists with all 3 fields.
	echo 'Could not prepare statement!';
}

if ($stmt = $con->prepare("SELECT `LECTURER_ID`, `NAMA`, `URL_AVATAR` FROM lecturer WHERE 1 ORDER BY CREATED_DATE DESC")) {

	$stmt->execute();
	mysqli_stmt_bind_result($stmt, $lecturer_id, $nama, $url_avatar);

	while (mysqli_stmt_fetch($stmt)) {
		$count_lecturer++;
	}
} else {
	// Something is wrong with the SQL statement, so you must check to make sure your accounts table exists with all 3 fields.
	echo 'Could not prepare statement!';
}

if ($stmt = $con->prepare("SELECT `KUALITIUKM_ID`, `NAMA`, `URL_AVATAR` FROM kualitiukm WHERE 1 ORDER BY CREATED_DATE DESC")) {

	$stmt->execute();
	mysqli_stmt_bind_result($stmt, $kualitiukm_id, $nama, $url_avatar);

	while (mysqli_stmt_fetch($stmt)) {
		$count_kukm++;
	}
} else {
	// Something is wrong with the SQL statement, so you must check to make sure your accounts table exists with all 3 fields.
	echo 'Could not prepare statement!';
}

if ($stmt = $con->prepare("SELECT `USERFAKULTI_ID`, `NAMA`, `URL_AVATAR` FROM userfakulti WHERE 1 ORDER BY CREATED_DATE DESC")) {

	$stmt->execute();
	mysqli_stmt_bind_result($stmt, $userfakulti_id, $nama, $url_avatar);

	while (mysqli_stmt_fetch($stmt)) {
		$count_uf++;
	}
} else {
	// Something is wrong with the SQL statement, so you must check to make sure your accounts table exists with all 3 fields.
	echo 'Could not prepare statement!';
}

$penilaian_info = array();

if ($stmt = $con->prepare("SELECT `APP_ID`, `NAMA`, `URL_AVATAR` FROM app WHERE NOT APP_ID=1 ORDER BY CREATED_DATE DESC LIMIT 6")) {

	$stmt->execute();
	mysqli_stmt_bind_result($stmt, $app_id, $nama, $url_avatar);

	while (mysqli_stmt_fetch($stmt)) {
		array_push($list_of_program_app, array($app_id, $nama, $url_avatar));
	}
} else {
	// Something is wrong with the SQL statement, so you must check to make sure your accounts table exists with all 3 fields.
	echo 'Could not prepare statement!';
}

if ($stmt = $con->prepare("SELECT `LECTURER_ID`, `NAMA`, `URL_AVATAR` FROM lecturer WHERE NOT LECTURER_ID = 1 ORDER BY CREATED_DATE DESC LIMIT 6")) {

	$stmt->execute();
	mysqli_stmt_bind_result($stmt, $lecturer_id, $nama, $url_avatar);

	while (mysqli_stmt_fetch($stmt)) {
		array_push($list_of_lecturers, array($lecturer_id, $nama, $url_avatar));
	}
} else {
	// Something is wrong with the SQL statement, so you must check to make sure your accounts table exists with all 3 fields.
	echo 'Could not prepare statement!';
}

if ($stmt = $con->prepare("SELECT `KUALITIUKM_ID`, `NAMA`, `URL_AVATAR` FROM kualitiukm WHERE 1 ORDER BY CREATED_DATE DESC LIMIT 6")) {

	$stmt->execute();
	mysqli_stmt_bind_result($stmt, $kualitiukm_id, $nama, $url_avatar);

	while (mysqli_stmt_fetch($stmt)) {
		array_push($list_of_kualiti_ukm, array($kualitiukm_id, $nama, $url_avatar));
	}
} else {
	// Something is wrong with the SQL statement, so you must check to make sure your accounts table exists with all 3 fields.
	echo 'Could not prepare statement!';
}

if ($stmt = $con->prepare("SELECT `USERFAKULTI_ID`, `NAMA`, `URL_AVATAR` FROM userfakulti WHERE 1 ORDER BY CREATED_DATE DESC LIMIT 6")) {

	$stmt->execute();
	mysqli_stmt_bind_result($stmt, $userfakulti_id, $nama, $url_avatar);

	while (mysqli_stmt_fetch($stmt)) {
		array_push($list_of_uf, array($userfakulti_id, $nama, $url_avatar));
	}
} else {
	// Something is wrong with the SQL statement, so you must check to make sure your accounts table exists with all 3 fields.
	echo 'Could not prepare statement!';
}


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

$list_of_program = array();
$list_of_assigned_program = array();

if ($stmt = $con->prepare("SELECT `PROGRAM_ID` FROM program WHERE 1")) {

	$stmt->execute();
	mysqli_stmt_bind_result($stmt, $program_id);

	while (mysqli_stmt_fetch($stmt)) {
		array_push($list_of_program, array($program_id));
	}
} else {
	// Something is wrong with the SQL statement, so you must check to make sure your accounts table exists with all 3 fields.
	echo 'Could not prepare statement!';
}

if ($stmt = $con->prepare("SELECT `PROGRAM_ID` FROM appprogram WHERE 1")) {

	$stmt->execute();
	mysqli_stmt_bind_result($stmt, $program_id);

	while (mysqli_stmt_fetch($stmt)) {
		array_push($list_of_assigned_program, array($program_id));
	}
} else {
	// Something is wrong with the SQL statement, so you must check to make sure your accounts table exists with all 3 fields.
	echo 'Could not prepare statement!';
}

$list_of_kukm_program = array();
for ($xxx = 0; $xxx < count($list_of_app_program); $xxx++) {
	if ($list_of_app_program[$xxx][1] == $id) {
		array_push($list_of_kukm_program, $list_of_app_program[$xxx][0]);
	}
}
$count_collected = 0;
$list_of_collected_kukm_program = array();
$whole_arr_str = "";
if (isset($list_of_kukm_program[0])) {

	$whole_arr_str = $list_of_kukm_program[0];
	for ($yy = 1; $yy < count($list_of_kukm_program) - 1; $yy++) {
		$whole_arr_str = $whole_arr_str . "," . $list_of_kukm_program[$yy];
	}
	$whole_arr_str = $whole_arr_str . "," . $list_of_kukm_program[count($list_of_kukm_program) - 1];


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

$con->close();
$stmt->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Dashboard Kualiti UKM</title>

	<!-- font awesome cdn link  -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

	<!-- custom css file link  -->
	<link rel="stylesheet" href="../style/stylepertanyaan.css">
	<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
	<script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>

	<script src="https://cdn.anychart.com/releases/8.11.0/js/anychart-core.min.js"></script>
	<script src="https://cdn.anychart.com/releases/8.11.0/js/anychart-pie.min.js"></script>
	<script>
		anychart.onDocumentReady(function () {

			// create data
			var data = [
				{ x: "Laporan SUDAH Diterima", value: <?php echo count($list_of_collected_kukm_program); ?> },
				{ x: "Laporan BELUM Diterima", value: <?php echo count($list_of_kukm_program) * 2 - count($list_of_collected_kukm_program); ?> }
			];

			// create a chart and set the data
			var chart = anychart.pie(data);
			chart.background().fill("#eee");
			chart.title("Peratusan Laporan yang Diterima dan Belum Diterima berdasarkan Jumlah Laporan");

			// set the container id
			chart.container("pieChartContainer");

			// initiate drawing the chart
			chart.draw();
		});
	</script>
	<style>
		.dot {}
	</style>
	<script>
		anychart.onDocumentReady(function () {

			// create data
			var data = [
				{ x: "APP", value: <?php echo $count_app; ?> },
				{ x: "PENSYARAH", value: <?php echo $count_lecturer; ?> },
				{ x: "KUALITI UKM", value: <?php echo $count_kukm; ?> },
				{ x: "PIHAK FAKULTI", value: <?php echo $count_uf; ?> }
			];

			// create a chart and set the data
			var chart = anychart.pie(data);
			chart.background().fill("#eee");

			chart.title("Peratusan APP, Pensyarah, Pihak Fakulti dan Kualiti-UKM");

			// set the container id
			chart.container("chartContainer");

			// initiate drawing the chart
			chart.draw();
		});
	</script>

</head>

<body>


	<?php
	include("../components/navbar_kualitiukm.php");
	include("../components/sidebar_kualitiukm.php");

	?>


	<div class="main-body">
		<img src="../img/Selamat Datang.png" class="promo_card">
		<div class="title-font">
			<h2>Dashboard</h2><br>
		</div>
		<div class="Keseluruhan">
			<div class="title">
				<h2 class="size1">Keseluruhan</h2>
			</div>
			<div class="chart-row">
				<div id="pieChartContainer" style="height: 400px; width: 400px;" class="chart-col chart-left">
				</div>
				<div class="chart-col chart-right" style="width: 10%;height: 500px;">
					<h2 class="section--title">Laporan Diterima</h2>
					<span class="dot data-color"><?php echo count($list_of_collected_kukm_program); ?></span>
					<h2 class="section--title data-margin">Laporan Belum Diterima</h2>
					<span class="dot data-color">
						<?php echo count($list_of_kukm_program) * 2 - count($list_of_collected_kukm_program); ?>
					</span>
				</div>
				<div class="chart-col chart-right" style="width: 10%; margin-left: 15rem;height: 450px;">
					<h2 class="section--title">Jumlah Program</h2>
					<span class="dot data-color">
						<?php echo count($list_of_program); ?>
					</span>
					<h2 class="section--title data-margin">Program Diagih</h2><br>
					<span class="dot data-color">
						<?php echo count($list_of_assigned_program); ?>
					</span>
				</div>

			</div>
			<div class="chart-row">
				<div id="chartContainer" style="height: 400px; width: 400px;" class="chart-col chart-left">
				</div>
				<div class="chart-col chart-right" style="width: 10%;height: 450px;">
					<h2 class="section--title">Jumlah APP</h2>
					<br>
					<br><span class="dot data-color">
						<?php echo $count_app; ?>
					</span>

					<h2 class="section--title data-margin">Jumlah Pensyarah</h2>
					<span class="dot data-color">
						<?php echo $count_lecturer; ?>
					</span>
				</div>
				<div class="chart-col chart-right" style="width: 10%; margin-left: 15rem;height: 450px;">
					<h2 class="section--title">Jumlah Kualiti UKM</h2>
					<span class="dot data-color">
						<?php echo $count_kukm; ?>
					</span>
					<h2 class="section--title data-margin">Jumlah Pihak Fakulti</h2>
					<span class="dot data-color">
						<?php echo $count_uf; ?>
					</span>
				</div>
			</div>
			<div class="cards" style="margin-top: 20px;">
				</div>
		</div>
		<div class="app">
			<div class="title">
				<h2 class="section--title">APP</h2>
				<div class="app--right--btns">
					<select name="date" id="date" class="dropdown app--filter">
						<option>Filter</option>
						<option value="free">Free</option>
						<option value="scheduled">Schedule</option>
					</select>
					<button class="add" onclick="window.location.href='../admin/form_add_app.php';">Tambah APP</button>
					<?php
					if ($count_app > 6)
						echo '<button class="add"  onclick="window.location.href=\'../admin/dashboard_all_app.php\';" style="background: gray;">Lihat Semua</button>';
					?>
				</div>
			</div>
			<section class=" teachers admin">


				<?php
				echo "<div class=\"box-container\" style=\"padding: none;\">";
				for ($jj = 0; $jj < count($list_of_program_app); $jj++) {

					echo "<a href=\"./app_detail.php?aid=" . $list_of_program_app[$jj][0] . "\"><div class=\" app--card box\" style=\"padding: 1rem; height: 15rem; border-radius: 10px; background: none;\">
               <div class=\"tutor\">
                  <img class=\"img--box\" style=\"margin: 15px;\" src=\"";
					if ($list_of_program_app[$jj][2] == "" || !isset($list_of_program_app[$jj][2]))
						echo "../img/profile.png";
					else
						echo $list_of_program_app[$jj][2];
					echo "\" alt=\"\">

               </div>
               <p class=\"scheduled\" style=\"font-size: 1.25rem;\">" . $list_of_program_app[$jj][1] . "</p>";

					// <a href=\"./other_people_laporan_kualitiukm.php?id=" . $list_of_program_app[$jj][0] . "&type=" . $list_of_program_app[0][0] . "\" class=\"inline-btn\">Lihat</a>
					echo "</div></a> ";


					// echo "</div>";
				}

				?>

			</section>

		</div>
		<div class="app">
			<div class="title">
				<h2 class="section--title">Kualiti-UKM</h2>
				<div class="app--right--btns">

					<button class="add" onclick="window.location.href='../admin/form_add_kukm.php';">Tambah Kualiti-UKM</button>
					<?php
					if ($count_kukm > 6)
						echo '<button class="add"  onclick="window.location.href=\'../admin/dashboard_all_kukm.php\';" style="background: gray;">Lihat Semua</button>';
					?>
				</div>
			</div>
			<section class=" teachers admin">


				<?php
				echo "<div class=\"box-container\" style=\"padding: none;\">";
				for ($jj = 0; $jj < count($list_of_kualiti_ukm); $jj++) {

					echo "<a href=\"./kukm_detail.php?kid=" . $list_of_kualiti_ukm[$jj][0] . "\"><div class=\" app--card box\" style=\"padding: 1rem; height: 15rem; border-radius: 10px; background: none;\">
               <div class=\"tutor\">
                  <img class=\"img--box\" style=\"margin: 15px;\" src=\"";
					if ($list_of_kualiti_ukm[$jj][2] == "" || !isset($list_of_kualiti_ukm[$jj][2]))
						echo "../img/profile.png";
					else
						echo $list_of_kualiti_ukm[$jj][2];
					echo "\" alt=\"\">

               </div>
               <p class=\"scheduled\" style=\"font-size: 1.25rem;\">" . $list_of_kualiti_ukm[$jj][1] . "</p>";

					// <a href=\"./other_people_laporan_kualitiukm.php?id=" . $list_of_kualiti_ukm[$jj][0] . "&type=" . $list_of_kualiti_ukm[0][0] . "\" class=\"inline-btn\">Lihat</a>
					echo "</div></a> ";


					// echo "</div>";
				}

				?>

			</section>
		</div>
		<div class="app">
			<div class="title">
				<h2 class="section--title">Pensyarah</h2>
				<div class="app--right--btns">
					<?php
					if ($count_lecturer > 6)
						echo '<button class="add"  onclick="window.location.href=\'../admin/dashboard_all_lecturers.php\';" style="background: gray;">Lihat Semua</button>';
					?>
				</div>
			</div>
			<section class=" teachers admin">


				<?php
				echo "<div class=\"box-container\" style=\"padding: none;\">";
				for ($jj = 0; $jj < count($list_of_lecturers); $jj++) {

					echo "<a href=\"./lecturer_detail.php?lid=" . $list_of_lecturers[$jj][0] . "\"><div class=\" app--card box\" style=\"padding: 1rem; height: 15rem; border-radius: 10px; background: none;\">
               <div class=\"tutor\">
                  <img class=\"img--box\" style=\"margin: 15px;\" src=\"";
					if ($list_of_lecturers[$jj][2] == "" || !isset($list_of_lecturers[$jj][2]))
						echo "../img/profile.png";
					else
						echo $list_of_lecturers[$jj][2];
					echo "\" alt=\"\">

               </div>
               <p class=\"scheduled\" style=\"font-size: 1.25rem;\">" . $list_of_lecturers[$jj][1] . "</p>";

					// <a href=\"./other_people_laporan_kualitiukm.php?id=" . $list_of_lecturers[$jj][0] . "&type=" . $list_of_lecturers[0][0] . "\" class=\"inline-btn\">Lihat</a>
					echo "</div></a> ";


					// echo "</div>";
				}

				?>

			</section>

		</div>
	</div>

	<?php
   include("../components/footer.php");
   ?>

	<script src="../js/script.js"></script>

</body>

</html>