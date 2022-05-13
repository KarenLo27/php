<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     TABLA DE MULTIPLICAR DEL NUMERO: <br> <br>
    <?php 
    $tabla = $_POST['tabla'];
    $multiplicacion= 0;

     echo " FOR". "<br>";
     for ($m=1; $m<11; $m++) {
         $multiplicacion = $tabla * $m;
         echo $tabla ."  X  ". $m."   =  ". $multiplicacion. "<br>";
      }
     echo "<br>";
      echo " While"."<br>";
      $n=1;
      while ($n<11) { $multiplicacion = $tabla * $n;
        echo $tabla ."  X  ". $n."   =  ". $multiplicacion. "<br>";
        $n++;
      }

    ?>


</body>
</html>