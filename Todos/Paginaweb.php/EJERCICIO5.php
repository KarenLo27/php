<!DOCTYPE html>
<html lang="en">
<head>
    <title>sueldo</title>
</head>
<body>
SUELDO  A PAGAR <br> <br> <br>
    <?php 
     $nombre=$_POST['nombre'];
     $sueldo=$_POST['pago'];
     $codigo=$_POST['codigo'];
     $actividad=$_POST['trabajo'];
     $neto=0;
     $descuento=0;

     

     if ($sueldo <= "500000")  {
         $descuento = $sueldo * 0.12;
         $neto = $sueldo - $descuento;
echo "Emplead@: "."<br>"."<br>".$nombre."  identificado con el numero de CC ".$codigo." se desempeño en la labor de    ".$actividad."  de este modo su sueldo de marzo es  $".$sueldo."pesos, entonces se le hara un descuento del 12% para su seguro de vida, equivalente a   $".$descuento."pesos, por lo tanto el sueldo  a pagar es de  $".$neto."pesos.";
     }


     "<br>";


     if (($sueldo >= "501000") and ($sueldo <= "1000000" )) {
        $descuento = $sueldo * 0.15;
        $neto = $sueldo - $descuento;
echo "Emplead@: "."<br>"."<br>".$nombre."  identificado con el numero de CC  ".$codigo." se desempeño en la labor de    ".$actividad."   de este modo el sueldo del mes de marzo es   $".$sueldo."pesos, entonces se le hara un descuento del 15% para su seguro de vida, equivalente a   $".$descuento."pesos, por lo tanto el sueldo  a pagar es de  $".$neto."pesos.";
   
    }

    if ($sueldo >= "1001000" ) {
        $descuento = $sueldo * 0.18;
        $neto = $sueldo - $descuento;
echo "Emplead@: "."<br>"."<br>".$nombre."   identificado con el numero de CC  ".$codigo." se desempeño en la labor de    ".$actividad."   de este modo el sueldo del mes de marzo es de  $".$sueldo."pesos, entonces se le hara un descuento del 18% para su seguro de vida, equivalente a   $".$descuento."pesos, por lo tanto el sueldo  a pagar es de  $".$neto."pesos.";
   
    }

    ?>

</body>
</html>





