<?php
include 'conexion.php';
try{
    $sql1="DELETE * FROM editorial WHERE Id=".$_REQUEST['cod2'].";";
    $resultado = $base->prepare($sql1);
    $resultado->execute(array());
    ?>
    <script type="text/javascript">window.alert("La editorial se elimono del sistema...");
    window.location="consulta_editorial.php"</script>
<?php
}catch(Exeption $e){
    die('ALERTA - se produjo un error al intentar consutar la BD...'.$e->getMessage());
     }
?>