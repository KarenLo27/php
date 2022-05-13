<?php
require('fpdf/fpdf.php');
include 'conexion.php';
$sql = "SELECT * FROM  proveedor";
$resultado = $base->prepare($sql);
$resultado->execute(array());

$fpdf = new FPDF();
$fpdf->AddPage();

$fpdf->SetFont('Arial','B',20);
$fpdf->Image('proveedor.png',170,10, -3000);
$fpdf->Cell(184,25,'Reporte de Proveedor',0,0,'C');
$fpdf->Ln();
$fpdf->SetFillColor(217,149,232);
$fpdf->SetFont('Arial', 'B',15);
$fpdf->Cell(92,15,'Nit',1,0,'C', true);
$fpdf->Cell(92,15,'Nombre',1,0,'C', true);
$fpdf->Ln();

$fpdf->SetFont('Arial','',10);

While ($consulta=$resultado->fetch(PDO::FETCH_ASSOC)){
    $fpdf->Cell(92,8,utf8_decode($consulta['nit']),1,0,'C');
    $fpdf->Cell(92,8,utf8_decode($consulta['nombrep']),1,0,'C');
    $fpdf->Ln();
}
$fpdf->OutPut();
?>