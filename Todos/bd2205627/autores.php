<?php
include 'conexion.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de libros ADSI 2205627</title>
</head>
<body>
<form method="POST" action="" name="frm1">
    <table>
    <tr>
    <td colspan="2">..::AUTORES::..</td>
    </tr>
    <tr>
    <td>Nombre:</td>
    <td><input type="text" name="txt1" required></td>
    </tr>
    <tr>
    <td>Apellidos:</td>
    <td><input type="text" name="txt2" required></td>
    </tr>
    <tr>
    <td>Fecha: </td>
    <td><input type="date" name="txt3" required></td>
    <tr>
    </tr>
    <td>Nacionalidad: </td>
    <td><input type="text" name="txt4" required></td>
    <tr>
    </tr>
    <td colspan="2">
    <input type="submit" name="btn1" value="GUARDAR"></td>
    </tr>
    </table>
    </form>
    <?php
    if (isset($_POST['btn1'])) {
        $vnombres_li = $_POST['txt1'];
        $vapellidos = $_POST['txt2'];
        $vfecha = $_POST['txt3'];
        $vnacionalidad = $_POST['txt4'];
        echo " $ $vnombres_li - $vapellidos -$vfecha - $vnacionalidad ";
        
        try{
            $sql= "INSERT INTO autores(`id_autores`, `nombres_li`, `apellidos`, `fecha`, `nacionalidad`) 
            VALUES('',:nombres_li,:apellidos,:fecha,:nacionalidad)";
              $resultado = $base->prepare($sql);
            $resultado->execute(array(":nombres_li"=>$vnombres_li,":apellidos"=>$vapellidos,":fecha"=>$vfecha,":nacionalidad"=>$vnacionalidad));
            ?>
            <script language="javascript">window.alert('Autores registrado exitosamente!!!')</script>
            <?php
        }catch(Exception $e){
            die('Error de conexion:  '.$e->getmessage());
        }
    }
    ?>
</body>
</html>