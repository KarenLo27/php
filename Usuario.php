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
    <td colspan="2">..::USUARIO::..</td>
    </tr>
    <tr>
    <td>Identificacion:</td>
    <td><input type="number" name="txt1" required></td>
    </tr>
    <tr>
    <td>Nombre:</td>
    <td><input type="text" name="txt2" required></td>
    </tr>
    <tr>
    <td>Telefono:</td>
    <td><input type="text" name="txt3" required></td>
    </tr>
    <tr>
    <td>Tipo_usuario:</td>
    <td>
    <select name="txt4">
        <option value="cliente">Cliente</option>
        <option value="administrador">Administrador</option>
    </select>
    </td>
    </tr>
    <tr>
    <td>Direccion:</td>
    <td><input type="text" name="txt5" required></td>
    </tr>
    <tr>
    <td>Usuario:</td>
    <td><input type="text" name="txt6" required></td>
    </tr>
    <tr>
    <td>Contraseña:</td>
    <td><input type="text" name="txt7" required></td>
    </tr>
    <td colspan="2">
    <input type="submit" name="btn1" value="Registrar"></td>
    </tr>
    </table>
    </form>
    <?php
    if (isset($_POST['btn1'])) {
        $videntificacion = $_POST['txt1'];
        $vnombre = $_POST['txt2'];
        $vtelefono = $_POST['txt3'];
        $vtipo_usuario = $_POST['txt4'];
        $vdireccion = $_POST['txt5'];
        $vusuario = $_POST['txt6'];
        $vcontrasena = $_POST['txt7'];
        echo " $videntificacion -$vnombre - $vtelefono - $vtipo_usuario - $vdireccion - $vusuario - $vcontrasena";
        
        try{
            $sql= "INSERT INTO usuario(`pk_identificacion`, `nombre`, `telefono`, `tipo_usuario`, `direccion`, `usuario`, `contrasena`)
             VALUES (:identificacion, :nombre, :telefono, :tipo_usuario, :direccion, :usuario, :contrasena)";
            $resultado = $base->prepare($sql);
            $resultado->execute(array(":identificacion"=>$videntificacion,  ":nombre"=>$vnombre,":telefono"=>$vtelefono, ":tipo_usuario"=>$vtipo_usuario, 
            ":direccion"=>$vdireccion, ":usuario"=>$vusuario, ":contrasena"=>$vcontrasena));
            ?>
            <script language="javascript">window.alert('El usuario se registro con exito!!!')</script>
            <?php
        }catch(Exception $e){
            die('Error de conexion:  '.$e->getmessage());
        }
    }
    ?>
</body>
</html>