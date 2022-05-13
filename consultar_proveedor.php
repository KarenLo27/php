<?php
require ('conexion.php');
session_start();
if(isset($_SESSION["nombrep"])){
    $nombre=$_SESSION["nombrep"];

}else{
    $nombrep="";

}
if($nombrep=="") {
   
}else {
   echo $nombrep;
}
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
   <table border="2">
   <tr>
   <td colspan="3" class="titulo">CONSULTA PROVEEDOR</td>
   </tr>
   <tr>
   <td class="columnas" >Nit</td>
   <td class="columnas">Nombre</td>
   <td class="columnas"></td>
   
   </tr>
   <tr>
      <?php
      try{
          $sql1="SELECT * FROM proveedor";
          $resultado = $base->prepare($sql1);
          $resultado->execute(array());
          while ($consulta = $resultado->fetch(PDO::FETCH_ASSOC)) {
             ?> 
             <tr>
             <td class="registros"><?php echo $consulta['nit'];?></td>
             <td class="registros"><?php echo $consulta['nombrep'];?></td>
             <td><a href="actualizar_proveedor.php?cod=<?php echo $consulta['codigo']?>">
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