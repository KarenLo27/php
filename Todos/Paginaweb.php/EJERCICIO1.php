<!DOCTYPE html>
<html>
<head>
<title> Respueta ejercicio 1</title>
</head>
<body>

<?php
$horas = $_POST['txthoras'];
$pago = 0;
$extras = 0;
$pagoextra = 0;
$total = 0;
if ($horas < 41) {
    $pago = $horas * 20;
    echo "El total a pagar por las ".$horas." horas de trabajo es ".$pago. " pesos";   
}
if ($horas > 40) {
    $pago = 40 * 20;
    $extras = $horas - 40;
    $pagoextra = $extras * 25;
    $total = $pago + $pagoextra;

    echo "El total a pagar por las ".$horas." horas de trabajo es ".$total." pesos <br>";
    echo " Usted trabajo ".$extras." horas extras";
}
?>

</body>
</html>