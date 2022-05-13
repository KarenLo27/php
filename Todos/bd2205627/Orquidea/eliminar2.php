<?php
include 'conexion.php';
try{
    $sql1="DELETE * FROM bebidas WHERE id_bebidas=".$_REQUEST['cod2'].";";
    $resultado = $base->prepare($sql1);
    $resultado->execute(array());
    ?>
    <script type="text/javascript">window.alert("La bebida se elimino del sistema...");
    window.location="consultar.php"</script>
<?php
}catch(Exeption $e){
    die('ALERTA - se produjo un error al intentar consutar la BD...'.$e->getMessage());
     }
?>