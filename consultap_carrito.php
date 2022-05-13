<?php
include 'conexion.php';
include 'carrito_p.php';
include 'cabecera.php';
?>
<div class="contenedor">
      <?php
      try{
          $sql1="SELECT * FROM productos inner join proveedor on codigo=fk_provedor";
          $resultado = $base->prepare($sql1);
          $resultado->execute(array());
          while ($consulta = $resultado->fetch(PDO::FETCH_ASSOC)) {
             ?> 
            <table class="producto">
               <tr>
                  <td><img src="./subir/<?=$consulta['subir']?>" width="200"></td>
               </tr>
               <tr>
                  <td><?php echo "Nombre:"." ". $consulta['nombre'];?></td>
               </tr>
               <tr>
                  <td><?php echo "Descripcion:"." ". $consulta['descripcion'];?></td>
               </tr>
               <tr>
                  <td><?php echo "Valor:"." ". $consulta['valor'];?></td>
               </tr>
               <tr>
                  <td><?php echo "Stock:"." ". $consulta['stock'];?></td>
               </tr>
               <tr>
                  <td><?php echo "Categoria:"." ". $consulta['categoria'];?></td>
               </tr>
               <tr>
                  <td><?php echo "Proveedor:"." ". $consulta['fk_provedor'];?></td>
               </tr>
               <tr>
                  <td><button type="submit" value="Agregar" name="btncomprar">Comprar</button></td>
               </tr>
               <form  method="POST" action="">
                <input type="hidden" name="codigo" id="codigo_pdto" value="<?php echo $consulta['codigo_pdto'];?>">
                <input type="hidden" name="nombre" id="nombre" value="<?php echo $consulta['nombre'];?>">
                <input type="hidden" name="descripcion" id="descripcion" value="<?php echo $consulta['descripcion'];?>">
                <input type="hidden" name="valor" id="valor" value="<?php echo $consulta['valor'];?>">
                <input type="hidden" name="stock" id="stock" value="<?php echo $consulta['stock'];?>">
                <input type="hidden" name="categoria" id="categoria" value="<?php echo $consulta['categoria'];?>">
                <input type="hidden" name="proveedor" id="fk_proveedor" value="<?php echo $consulta['nombrep'];?>">
                <input type="hidden" name="cantidad" id="cantidad" value="<?php echo 1?>">
                <div class="boton">
                    <button name="carro" type="submit" value="Agregar" class="botoncarro">Agregar al carrito</button>
               </div>
            </form>
           
            </table>      
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

