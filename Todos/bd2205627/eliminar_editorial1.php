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
    <title>Eliminar</title>
</head>
<body>
    <table>
    <tr>
    <td class="columnas">
    <?php
    try{
        $sql1="SELECT * FROM editorial WHERE Id=".$_REQUEST['cod'].";";
        $resultado = $base->prepare($sql1);
          $resultado->execute(array());
          while ($consulta = $resultado->fetch(PDO::FETCH_ASSOC)) {
              echo "Esta seguro que desea eliminar la editorial <u>" .$consulta['Nombre'];
           }
    }catch(Exeption $e){
              die('ALERTA - se produjo un error al intentar consutar la BD...'.$e->getMessage());
               }
    ?>
    </td>
    </tr>
    </table>
    <table class="simbolos" >
    <tr>
    <td><a href="eliminar_editorial2.php?cod2=<?php echo $_REQUEST['cod'] ?>"><img src="img/si.png"
     width="60px" ></a></td>
    <td><a href="javascript:history.go(-1)"><img src="img/no.png" width="40px"></a></td>
    </tr>
    </table>
</body>
</html>