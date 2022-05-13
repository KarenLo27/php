<!DOCTYPE html>
<html>
<head>
<title> Respueta ejercicio 2</title>
</head>
<body>

<?php
$zapatos = $_POST['txtzapatos'];
$pago = 0;
$descuento = 0;
$total = 0;

if (($zapatos > 10) and ($zapatos <= 20)) {
 $pago = $zapatos * 80;
 $descuento = $pago * 0.10;
 $total = $pago - $descuento;
 echo "Total delpago de la compra fue de".$zapatos." zapatos es ".$total." pesos<br>";
 echo "Se le realizo un descuento del 10% equivalente a ".$descuento." pesos";

}
if (($zapatos > 21) and ($zapatos <= 30)) {
    $pago = $zapatos * 80;
    $descuento = $pago * 0.20;
    $total = $pago - $descuento;
    echo "Total delpago de la compra fue de".$zapatos." zapatos es ".$total." pesos<br>";
    echo "Se le realizo un descuento del 20% equivalente a ".$descuento." pesos";
      }
      if ($zapatos <= 10)  {
        $pago = $zapatos * 80;
        $total = $pago - $descuento;
        echo "Total delpago de la compra fue de".$zapatos." zapatos es ".$total." pesos<br>";
        echo "No se realizo ningun descuento, su compra fue minima...";
          }

?>

</body>
</html>