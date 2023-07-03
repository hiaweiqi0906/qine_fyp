<?php
$laporan_all_people = array();

for($xx=0; $xx<3; $xx++){
  if ($stmt = $con->prepare("SELECT `LAPORAN_ID`, `STATUS`, `TARIKH_AWAL`, `TARIKH_AKHIR`, `APPPROGRAM_ID`, `LAMPIRAN_1`, `AKREDASI_PENUH`, `TYPE`, `MAKLUM_BALAS`, BAHAGIAN_LAIN, TANDATANGAN_0, TANDATANGAN_1 FROM `laporan` WHERE `TYPE` = '$xx' AND `APPPROGRAM_ID` = '$app_program_id'")) {

   $stmt->execute();
   mysqli_stmt_bind_result($stmt, $laporan_id, $status, $tarikh_awal, $tarikh_akhir, $appprogram_id, $lampiran_1, $akredasi_penuh, $type, $maklum_balas, $bahagian_lain, $tandatangan_0, $tandatangan_1);

   while (mysqli_stmt_fetch($stmt)) {
      array_push($laporan_all_people, array($laporan_id, $status, $tarikh_awal, $tarikh_akhir, $appprogram_id, $lampiran_1, $akredasi_penuh, $type, $maklum_balas, $bahagian_lain, $tandatangan_0, $tandatangan_1));
    }

   if($stmt -> num_rows == 0){
    array_push($laporan_all_people, array('', 'NOT STARTED'));
   }
  } else {
    // Something is wrong with the SQL statement, so you must check to make sure your accounts table exists with all 3 fields.
    echo 'Could not prepare statement!';
  }
}
?>