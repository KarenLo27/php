<?php
include 'conectar.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar</title>
</head>
<body>
<form method="POST" action="" name="frm1">
    <table>
    <tr>
    <td colspan="2">..::REGISTRO DE ARTISTAS::..</td>
    </tr>
    <tr>
    <td>Nombre:</td>
    <td><input type="text" name="txt1" required></td>
    </tr>
    <tr>
    <td>Pais:</td>
    <td><input type="text" name="txt2" required></td>
    </tr>
    <tr>
    <td>Estito Musical</td>
    <td><input type="text" name="txt3" required></td>
    <tr>
    </tr>
    <tr>
    <td>Año</td>
    <td><input type="number" name="txt4" required></td>
    <tr>
    </tr>
    <tr>
    <td>Integrantes</td>
    <td><input type="number" name="txt5" required></td>
    <tr>
    </tr>
    <tr>
    <td>Discos Grabados</td>
    <td><input type="number" name="txt6" required></td>
    <tr>
    </tr>
    <td colspan="2">
    <input type="submit" name="btn1" value="REGISTRAR"></td>
    </tr>
    </table>
    </form>
    <?php
    if (isset($_POST['btn1'])) {
        $vnombre = $_POST['txt1'];
        $vpais = $_POST['txt2'];
        $vestilo_musical = $_POST['txt3'];
        $vyear = $_POST['txt4'];
        $vintegrantes = $_POST['txt5'];
        $vdiscos_grabados = $_POST['txt6'];
        
        echo "$vnombre - $vpais - $vestilo_musical - $vyear - $vintegrantes - $vdiscos_grabados ";
        
        try{
            $sql= "INSERT INTO musical(`nombre`, `pais`, `estilo_musical`, `year`, `integrantes`, `discos_grabados`)
            VALUES  (:nombre,:pais,:estilo_musical,:year,:integrantes,:discos_grabados)";
            $resultado = $base->prepare($sql);
            $resultado->execute(array(":nombre"=>$vnombre,":pais"=>$vpais, ":estilo_musical"=>$vestilo_musical,":year"=>$vyear,
            ":integrantes"=>$vintegrantes, ":discos_grabados"=>$vdiscos_grabados));
            ?>
            <script language="javascript">window.alert('Los productos se registraron exitosamente.!!!')</script>
            <?php
        }catch(Exception $e){
            die('Error de conexion:  '.$e->getmessage());
        }
    }
    ?>
</body>
</html>