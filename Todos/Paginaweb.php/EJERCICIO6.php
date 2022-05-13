<!DOCTYPE html>
<html lang="en">
<head>

    <title>EJERCICIO6</title>
</head>
<body>

     <?php
        $nombre= $_POST['nombre'];
        $sueldo=$_POST['sueldo'];
        $aumento = 0;
        $total=0;

        if ($sueldo > "2000000"){
            $aumento= $sueldo * 0.05;
            $total= $sueldo + $aumento;
            echo "ES UN PRIVILEGIO QUE TRABAJES EN ESTA EMPRESA   ".$nombre." y por el buen desempeño hemos decidido darte un aumento del 5% que equivale a $".$aumento. "pesos de tu sueldo base esperamos sean de ayuda para ti, eso quiere decir que el total a pagar es  $ ".$total."pesos.";
        }

        if ($sueldo < "2000000"){
            $aumento= $sueldo * 0.10;
            $total= $sueldo + $aumento;
            echo " ES UN PRIVILEGIO QUE TRABAJES EN ESTA EMPRESA   ".$nombre." y por tu buen desempeño hemos decidido darte un aumento del 10% que equivale a $".$aumento. "pesos de tu sueldo base esperamos sean de ayuda para ti, eso quiere decir que el total a pagar es  $ ".$total."pesos.";
        }


        ?>
</body>
</html>