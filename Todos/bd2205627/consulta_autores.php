<?php
include 'conexion.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="autores.css">
    <title>Document</title>
</head>
<body>
<section>
   <table >
   <tr>
   <td colspan="3" class="titulo">AUTORES</td>
   </tr>
   <tr>
   <td class="columnas">NOMBRES</td>
   <td class="columnas" >APELLIDOS</td>
   <td class="columnas">FECHA</td>
   <td class="columnas">NACIONALIDAD</td>
   <td class="columnas"></td>
   </tr>
   <tr>
   <?php
      try{
          $sql1="SELECT * FROM autores";
          $resultado = $base->prepare($sql1);
          $resultado->execute(array());
          while ($consulta = $resultado->fetch(PDO::FETCH_ASSOC)) {
             ?> 
             <tr>
             <td class="registros"><?php echo $consulta['nombres_li'];?></td>
             <td class="registros"><?php echo $consulta['apellidos'];?></td>
             <td class="registros"><?php echo $consulta['fecha'];?></td>   
             <td class="registros"><?php echo $consulta['Nacionalidad'];?></td> 
             <td ><a href="eliminar_autores.php?cod=<?php echo $consulta['id_autores'] ?>">
             <img src="img/eliminar.png" width="30px"></a></td> 
              </tr>
            <?php
            }  
          }catch(Exeption $e){
              die('ALERTA - se produjo un error al intentar consutar la BD...'.$e->getMessage());
          }
      ?>
   </table>
</section>

</body>
</html>