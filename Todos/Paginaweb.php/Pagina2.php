<!DOCTYPE html>
<html>
<head>
<title>Llegando datos...</title>
<link rel="stylesheet" type="text/css" href="estilo1.css"
</head>
<body>

<?php
$nombre=$_POST['txtnombre'];
$edad=$_POST['txtedad'];

if ($edad > 17) {
   echo $nombre." Usted es mayor de edad, PUEDE VOTAR!!!";
   } else{
    echo $nombre." Usted es menor de edad, NO PUEDE VOTAR!!!";
   }
?>

</body>
</html>