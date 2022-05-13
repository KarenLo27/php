<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Llegando datos...</title>
    <link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
    <?php
    $numeroinicial= $_POST['txt1'];
    $numerofinal= $_POST['txt2'];
    echo "NUMEROS MULTIPL                                                                           OS DE 3 COMPRENDIDOS ENTRE $numeroinicial Y $numerofinal <br>";
    if ($numeroinicial < $numerofinal) {
      for  ($i=$numeroinicial; $i <= $numerofinal; $i++) {
          if (($i % 3) == 0) {
              echo "$i <br>";
          }
      }
    }
    ?>
</body>
</html>