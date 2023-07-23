<?php
// session_start();
include("../php/db.php");

include('../components/userfakulti_protected_route.php');
// include('../functions/search_all_laporan.php');

$username = "";
$email = "";
$errors = array();
$id = $_SESSION["id"];

$list_of_lecturers = array();
$list_of_program_app = array();
$list_of_kualiti_ukm = array();

$list_of_appprogram_id = array(array(), array(), array());

$count_app = 0;
$count_program = 0;
$count_program_laporan = 0;
$count_lecturer = 0;
$count_collected = 0;
$count_collected_belum_maklum_balas = 0;


$list_of_program = array();
$list_of_collected_program_laporan = array();
$list_of_collected_program_laporan_belum_maklum_balas = array();

if ($stmt = $con->prepare("SELECT `PROGRAM_ID`, `NAMA`, `URL_DRIVE` FROM program WHERE UPLOADEDBY = '$id' ORDER BY PROGRAM_ID DESC")) {

	$stmt->execute();
	mysqli_stmt_bind_result($stmt, $program_id, $nama, $url_drive);

	while (mysqli_stmt_fetch($stmt)) {
		array_push($list_of_program, array($program_id, $nama, $url_drive));
		$count_program++;
	}
} else {
	// Something is wrong with the SQL statement, so you must check to make sure your accounts table exists with all 3 fields.
	echo 'Could not prepare statement!';
}

$penilaian_info = array();
//  IN ($whole_arr_str)

$whole_arr_str = "";
if (isset($list_of_program[0][0])) {

	$whole_arr_str = $list_of_program[0][0];
	for ($yy = 1; $yy < count($list_of_program) - 1; $yy++) {
		$whole_arr_str = $whole_arr_str . "," . $list_of_program[$yy][0];
	}
	$whole_arr_str = $whole_arr_str . "," . $list_of_program[count($list_of_program) - 1][0];


	if ($stmt = $con->prepare("SELECT `LAPORAN_ID` FROM laporan t1 LEFT JOIN appprogram t2 ON t1.APPPROGRAM_ID = t2.APPPROGRAM_ID WHERE t2.`PROGRAM_ID` IN ($whole_arr_str) AND t1.MAKLUM_BALAS IS NOT NULL AND SENTTOUSERFAKULTI='T'")) {

		$stmt->execute();
		mysqli_stmt_bind_result($stmt, $laporan_id);

		while (mysqli_stmt_fetch($stmt)) {
			array_push($list_of_collected_program_laporan, array($laporan_id));
		}

		$count_collected = count($list_of_collected_program_laporan);
	} else {
		// Something is wrong with the SQL statement, so you must check to make sure your accounts table exists with all 3 fields.
		echo 'Could not prepare statement!';
	}
}

$whole_arr_str = "";
if (isset($list_of_program[0][0])) {

	$whole_arr_str = $list_of_program[0][0];
	for ($yy = 1; $yy < count($list_of_program) - 1; $yy++) {
		$whole_arr_str = $whole_arr_str . "," . $list_of_program[$yy][0];
	}
	$whole_arr_str = $whole_arr_str . "," . $list_of_program[count($list_of_program) - 1][0];


	if ($stmt = $con->prepare("SELECT `LAPORAN_ID` FROM laporan t1 LEFT JOIN appprogram t2 ON t1.APPPROGRAM_ID = t2.APPPROGRAM_ID WHERE t2.`PROGRAM_ID` IN ($whole_arr_str) AND t1.MAKLUM_BALAS IS NULL AND SENTTOUSERFAKULTI='T'")) {

		$stmt->execute();
		mysqli_stmt_bind_result($stmt, $laporan_id);

		while (mysqli_stmt_fetch($stmt)) {
			array_push($list_of_collected_program_laporan_belum_maklum_balas, array($laporan_id));
		}

		$count_collected_belum_maklum_balas = count($list_of_collected_program_laporan_belum_maklum_balas);
	} else {
		// Something is wrong with the SQL statement, so you must check to make sure your accounts table exists with all 3 fields.
		echo 'Could not prepare statement!';
	}
}

// --------------------------


$con->close();
$stmt->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Dashboard User Fakulti</title>

	<!-- font awesome cdn link  -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

	<!-- custom css file link  -->
	<link rel="stylesheet" href="../style/stylepertanyaan.css">
	<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
	<script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
</head>

<body>


	<?php
	include("../components/navbar_userfakulti.php");
	include("../components/sidebar_userfakulti.php");

	?>


	<div class="main-body">
		<img src="../img/Selamat Datang.png" class="promo_card">
		<div class="title-font">
			<h2>Dashboard</h2>
		</div>

		<div class="Keseluruhan">
			<div class="title">
				<h2 class="section--title">Keseluruhan</h2>

			</div>
			<div class="cards">
				<div class="card card-1">
					<div class="card--data">
						<div class="card--content">
							<h5 class="card--title">Jumlah Laporan Program Sudah Maklum Balas</h5>
							<h1>
								<?php echo $count_collected; ?>
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
				<div class="card card-2">
					<div class="card--data">
						<div class="card--content">
							<h5 class="card--title">Jumlah Laporan Program Belum Maklum Balas</h5>
							<h1>
								<?php echo $count_collected_belum_maklum_balas; ?>
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
				<div class="card card-3">
					<div class="card--data">
						<div class="card--content">
							<h5 class="card--title">Jumlah Program</h5>
							<h1>
								<?php echo $count_program; ?>
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
		<div class="app">
			<div class="title">
				<h2 class="section--title">Program</h2>
				<div class="app--right--btns">

					<button class="add" onclick="window.location.href='./form_add_program.php';">Tambah Program</button>
					<?php
					if ($count_app > 6)
						echo '<button class="add"  onclick="window.location.href=\'./dashboard_all_program.php\';" style="background: gray;">Lihat Semua</button>';
					?>
				</div>
			</div>
			<section class=" teachers admin">


				<?php
				echo "<div class=\"box-container\" style=\"padding: none;\">";
				for ($jj = 0; $jj < count($list_of_program); $jj++) {

					echo "<a href=\"./program_details.php?pid=" . $list_of_program[$jj][0] . "\"><div class=\" app--card box\" style=\"padding: 1rem; height: 15rem; border-radius: 10px; background: none;\">
               <div class=\"tutor\">
                  <img class=\"img--box\" style=\"margin: 15px;\" src=\"";
					if ($list_of_program[$jj][2] == "" || !isset($list_of_program[$jj][2]))
						echo "../img/profile.png";
					else
						echo $list_of_program[$jj][2];
					echo "\" alt=\"\">

               </div>
               <p class=\"scheduled\" style=\"font-size: 1.25rem;\">" . $list_of_program[$jj][1] . "</p>";

					// <a href=\"./other_people_laporan_kualitiukm.php?id=" . $list_of_program_app[$jj][0] . "&type=" . $list_of_program_app[0][0] . "\" class=\"inline-btn\">Lihat</a>
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