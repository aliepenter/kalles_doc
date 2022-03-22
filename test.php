<?php
require __DIR__ . '/vendor/autoload.php';

use setasign\Fpdi\Fpdi;

// initiate FPDI
$pdf = new Fpdi();
$pdf->AddPage('P',[400,400]); // adds page in landscape
$pdf->setSourceFile("xxx.pdf");
// import page 1
$tplId = $pdf->importPage(1);
// use the imported page and place it at point 5,5 with your preferred width in mm
$pdf->SetFont('Arial','B',16);
$pdf->Cell(40,10,'Hello World!');
$pdf->useTemplate($tplId, 0, 0, 298);
$pdf->SetFont('Arial','',90); // Font Name, Font Style (eg. 'B' for Bold), Font Size
$pdf->SetTextColor(231,105,110); // RGB
$pdf->SetXY(16, 110); // X start, Y start in mm
$text = "Andrew Thomas";
$pdf->Write(0, $text);

// adds current date
$pdf->SetFont('Arial','',12); 
$pdf->SetTextColor(0,0,0); 
$pdf->SetXY(17, 175); 
$date = date('F dS, Y');
$pdf->Write(0, $date);

$pdf->Image('windows-10-logo.jpeg', 0, 0, 10, 0, null, null,'T');

$pdf->SetLeftMargin(100);
$pdf->SetY(100);
$pdf->Output();

?>