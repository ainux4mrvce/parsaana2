<?php
require('/fpdf/fpdf.php');
//create an object
$pdf=new FPDF();
//get document properties

$pdf->Write(5,'It is a backendbuddy production.');
//Output the document
$pdf->Output('php Tutorial.pdf','I');
?>