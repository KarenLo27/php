<?php
include 'conexion.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="consulta.css">
    <title>Consulta</title>
</head>
<body>
   <div>
   <table >
   <tr>
   <td colspan="3" class="titulo">CONSULTA DE EQUIPOS</td>
   </tr>
   <tr>
   <td class="columnas">Marca</td>
   <td class="columnas" >Capacidad</td>
   <td class="columnas">Color</td>
   <td class="columnas">Procesador</td>
   <td class="columnas"></td>
   </tr>
   <tr>
      <?php
      try{
          $sql1="SELECT * FROM `empresa-astral`";
          $resultado = $base->prepare($sql1);
          $resultado->execute(array());
          while ($consulta = $resultado->fetch(PDO::FETCH_ASSOC)) {
             ?> 
             <tr>
             <td class="registros"><?php echo $consulta['marca_equipos'];?></td>
             <td class="registros"><?php echo $consulta['capacidad_equipos'];?></td>
             <td class="registros"><?php echo $consulta['color_equipos'];?></td>  
             <td class="registros"><?php echo $consulta['procesador_equipos'];?></td>  
             <td ><a href="actualizar.php?cod=<?php echo $consulta['Id_equipos'] ?>">
             <img src="img/eliminar.png" width="30px"></a></td> 
             <td><a href="updateeditorial.php?cod=<?php echo $consulta['Id_equipos'] ?>"><img src="img/actualizar.png"
         width="25px"></a></td>
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
