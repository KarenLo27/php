<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>resultados</title>
</head>
<body>
    <?php
    $uno= $_POST ['uno'];
    $dos= $_POST ['dos'];

    $resultado=0;
    $sumatoria=0;
    $factorial=1;
    $mutiplicacion=0;

    if (isset ($_POST['suma'])) {
        $resultado = $uno + $dos;
        echo "$uno + $dos = $resultado";
    }
    if (isset ($_POST['resta'])) {
        $resultado = $uno - $dos;
        echo "$uno - $dos = $resultado";
    
    }
    if (isset ($_POST['multiplicacion'])) {
        $resultado = $uno * $dos;
        echo "$uno x $dos = $resultado";
    }
    if (isset ($_POST['division'])) {
        $resultado = $uno / $dos;
        echo "$uno / $dos = $resultado";
  }
  if (isset ($_POST ['sumatoria'])) {
    for ($i=$uno; $i <= $dos ; $i++) { 
      $sumatoria = $sumatoria + $i;
      }  
       echo "La sumatoria entre los numeros  ". $uno. "  y  ". $dos. "  es ".$sumatoria. "<br>"; 
 }
 if (isset ($_POST ['factoral'])) {
    for ($f = $uno; $f>1; $f--){
    $factorial = $factorial*$f;
 }
 echo "El factorial del numero    ". $uno . "  es      "."<br>". " !".$factorial;
 }
 
 if (isset ($_POST ['tabla'])) {
     echo "La tabla de multiplicar del  ".$uno."<br>"."<br>";
    for ($m=1; $m<11; $m++) {
       $multiplicacion = $uno * $m;   
      echo $uno ."  X  ". $m."   =  ". $multiplicacion. "<br>";  
    } 
    }
 
 
 
    if (isset($_POST ['multiplo'])) {
       if (($uno % $dos) == 0) {
          echo "El $uno es multiplo de $dos  <br>";
        }
      
       else {
          echo "El $uno no es multiplo $dos <br>"; }
      };
      



    ?>
    
</body>
</html>