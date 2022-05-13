<?php
include 'conexion.php';
include 'carrito.php';
include 'cabecera.php';
?>
            <div class="contenedor1">
     <?php
      try{
          $sql1="SELECT * FROM tproductos";
          $resultado = $base->prepare($sql1);
          $resultado->execute(array());
          while ($consulta = $resultado->fetch(PDO::FETCH_ASSOC)) {
             ?> 
            <div  class="contenedor2">

           
            <div class="imagen"><img src="<?=$consulta['imagen']?>" title="<?=$consulta['imagen']?>" width="280" height="230"> </div>
            <div class="registros"><?php echo ""." ". $consulta['nombre'];?></div>  
            <div class="container"><?php echo ""." ". $consulta['precio'];?></div>
            <div class="registros"><?php echo ""." ". $consulta['descripcion'];?></div>
            
            <form  method="POST" action="">
                <input type="hidden" name="id" id="id" value="<?php echo $consulta['id'];?>">
                <input type="hidden" name="nombre" id="nombre" value="<?php echo $consulta['nombre'];?>">
                <input type="hidden" name="precio" id="precio" value="<?php echo $consulta['precio'];?>">
                <input type="hidden" name="cantidad" id="cantidad" value="<?php echo 1 ?>">
                <div class="boton">
                    <button name="carro" type="submit" value="Agregar" class="botoncarro">Agregar al carrito</button></div>
            </form>
             </div>
            <?php 
            }  
          }catch(Exeption $e){
              die('ALERTA - se produjo un error al intentar consutar la BD...'.$e->getMessage());
          }
      ?>
   </div>
   
  <?php
  include 'pie.php'; 
  ?>
