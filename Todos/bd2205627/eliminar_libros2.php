<?php
include 'conexion.php';
try{
    $sql1="DELETE * FROM libros WHERE Id=".$_REQUEST['cod2'].";";
    $resultado = $base->prepare($sql1);
    $resultado->execute(array());
    ?>
    <script type="text/javascript">window.alert("Libros se elimono del sistema...");
    window.location="consulta_libros.php"</script>
<?php
}catch(Exeption $e){
    die('ALERTA - se produjo un error al intentar consutar la BD...'.$e->getMessage());
     }
?>