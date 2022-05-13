<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sumatoria</title>
</head>
<body>
<?php
$n1=$_POST['txtn1'];
$n2=$_POST['txtn2'];
$sumatoria = 0;
echo "SUMATORIA CON FOR <br>";
for ($x=$n1; $x <= $n2; $x++){
    $sumatoria =$sumatoria + $x;
}
?>
    
</body>
</html>