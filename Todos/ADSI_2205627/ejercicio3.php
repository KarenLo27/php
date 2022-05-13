<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio3</title>
</head>
<body>
     <?php
     $giba = 10;
     $mega = 0;
     $cd = 0;
       
       echo "Por ahora sabemos que el disco duro tiene informacion en su totalidad de ";
       echo $giba."Gigabytes";
       echo "<br>";
       echo "<br>";
       echo "y eso a su ves corresponde a    ";
       $mega = (1024 * $giba)/ 1;
       echo $mega,"megabytes";
       echo "<br>";
       echo "<br>";
       $cd = $mega / 700;
       echo "un cd virgen tiene 700 megabytes de capacidad y para almacenar los  ".$giba." Gigabytes de informacion son necesario:  ";
       echo "<br>";
       echo "<br>";
       echo $cd."  CDs.";


     ?>



</body>
</html>