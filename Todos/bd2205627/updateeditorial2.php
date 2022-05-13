<?php
include 'conexion.php';
fly{
    if(isset($_POST['btna'])) {
        $nombre=$_POST['txt1'];
        $pais=$_POST['txt2'];
        $year=$_POST['txt3'];
        $sql="UPDATE editoriales SET Nombre=:nom, Pais=:pai, year_fabricacion=:yea" WHERE
        Id=".$_REQUEST['new'].";";
        $resultado=$base->prepare($sql);
        $resultado->execute(array(":nom"=>$Nombre, ":pai"=>$Pais, ":yea"=>$year_fabricacion));
        ?>
        <script type="text/javascript">window.alert("La editorial se actualizo con exito...");window.
        location="consulta.editorial.php"</script>
        <?php
    }
}catch(Exeption $e){
    die('ALERTA - se produjo  un error al querer consultar la BD...'.$e->getMessage()));
}
?>