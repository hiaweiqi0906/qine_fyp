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

$list_of_appprogram_id = array(array(), array(), array());

$count_app = 0;
$count_kukm = 0;
$count_lecturer = 0;

if ($stmt = $con->prepare("SELECT `KUALITIUKM_ID`, `NAMA`, `URL_AVATAR` FROM kualitiukm WHERE 1 ORDER BY CREATED_DATE DESC")) {

	$stmt->execute();
	mysqli_stmt_bind_result($stmt, $kualitiukm_id, $nama, $url_avatar);

	while (mysqli_stmt_fetch($stmt)) {
		array_push($list_of_kualiti_ukm, array($kualitiukm_id, $nama, $url_avatar));
	}
} else {
	// Something is wrong with the SQL statement, so you must check to make sure your accounts table exists with all 3 fields.
	echo 'Could not prepare statement!';
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
	<title>Dashboard Pentadbir/Admin</title>

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

	?>


	<div class="main-body">
		<img src="../img/Selamat Datang.png" class="promo_card">
		<div class="title-font">
			<h2>Dashboard</h2><br>
		</div>

		<div class="overview">
			<div class="title">
				<h2 class="section--title">Overview</h2>

			</div>
			<div class="cards">
				<div class="card card-1">
					<div class="card--data">
						<div class="card--content">
							<h5 class="card--title">Jumlah Pensyarah</h5>
							<h1><?php echo $count_lecturer;?></h1>
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
							<h5 class="card--title">Jumlah APP</h5>
							<h1><?php echo $count_app;?></h1>
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
							<h5 class="card--title">Jumlah Kualiti-UKM</h5>
							<h1><?php echo $count_kukm;?></h1>
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
				<h2 class="section--title">APP</h2>
				<div class="app--right--btns">
					<select name="date" id="date" class="dropdown app--filter">
						<option>Filter</option>
						<option value="free">Free</option>
						<option value="scheduled">Schedule</option>
					</select>
					<button class="add"  onclick="window.location.href='./form_add_app.php';">Add APP</button>
					<?php
					if($count_app > 6)
				echo '<button class="add"  onclick="window.location.href=\'https://w3docs.com\';" style="background: gray;">Lihat Semua</button>';
?>
				</div>
			</div>
			<section class=" teachers admin">


		<?php
			echo "<div class=\"box-container\" style=\"padding: none;\">";
			for ($jj = 0; $jj < count($list_of_program_app); $jj++) {

				echo "<a href=\"./app_detail.php?aid=".$list_of_program_app[$jj][0]."\"><div class=\" app--card box\" style=\"padding: 1rem; height: 15rem; border-radius: 10px; background: none;\">
               <div class=\"tutor\">
                  <img class=\"img--box\" style=\"margin: 15px;\" src=\""; if($list_of_program_app[$jj][2]=="" || !isset($list_of_program_app[$jj][2])) echo "../img/profile.png"; else echo $list_of_program_app[$jj][2];
						echo"\" alt=\"\">

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

					<button class="add" onclick="window.location.href='./form_add_kukm.php';">Add Kualiti-UKM</button>
					<?php
					if($count_kukm > 6)
				echo '<button class="add"  onclick="window.location.href=\'https://w3docs.com\';" style="background: gray;">Lihat Semua</button>';
?>
				</div>
			</div>
			<section class=" teachers admin">


		<?php
			echo "<div class=\"box-container\" style=\"padding: none;\">";
			for ($jj = 0; $jj < count($list_of_kualiti_ukm); $jj++) {

				echo "<a href=\"./kukm_detail.php?kid=".$list_of_kualiti_ukm[$jj][0]."\"><div class=\" app--card box\" style=\"padding: 1rem; height: 15rem; border-radius: 10px; background: none;\">
               <div class=\"tutor\">
                  <img class=\"img--box\" style=\"margin: 15px;\" src=\""; if($list_of_kualiti_ukm[$jj][2]=="" || !isset($list_of_kualiti_ukm[$jj][2])) echo "../img/profile.png"; else echo $list_of_kualiti_ukm[$jj][2];
						echo"\" alt=\"\">

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
					if($count_lecturer > 6)
				echo '<button class="add"  onclick="window.location.href=\'https://w3docs.com\';" style="background: gray;">Lihat Semua</button>';
?>
				</div>
			</div>
			<section class=" teachers admin">


		<?php
			echo "<div class=\"box-container\" style=\"padding: none;\">";
			for ($jj = 0; $jj < count($list_of_lecturers); $jj++) {

				echo "<a href=\"./lecturer_detail.php?lid=".$list_of_lecturers[$jj][0]."\"><div class=\" app--card box\" style=\"padding: 1rem; height: 15rem; border-radius: 10px; background: none;\">
               <div class=\"tutor\">
                  <img class=\"img--box\" style=\"margin: 15px;\" src=\""; if($list_of_lecturers[$jj][2]=="" || !isset($list_of_lecturers[$jj][2])) echo "../img/profile.png"; else echo $list_of_lecturers[$jj][2];
						echo"\" alt=\"\">

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