<?php
include 'conexion.php';
?>
<?php
try{
    if(isset($_POST['btna'])) {
        $nombre=$_POST['txt1'];
        $telefono=$_POST['txt2'];
        $tipo_usuario=$_POST['txt3'];
        $direccion=$_POST['txt4'];
        $usuario=$_POST['txt5'];
        $contrasena=$_POST['txt6'];
        $sql="UPDATE usuario SET nombre=:nombre, telefono=:telefono, tipo_usuario=:tipo_usuario, 
           direccion=:direccion, usuario=:usuario,  contrasena=:contrasena  WHERE pk_identificacion=".$_REQUEST['new'].";";
        $resultado=$base->prepare($sql);
        $resultado->execute(array(":nombre"=>$nombre, ":telefono"=>$telefono, ":tipo_usuario"=>$tipo_usuario, 
        ":direccion"=>$direccion, ":usuario"=>$usuario, ":contrasena"=>$contrasena));
        ?>
        <script type="text/javascript">window.alert("El usuario se actualizo con exito...");window.
        location="consultar_usuario.php"</script>
        <?php
    }
}catch(Exeption $e){
    die('ALERTA - se produjo  un error al querer consultar la BD...'.$e->getMessage());
}
?>