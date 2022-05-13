<?php
include 'conexion.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="panaderia.css">
    <title>Consulta</title>
</head>
<body>
   <div>
   <table >
   <tr>
   <td colspan="3" class="titulo">CONSULTA</td>
   </tr>
   <tr>
   <td class="columnas">Nombre</td>
   <td class="columnas" >Peso</td>
   <td class="columnas">Ingredientes</td>
   <td class="columnas">Valor</td>
   <td class="columnas"></td>
   </tr>
   <tr>
      <?php
      try{
          $sql1="SELECT * FROM mario_pan";
          $resultado = $base->prepare($sql1);
          $resultado->execute(array());
          while ($consulta = $resultado->fetch(PDO::FETCH_ASSOC)) {
             ?> 
             <tr>
             <td class="registros"><?php echo $consulta['nombre'];?></td>
             <td class="registros"><?php echo $consulta['peso'];?></td>
             <td class="registros"><?php echo $consulta['ingredientes'];?></td>  
             <td class="registros"><?php echo $consulta['valor'];?></td> 
             <td ><a href="eliminar.php?cod=<?php echo $consulta['id_panaderia'] ?>">
             <img src="img/eliminar.png" width="30px"></a></td> 
             <td><a href="actualizar.php?cod=<?php echo $consulta['id_panaderia'] ?>">
             <img src="img/actualizar.png" width="25px"></a></td>
              </tr>
            <?php
            }  
          }catch(Exeption $e){
              die('ALERTA - se produjo un error al intentar consutar la BD...'.$e->getMessage());
          }
      ?>
   </tr>
   </table>
   </div>

</body>
</html>