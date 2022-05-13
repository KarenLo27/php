<?php
require('fpdf/fpdf.php');
$fpdf=  new FPDF();
$fpdf->AddPage('Portrait','Letter');
$fpdf->SetFont('Arial','B',15);
$fpdf->Write(10,'Registro usuarios');
$fpdf->Ln();
$fpdf->SetFont('Arial','B');
$fpdf->SetFillColor(217,149,232);
$fpdf->Cell(25,7,'ID',1,0,'C',true);
$fpdf->Cell(50,7,'Nombre Completo',1,0,'C',true);
$fpdf->Cell(100,7,utf8_decode('Direccion'),1,0,'C',true);
$fpdf->Ln();
$fpdf->SetFont('Arial','',10);
$fpdf->Cell(25,5,'50012',1,0,'C',false);
$fpdf->Cell(50,5,'Karen Cordoba',1,0,'C',false);
$fpdf->Cell(100,5,utf8_decode('Calle 25-3'),1,0,'C',false);
$fpdf->OutPut();
?>