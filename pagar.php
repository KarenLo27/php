<?php
include 'conexion.php';
include 'carrito_p.php';
include 'cabecera.php';
?>

<?php
if($_POST){
    $total=0;
    $SCODIGO=session_id();
    $correo=$_POST['email'];
    foreach($_SESSION['CARRITO'] as $indice=>$producto){
        $total=$total+($producto['VALOR']*$producto['CANTIDAD']);
    }
    $sql= "INSERT INTO `tventas`(`id_v`, `clave_v`, `fecha_v`, `correo_v`, `total_v`, `status_v`) 
    VALUES (NULL, :clave, NOW(), :correo, :total, 'Pendiente');";
    $resultado=$base->prepare($sql);
    $resultado->execute(array(":clave"=>$SCODIGO,":correo"=>$correo,":total"=>$total));

    $idventa=$base->lastInsertId();
    foreach($_SESSION['CARRITO'] as $indice=>$producto){

    $sql2="INSERT INTO `tdetalleventa`(`id_d`, `id_venta`, `id_producto`, `precio_unitario`, `cantidad`, `descargado`) 
    VALUES (NULL, :IDVENTA, :IDPRODUCTO, :VALOR, :CANTIDAD, '0');";
    $resultado2=$base->prepare($sql2); 
    $resultado2->execute(array(":IDVENTA"=>$idventa, ":IDPRODUCTO"=>$producto['CODIGO'], ":VALOR"=>$producto['VALOR'], ":CANTIDAD"=>$producto['CANTIDAD']));   
     }
}
?>
<div class="class-pasofinal">
    <h1>  Paso final! </h1>
    <hr class="my-4">
    <p class="registro">Tu compra ha sido registrada
        <h4 class="class-peso"><?php echo number_format($total,3)."Pesos"; ?></h4>
    </p>
    <p>Los productos se alistaran para su envio...</p>

</div>
<form action="eliminar.php" method="POST">
<button
    class="btn btn-primary btn-lg btn-block"
    type="submit"
    name="btnr"
    value="Procesar">
    Regresar a la tienda...
</button>

</form>
<?php

include 'pie.php'; 
?>