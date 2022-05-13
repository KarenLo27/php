<?php
include 'conexion.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
      <script src="https://kit.fontawesome.com/47910d8a72.js" crossorigin="anonymous"></script>
    <title>Carrito de Compras</title>
</head>
<body>
   <tr>
      <?php
      try{
          $sql1="SELECT * FROM productos";
          $resultado = $base->prepare($sql1);
          $resultado->execute(array());
          while ($consulta = $resultado->fetch(PDO::FETCH_ASSOC)) {
             ?> 
             <div style="text-align:center";>
            
            <tr>
            <td colspan="3" class="titulo">CARRITO DE COMPRAS</td>
            </tr>
            <table  style="margin: 0 auto" width="50%" ;>
            
             <tr>
                <td ><img src="./subir/<?=$consulta['imagen']?>" width="200"> 
             </tr>
             <tr><?php echo "Nombre:"." ". $consulta['nombre'];?></td>  
             </tr>
             <tr>
             <td ><?php echo "Descripcion:"." ". $consulta['descripcion'];?></td>
             </tr>
             <tr>
             <td ><?php echo "Valor:"." ". $consulta['valor'];?></td>  
             </tr>
             <tr>
             <td ><?php echo "Stock:"." ". $consulta['stock'];?></td> 
             </tr>
             <tr>
             <td ><?php echo "Categoria:"." ". $consulta['categoria'];?></td> 
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