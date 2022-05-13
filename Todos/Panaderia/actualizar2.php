<?php
include 'conexion.php';
?>
<?php
try{
    if(isset($_POST['btna'])) {
        $nombre=$_POST['txt1'];
        $peso=$_POST['txt2'];
        $ingredientes=$_POST['txt3'];
        $valor=$_POST['txt4'];
        $sql="UPDATE mario_pan SET nombre=:nombre, peso=:peso, ingredientes=:ingredientes, 
           valor=:valor   WHERE id_panaderia=".$_REQUEST['new'].";";
        $resultado=$base->prepare($sql);
        $resultado->execute(array(":nombre"=>$nombre, ":peso"=>$peso, ":ingredientes"=>$ingredientes, ":valor"=>$valor));
        ?>
        <script type="text/javascript">window.alert("El producto se actualizo con exito...");window.
        location="consulta.php"</script>
        <?php
    }
}catch(Exeption $e){
    die('ALERTA - se produjo  un error al querer consultar la BD...'.$e->getMessage());
}
?>