<?php
include 'conexion.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="editorial.css">
    <title>Document</title>
</head>
<body>
    <table>
    <tr>
    <td>
    <?php
    try{
        $sql1="SELECT * FROM editorial WHERE Id=".$_REQUEST['cod'].";";
        $resultado = $base->prepare($sql1);
          $resultado->execute(array());
          while ($consulta = $resultado->fetch(PDO::FETCH_ASSOC)) {
              echo $consulta['nombre_editorial'];
           }
    }catch(Exeption $e){
              die('ALERTA - se produjo un error al intentar consutar la BD...'.$e->getMessage());
    ?>
    </td>
    </tr>
    </table>
</body>
</html>