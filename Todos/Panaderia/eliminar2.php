<?php
include 'conexion.php';
try{
    $sql1="DELETE  FROM mario_pan WHERE id_panaderia=".$_REQUEST['cod2'].";";
    $resultado = $base->prepare($sql1);
    $resultado->execute(array());
    ?>
    <script type="text/javascript">window.alert("El producto se elimino con exito...");
    window.location="consulta.php"</script>
<?php
}catch(Exeption $e){
    die('ALERTA - se produjo un error al intentar consutar la BD...'.$e->getMessage());
     }
?>