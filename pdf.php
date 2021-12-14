<?php

use Dompdf\Dompdf;

require_once "dompdf/autoload.inc.php";
$pdf = new Dompdf();
$html=file_get_contents("http://localhost/prograiv/tecnicas/producto.php");
$pdf->loadHtml($html);
$pdf->setPaper("A4","landingpage");
$pdf->render();
$pdf->stream();

?>