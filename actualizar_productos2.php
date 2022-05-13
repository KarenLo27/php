<?php
include 'conexion.php';
?>
<?php
try{
    if(isset($_POST['btna'])) {
        $nombre=$_POST['txt1'];
        $descripcion=$_POST['txt2'];
        $valor=$_POST['txt3'];
        $stock=$_POST['txt4'];
        $categoria=$_POST['txt5'];
        $fk_provedor=$_POST['txt6'];
        $sql="UPDATE productos SET nombre=:nombre, descripcion=:descripcion, valor=:valor, 
           stock=:stock, categoria=:categoria,  fk_provedor=:fk_provedor  WHERE codigo_pdto=".$_REQUEST['new'].";";
        $resultado=$base->prepare($sql);
        $resultado->execute(array(":nombre"=>$nombre, ":descripcion"=>$descripcion, ":valor"=>$valor, 
        ":stock"=>$stock, ":categoria"=>$categoria, ":fk_provedor"=>$fk_provedor));
        ?>
        <script type="text/javascript">window.alert("El producto se actualizo con exito...");window.
        location="consultar_productos.php"</script>
        <?php
    }
}catch(Exeption $e){
    die('ALERTA - se produjo  un error al querer consultar la BD...'.$e->getMessage());
}
?>