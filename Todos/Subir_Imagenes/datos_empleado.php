<?php
include 'conexion.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos</title>
</head>
<body>
   <tr>
      <?php
      try{
          $sql1="SELECT * FROM empleado";
          $resultado = $base->prepare($sql1);
          $resultado->execute(array());
          while ($consulta = $resultado->fetch(PDO::FETCH_ASSOC)) {
             ?> 
             <div style="text-align:center";>
            
            <tr>
            <td colspan="3" class="titulo">CONSULTA DE LOS EMPLEADOS</td>
            </tr>
            <table  style="margin: 0 auto" width="50%" ;>
            
             <tr>
                <td class="registros"><img src="./subir/<?=$consulta['fotografia']?>" width="200"> 
             </tr>
             <tr>
               <td class="registros"><?php echo "Nombre:"." ". $consulta['nombre'];?></td>  
             </tr>
             <tr>
             <td class="registros"><?php echo "Apellido:"." ". $consulta['apellido'];?></td>
             </tr>
             <tr>
             <td class="registros"><?php echo "Edad:"." ". $consulta['edad'];?></td>  
             </tr>
             <tr>
             <td class="registros"><?php echo "Fecha de Nacimiento:"." ". $consulta['fecha_nacimiento'];?></td> 
             </tr>
             <tr>
             <td class="registros"><?php echo "Sexo:"." ". $consulta['sexo'];?></td> 
             </tr>
             <tr>
             <td class="registros"><?php echo "Titulo Profesional:"." ". $consulta['titulo_profesional'];?></td> 
             </tr>
             <tr>
             <td class="registros"><?php echo "Perfil:"." ". $consulta['perfil'];?></td> 
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