<?php
require ('conexion.php');
session_start();
if(isset($_SESSION["nombre"])){
    $nombre=$_SESSION["nombre"];

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
    <link rel="stylesheet" type="text/css" href="actualizarproyecto.css">
    <title>Consulta</title>
</head>
<body>
   <div>
   <table border="2" >

   <tr>
   <td colspan="3" class="titulo">CONSULTA PRODUCTOS</td>
   </tr>
   <tr>
   <td class="columnas" >Nombre</td>
   <td class="columnas">Descripcion</td>
   <td class="columnas">Valor</td>
   <td class="columnas">Stock</td>
   <td class="columnas">Categoria</td>
   <td class="columnas">Fk_provedor</td>
   <td class="columnas"></td>
   
   </tr>
   <tr>
      <?php
      try{
          $sql1="SELECT * FROM productos INNER JOIN proveedor ON proveedor.codigo = productos.fk_provedor";
          $resultado = $base->prepare($sql1);
          $resultado->execute(array());
          while ($consulta = $resultado->fetch(PDO::FETCH_ASSOC)) {
             ?> 
             <tr>
             <td class="registros"><?php echo $consulta['nombre'];?></td>
             <td class="registros"><?php echo $consulta['descripcion'];?></td>
             <td class="registros"><?php echo $consulta['valor'];?></td>  
             <td class="registros"><?php echo $consulta['stock'];?></td> 
             <td class="registros"><?php echo $consulta['categoria'];?></td> 
             <td class="registros"><?php echo $consulta['nombrep'];?></td> 
             <td><a href="actualizar_productos.php?cod=<?php echo $consulta['codigo_pdto']?>">
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