<!DOCTYPE html>
<html lang="en">
<head>
    <title>Total</title>
</head>
<body>
    
  <?php
   $nombre = $_POST ['txtnombre'];
   $membresia= $_POST ['txtmembresia'];
   $totalcompra= $_POST ['txttotal'];
   $totalpagar = 0;
   $descuent0 = 0; 
    
   if ($membresia == "A") {
       $descuent0 = $totalcompra * 0.10;
       $totalpagar = $totalcompra - $descuent0;
       echo "Estmado   ".$nombre."   su pago inicial es   $".$totalcompra.", pero en el dia de hoy hay descuento  $".$descuent0." que es del 10%, ya que sumerce tiene una membresia de helado tipo  ".$membresia."  su total a pagar es de  $".$totalpagar. "<br>";
echo    "Hata luego, Gracias por la compra!";
      
   }
 "<br>";

   if ($membresia == "B") {
    $descuent0 = $totalcompra * 0.15;
    $totalpagar = $totalcompra - $descuent0;
    echo "Estimado   ".$nombre."   su pago inicial es    $".$totalcompra.",   pero en el dia de hoy hay descuento  $".$descuent0." equivalente a 15%, dado que usted tiene una membresia de helado tipo  ".$membresia."  su total a pagar es de  $".$totalpagar. "<br>";
echo    "Hata luego, Gracias por la compra!";
    
}

"<br>";

if ($membresia == "C") {
    $descuent0 = $totalcompra * 0.20;
    $totalpagar = $totalcompra - $descuent0;
    echo "Estimado   ".$nombre."   su pago inicial es   $".$totalcompra.",  pero en el dia de hoy hay descuento  $".$descuent0." equivalente a 20%, dado que usted tiene una membresia de helado tipo  ".$membresia."  su total a pagar es de  $".$totalpagar. "<br>";
echo    "Hata luego, Gracias por la compra!";
    
}



?>

</body>
</html>