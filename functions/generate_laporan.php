<?php
require_once('../vendor/autoload.php');
include("../php/db.php");
$programid = $_GET["pid"];
$programinfo = array();
// reference the Dompdf namespace
use Dompdf\Dompdf;
use Dompdf\Options;

// instantiate and use the dompdf class
$options = new Options();
$options->set('isRemoteEnabled', true);
$dompdf = new Dompdf();
$fileContent = file_get_contents( '../pages/print_detailprogram.php?id=18&type=0&pid=4' ) ;
$dompdf->loadHtml($fileContent);
$dompdf->render();
$dompdf->stream("sample.pdf");

?>