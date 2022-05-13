<?php
include 'conexion.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar</title>
</head>
<body>
<form method="POST" action="" name="frm1">
    <table>
    <tr>
    <td colspan="2">..::PROVEEDOR::..</td>
    </tr>
    <tr>
    <td>Nombre:</td>
    <td><input type="text" name="txt1" required></td>
    </tr>
    <tr>
    <td>Nit:</td>
    <td><input type="text" name="txt2" required></td>
    </tr>
    <td colspan="2">
    <input type="submit" name="btn1" value="Registrar"></td>
    </tr>
    </table>
    </form>
    <?php
    if (isset($_POST['btn1'])) {
        $vnombre = $_POST['txt1'];
        $vnit = $_POST['txt2'];
        echo "$vnombre - $vnit ";
        
        try{
            $sql= "INSERT INTO proveedor(`codigo`, `nit`, `nombre`) VALUES('',:nit,:nombre)";
            $resultado = $base->prepare($sql);
            $resultado->execute(array(":nit"=>$vnit,":nombre"=>$vnombre));
            ?>
            <script language="javascript">window.alert('El proveedor se registro con exito!!!')</script>
            <?php
        }catch(Exception $e){
            die('Error de conexion:  '.$e->getmessage());
        }
    }
    ?>
</body>
</html>