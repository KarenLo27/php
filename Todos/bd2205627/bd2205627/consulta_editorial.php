<?php
include 'conexion.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="editorial.css">
    <title>Document</title>
</head>
<body>
   <div>
   <table >
   <tr>
   <td colspan="3" class="titulo">EDITORIAL</td>
   </tr>
   <tr>
   <td class="columnas">Nombre</td>
   <td class="columnas" >Pais</td>
   <td class="columnas">year_fabricacion</td>
   <td class="columnas"></td>
   </tr>
   <tr>
      <?php
      try{
          $sql1="SELECT * FROM editorial";
          $resultado = $base->prepare($sql1);
          $resultado->execute(array());
          while ($consulta = $resultado->fetch(PDO::FETCH_ASSOC)) {
             ?> 
             <tr>
             <td class="registros"><?php echo $consulta['Nombre'];?></td>
             <td class="registros"><?php echo $consulta['Pais'];?></td>
             <td class="registros"><?php echo $consulta['year_fabricacion'];?></td>  
             <td ><a href="eliminar_editorial1.php?cod=<?php echo $consulta['Id'] ?>"><img src="img/eliminar.png" width="30px"></a></td> 
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