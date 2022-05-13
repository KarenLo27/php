<?php
include 'conexion.php';
include 'carrito_p.php';
include 'cabecera.php';
?>

<h3 >Lista de Productos</h3>
<?php
if(!empty($_SESSION['CARRITO'])){
    ?>
    <table class="class-colspan">
        <tbody>
        <tr>
                <th width="20%">Nombre</th>
                <th width="20%">Descripcion</th>
                <th width="14%">Valor</th>
                <th width="14%">Cantidad</th>
                <th width="14%">Categoria</th>
                <th width="14%">Fk_provedor</th>
                <th width="14%">Total</th>
                <th width="4%">--</th>
            </tr>
            <?php
            $total=0;
            foreach($_SESSION['CARRITO'] as $indice=>$producto ){
                ?>
                <tr>
                    <td width="20%"><?php echo $producto['NOMBRE'];?></td>
                    <td width="20%"><?php echo $producto['DESCRIPCION'];?></td>
                    <td width="14%"><?php echo $producto['VALOR'];?></td>
                    <td width="14%"><?php echo $producto['CANTIDAD'];?></td>
                    <td width="14%"><?php echo $producto['CATEGORIA'];?></td>
                    <td width="14%"><?php echo $producto['PROVEDOR'];?></td>
                    <td width="4%"><?php echo number_format($producto['VALOR']*$producto['CANTIDAD'],3);?></td>
                   <td>
                    <form action="" method="POST">
                        <input type="hidden"
                        name="id" 
                        id="id"
                        value="<?php echo $producto['CODIGO'];?>">
                        
                        <button type="submit"
                        name="carro"
                        value="Eliminar"
                        class="eliminarB">Eliminar</button>
                    </form>
                    </td>
                </tr>
                <?php
                $total=($total + ($producto['VALOR']*$producto['CANTIDAD']));
            }
            ?>
            <tr>

                <td colspan="3" aling="rigth"><h3>Total a Pagar</h3></td>
                <td colspan="2" aling="left"><h3><?php echo number_format($total,3); ?></h3></td><br>
               
                </tr>
            <tr>
                <td colspan="5">
                    <form action="pagar.php"  method="POST">
                        <div class="alert alert-success">
                            <div class="form-group">
                                <label for="my-input">Correo de contacto:</label>
                                <input id="email"
                                name="email"
                                class="form-control"
                                placeholder="Por favor escriba su correo"
                                require
                                type="email">
                            </div>
                                 <small id="emailHelp"
                                 class="form-text text-muted">
                                 Los productos se enviaran a su coreo..
                                 </small>
                            </div>
                                 <button class="btn btn-primary"
                                 name="btnaccion"
                                 value="Proceder"
                                 type="submit">
                                 Proceder a pagar >>
                                 </button>
                       
                    </form>

                </td>
            </tr>
        </tbody>
    </table>
    <?php
}else{
    echo "No se ven los productos.";
}

include 'pie.php'; 
?>

