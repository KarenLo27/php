<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php 
    $numero = $_POST['factorial'];
    $factorial=1;
    
    echo "FACTORIAL CON FOR"."<br>"."<br>";
    for ($f = $numero; $f>1; $f--){
        $factorial = $factorial*$f;
    }
    echo "El factorial del numero    ".$numero. "  es ".$factorial;

    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "FACTORIAL CON WHILE"."<br>"."<br>";
    
    $factorial=1;
    $p=$numero;
    while ($p>1) { 
        $factorial = $factorial*$p;     
     $p--;
    } 
 echo "El factorial del numero    ".$numero. "  es ".$factorial."<br>";


     
    ?>
</body>
</html>