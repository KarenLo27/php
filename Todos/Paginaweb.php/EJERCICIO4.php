<!DOCTYPE html>
<html lang="en">
<head>
    <title>resultado</title>
</head>
<body>
<br>
<br>
    <?php
       $nombre= $_POST ['nombre'];
       $nota1= $_POST ['nota1'];
       $nota2= $_POST ['nota2'];
       $nota3= $_POST ['nota3'];
       $promedio= 0;

       $promedio = (($nota1 + $nota2 + $nota3) / 3);


       if ($promedio >= 70){
         echo "El estudiante   ".$nombre." elestudiante con el promedio   ".$promedio. "  puntos aprobo en la materia de MATEMATICAS.  FELICIDADES!";
       }
       if ($promedio <= 69){
        echo "El estudiante ".$nombre."  con un promedio final de   ".$promedio. "  puntos no aprobo la materia de MATEMATICAS, por lo tanto debe acercarse al profesor para recibir el plan de mejoramiento.  ";
      }

    ?>


</body>
</html>