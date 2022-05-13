<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <?php
    $multiplicacion=0;
    echo "Tabla de multiplicar con for <br>";
    for ($z=1; $z < 11; $z++) {
        $multiplicacion =3 * $z;
        echo "3 x ".$z." = ".$multiplicacion."<br>";
    }
    
    echo "Tabla de multiplicar con while <br>";
    $p=1;
    while ($p<11) {
        $multiplicacion = 3 * $p;
        echo "3 x ".$p." = ".$multiplicacion. "<br>";
        $p++; 
    }
    ?>
</body>
</html>