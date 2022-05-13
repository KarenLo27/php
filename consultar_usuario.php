<?php
include 'conexion.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="actualizarproyecto.css">
    <title>Consulta</title>
</head>
<body>
   <div>
   <table border="2" >

   <tr>
   <td colspan="3" class="titulo">CONSULTA USUARIOS</td>
   </tr>
   <tr>
   
   <td class="columnas" >Nombre</td>
   <td class="columnas">Telefono</td>
   <td class="columnas">Tipo_Usuario</td>
   <td class="columnas">Direccion</td>
   <td class="columnas">Usuario</td>
   <td class="columnas">Contraseña</td>
   <td class="columnas"></td>
   
   </tr>
   <tr>
      <?php
      try{
          $sql1="SELECT * FROM usuario";
          $resultado = $base->prepare($sql1);
          $resultado->execute(array());
          while ($consulta = $resultado->fetch(PDO::FETCH_ASSOC)) {
             ?> 
             <tr>
             <td class="registros"><?php echo $consulta['nombre'];?></td>
             <td class="registros"><?php echo $consulta['telefono'];?></td>
             <td class="registros"><?php echo $consulta['tipo_usuario'];?></td>  
             <td class="registros"><?php echo $consulta['direccion'];?></td> 
             <td class="registros"><?php echo $consulta['usuario'];?></td> 
             <td class="registros"><?php echo $consulta['contrasena'];?></td> 
             <td><a href="Actualizar_usuario.php?cod=<?php echo $consulta['pk_identificacion']?>">
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