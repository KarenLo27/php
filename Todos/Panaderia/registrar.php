<?php
include 'conexion.php';
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
    <td colspan="2">..::REGISTRAR PRODUCTOS::..</td>
    </tr>
    <tr>
    <td>Nombre:</td>
    <td><input type="text" name="txt1" required></td>
    </tr>
    <tr>
    <td>Peso:</td>
    <td><input type="number" name="txt2" required></td>
    </tr>
    <tr>
    <td>Ingredientes</td>
    <td><input type="text" name="txt3" required></td>
    <tr>
    </tr>
    <tr>
    <td>Valor</td>
    <td><input type="number" name="txt4" required></td>
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
        $vpeso = $_POST['txt2'];
        $vingredientes = $_POST['txt3'];
        $vvalor = $_POST['txt4'];
        echo "$vnombre - $vpeso - $vingredientes - $vvalor";
        
        try{
            $sql= "INSERT INTO mario_pan(`id_panaderia`, `nombre`, `peso`, `ingredientes`, `valor`)
            VALUES  ('',:nombre,:peso,:ingredientes,:valor)";
            $resultado = $base->prepare($sql);
            $resultado->execute(array(":nombre"=>$vnombre,":peso"=>$vpeso,":ingredientes"=>$vingredientes,":valor"=>$vvalor));
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