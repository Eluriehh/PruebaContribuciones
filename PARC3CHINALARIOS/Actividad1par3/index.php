<?php
require('fpdf186\fpdf.php');

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial', 'B',12);
$pdf->Cell(40,10, 'Hola Mundo',0,2);
$pdf->SetFont('Times','I',20); 
$pdf->SetTextColor (50,10,100);
$pdf->SetFillColor (210,200,2);
$pdf->Cell(190,40, 'Centro de Estudios Tecnologicos Industriales y de Servicios No.84',1,3, 'C', true);
$pdf->SetFont ('Courier','' ,18); 
$pdf->SetTextColor (50,10,200);
$pdf->Cell(40,10, 'Desarolla Aplicaciones con Conexion a Base de Datos',0,4);
$pdf->SetFont('Arial', 'B',14);
$pdf->SetTextColor (30,67,100);
$pdf->Cell(40,10, 'Ramirez Larios Uriel Dominyk',0,4);
$pdf->SetFont('Arial', 'B',10);
$pdf->SetTextColor(40,100,40);
$pdf->Cell(40,10,'Ramirez Larios Uriel Dominyk',0,5);
$pdf->Output ();
?>