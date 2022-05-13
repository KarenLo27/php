<?php
include 'conectar.php';
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
   <td colspan="3" class="titulo">CONSULTA DE ARTISTAS</td>
   </tr>
   <tr>
   <td class="columnas">Nombre</td>
   <td class="columnas" >Pais</td>
   <td class="columnas">Estilo musical</td>
   <td class="columnas">Año</td>
   <td class="columnas">Integrantes</td>
   <td class="columnas">Discos Grabados</td>
   <td class="columnas"></td>
   </tr>
   <tr>
      <?php
      try{
          $sql1="SELECT * FROM musical";
          $resultado = $base->prepare($sql1);
          $resultado->execute(array());
          while ($consulta = $resultado->fetch(PDO::FETCH_ASSOC)) {
             ?> 
             <tr>
             <td class="registros"><?php echo $consulta['nombre'];?></td>
             <td class="registros"><?php echo $consulta['pais'];?></td>
             <td class="registros"><?php echo $consulta['estilo_musical'];?></td>  
             <td class="registros"><?php echo $consulta['year'];?></td> 
             <td class="registros"><?php echo $consulta['integrantes'];?></td> 
             <td class="registros"><?php echo $consulta['discos_grabados'];?></td> 
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


