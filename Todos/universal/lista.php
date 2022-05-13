<?php
require('fpdf/fpdf.php');
include 'conectar.php';

$sql = "SELECT * FROM  musical";
$resultado = $base->prepare($sql);
$resultado->execute(array());

$fpdf = new FPDF();
$fpdf->AddPage();

$fpdf->SetFont('Arial','B',20);
$fpdf->Cell(184,25,'Listado de los Artistas',0,0,'C');
$fpdf->Ln();
$fpdf->SetfillColor(241, 196, 15);
$fpdf->SetFont('Arial', 'B',15);
$fpdf->Cell(45,15,'Nombre',1,0, 'C', true);
$fpdf->Cell(23,15,'Pais',1,0, 'C', true);
$fpdf->Cell(30,15,'Estilo',1,0, 'C', true);
$fpdf->Cell(20,15,'year',1,0, 'C', true);
$fpdf->Cell(35,15,'integrantes',1,0, 'C', true);
$fpdf->Cell(43,15,'discos_grabados',1,0, 'C', true);
$fpdf->Ln();

$fpdf->SetFont('Arial', '',15);

while ($consulta=$resultado->fetch(PDO::FETCH_ASSOC)) {
    $fpdf->Cell(45,8,($consulta['nombre']),1,0, 'C');
    $fpdf->Cell(23,8,($consulta['pais']),1,0, 'C');
    $fpdf->Cell(30,8,($consulta['estilo_musical']),1,0, 'C');
    $fpdf->Cell(20,8,($consulta['year']),1,0, 'C');
    $fpdf->Cell(35,8,($consulta['integrantes']),1,0, 'C');
    $fpdf->Cell(43,8,($consulta['discos_grabados']),1,0, 'C');
    
    $fpdf->Ln();
}
$fpdf->OutPut();
?>