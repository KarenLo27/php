<?php
require('fpdf/fpdf.php');
include 'conexion.php';

$sql = "SELECT * FROM  autores;
$resultado = $base->prepare($sql);
$resultado->execute(array());

$fpdf = new FPDF();
$fpdf->AddPage();

$fpdf->SetFont('Arial','B',20);
$fpdf->Cell(184,25,'Registro Autores',0,0,'C');
$fpdf->Ln();
$fpdf->SetfillColor(205,205,205);
$fpdf->SetFont('Arial', 'B',15);
$fpdf->Cell(92,15,'Nombre',1,0, 'C', true);
$fpdf->Cell(92,15,'Apellidos',1,0, 'C', true);
$fpdf->Cell(92,15,'Fecha',1,0, 'C', true);
$fpdf->Cell(92,15,'Nacionalidad',1,0, 'C', true);
$fpdf->Ln();

$fpdf->SetFont('Arial', '',15);

 while ($consulta=$resultado->fetch(PDO::FETCH_ASSOC)) {
    $fpdf->Cell(92,8,utf8_decodde($consulta_autores['nombres_li']),1,0, 'C');
    $fpdf->Cell(92,8,utf8_decodde($consulta_autores['apellidos']),1,0, 'C');
    $fpdf->Cell(92,8,utf8_decodde($consulta_autores['fecha']),1,0, 'C');
    $fpdf->Cell(92,8,utf8_decodde($consulta_autores['Nacionalidad']),1,0, 'C');
    $fpdf->Ln();
}
$fpdf->OutPut();
?>