<?php
require('fpdf/fpdf.php');
$fpdf= new FPDF();
$fpdf->SetFont('Arial','I',14);
$fpdf->AddPage('Portrait', 'Letter');
$fpdf->Write(5, utf8_decode('Pagina 1'));
$fpdf->Ln();
$fpdf->SetFont('Arial','B',18);
$fpdf->Cell(30,25, utf8_decode('Esta línea esta en tamaño 14'));
$fpdf->AddPage('Landscape','Letter');
$fpdf->Write(5, utf8_decode('Pagina 2'));
$fpdf->Ln();
$fpdf->SetFont('Arial','I',18);
$fpdf->Cell(30,25, utf8_decode('Esta línea esta en tamaño 18'));
$fpdf->AddPage('Landscape','Letter');
$fpdf->Write(5, utf8_decode('Pagina 3'));
$fpdf->Ln();
$fpdf->SetFont('Arial','I',18);
$fpdf->Cell(30,25, utf8_decode('Esta línea esta en tamaño 20'));
$fpdf->OutPut();
?>