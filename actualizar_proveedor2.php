<?php
include 'conexion.php';
?>
<?php
try{
    if(isset($_POST['btna'])) {
        $nit=$_POST['txt1'];
        $nombre=$_POST['txt2'];
        $sql="UPDATE proveedor SET nit=:nit, nombrep=:nombre WHERE codigo=".$_REQUEST['new'].";";
     $resultado=$base->prepare($sql);
     $resultado->execute(array(":nit"=>$nit, ":nombre"=>$nombre));
     ?>
        <script type="text/javascript">window.alert("El proveedor se actualizo con exito...");window.
        location="consultar_proveedor.php"</script>
        <?php
    }
}catch(Exeption $e){
    die('ALERTA - se produjo  un error al querer consultar la BD...'.$e->getMessage());
}
?>