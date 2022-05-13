<?php
require('fpdf/fpdf.php');
$fpdf= new FPDF();
$fpdf->AddPage();
$fpdf->SetFont('Arial','',20);
$fpdf->Cell(30,10, 'Hola ADSI 2205627');
$fpdf->Ln();
$fpdf->SetFont('Arial','',10);
$fpdf->Cell(30,25, 'Esto es una prueba del metodo text de PDF');
$fpdf->OutPut();
?>