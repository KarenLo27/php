<!DOCTYPE html>
<html>
<head>
<title>ejercicio 7</title>
</head>
<body>
    <?php
    $edad_juan = 20;
    $edad_alberto = 0;
    $edad_maria = 0;
    $edad_mama = 0;

    $edad_alberto = $edad_juan /2;
    $edad_maria = $edad_juan / 3;
    $edad_mama = $edad_juan + $edad_alberto + $edad_maria;
    echo "Juan tiene". $edad_juan." años<br>";
    echo "Alberto tiene". $edad_alberto." años<br>";
    echo "Juan tiene". $edad_maria." años<br>";
    echo "La mama tiene". $edad_mama." años<br>";
?>
</body>
</html>
