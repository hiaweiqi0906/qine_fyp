<?php
require_once('../vendor/autoload.php');
include("../php/db.php");
$programid = $_GET["pid"];
$programinfo = array();
// reference the Dompdf namespace
use Dompdf\Dompdf;
use Dompdf\Options;
if ($stmt = $con->prepare("SELECT `PROGRAM_ID`, `TARIKH`, `URL_FILE_DRIVE`, `NAMA`, `URL_DRIVE`, `BIDANG`, `STATUS`, `DESCRIPTION` FROM `program` WHERE `PROGRAM_ID` = '$programid'")) {

   $stmt->execute();
   mysqli_stmt_bind_result($stmt, $program_id, $tarikh, $masa, $nama, $url_drive, $bidang,$status,$description);

// }   /* fetch values */
   while (mysqli_stmt_fetch($stmt)) {
      array_push($programinfo, array($program_id, $tarikh, $masa, $nama, $url_drive, $bidang,$status,$description));
   }
   // echo $stmt->field_count;
} else {
   // Something is wrong with the SQL statement, so you must check to make sure your accounts table exists with all 3 fields.
   echo 'Could not prepare statement!';
}
// instantiate and use the dompdf class
$options = new Options();
$options->set('isRemoteEnabled', true);
$dompdf = new Dompdf($options);
$dompdf->loadHtml('
<div style="width: 100vw;">
<h1>Informasi Program</h1>

<table style="border: 1px solid black; width: 100%;">
   <tr><td style="width: 33%; border: 1px solid black;">Gambar Program: </td><td style="width: 66%; border: 1px solid black;"><img style="display: block; margin: 10px auto; margin-left: auto; margin-right: auto; width:200px; height: 200px;" src="'.$programinfo[0][4].'"></td></tr>
   <tr><td style="width: 33%; border: 1px solid black;">Nama Program: </td><td style="width: 66%; border: 1px solid black;">'.$programinfo[0][3].'</td></tr>
   <tr><td style="width: 33%; border: 1px solid black;">Tarikh: </td><td style="width: 66%; border: 1px solid black;">'.$programinfo[0][1].'</td></tr>
   <tr><td style="width: 33%; border: 1px solid black;">Link Fail-fail Proram: </td><td style="width: 66%; border: 1px solid black;"><a href="'.$programinfo[0][2].'">'.$programinfo[0][2].'</a></td></tr>
   <tr><td style="width: 33%; border: 1px solid black;">Bidang: </td><td style="width: 66%; border: 1px solid black;">'.$programinfo[0][5].'</td></tr>
   <tr><td style="width: 33%; border: 1px solid black;">Informasi Seterusnya: </td><td style="width: 66%; border: 1px solid black;">'.$programinfo[0][7].'</td></tr>
</table>
</div>
');

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A5', 'landscape');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream();
?>