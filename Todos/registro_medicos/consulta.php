<?php
require ('conexion.php');
session_start();
if(isset($_SESSION["nombre_m"])){
    $nombre=$_SESSION["nombre_m"];

}else{
    $nombre="";

}
if($nombre=="") {
   
}else {
   echo $nombre;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="mediser.css">
    <title>Consulta</title>
</head>
<body>
   <div>
   <table border="2" >

   <tr>
   <td colspan="3" class="titulo">CONSULTAR MEDICOS</td>
   </tr>
   <tr>
   <td class="columnas" >Nombre</td>
   <td class="columnas">Apellido</td>
   <td class="columnas">Direccion</td>
   <td class="columnas">Telefono</td>
   <td class="columnas">Tipo</td>
   <td class="columnas">Salario</td>
   <td class="columnas"></td>
   
   </tr>
   <tr>
      <?php
      try{
          $sql1="SELECT * FROM hospital_medicos INNER JOIN hospital_tipos ON hospital_tipos.id_tipo = hospital_medicos.id_tipo";
          $resultado = $base->prepare($sql1);
          $resultado->execute(array());
          while ($consulta = $resultado->fetch(PDO::FETCH_ASSOC)) {
             ?> 
             <tr>
             <td class="registros"><?php echo $consulta['nombre_m'];?></td>
             <td class="registros"><?php echo $consulta['apellido_m'];?></td>
             <td class="registros"><?php echo $consulta['direccion_m'];?></td>  
             <td class="registros"><?php echo $consulta['telefono_m'];?></td> 
             <td class="registros"><?php echo $consulta['id_tipo'];?></td> 
             <td class="registros"><?php echo $consulta['salario_m'];?></td> 
             <td><a href="actualizar.php?cod=<?php echo $consulta['id_m']?>">
             <img src="img/eliminar.png" width="30px"></a></td> 
             <td><a href="actualizar.php?cod=<?php echo $consulta['id_m'] ?>">
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