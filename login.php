<?php
require ('conexion.php');
session_start();
if (isset($_POST["btni"])){
    if (empty($_POST["txtu"]) || empty($_POST["txtp"])) {
        ?>
        <script type="text/javascript">window.alert("Usuario y contraseña son necesarios!!!")</script>
        <?php
    }else{
        $sql="SELECT * FROM usuario WHERE nombre=:usuario AND contrasena=:contrasena";
        $resul=$base->prepare($sql);
        $resul->execute(array(":usuario"=>$_POST["txtu"],":contrasena"=>$_POST["txtp"]));
        while($consulta=$resul->fetch(PDO::FETCH_ASSOC)){
            $_session["nombre"]=$consulta["nombre"];
        }
        $verificar=$resul->rowCount();
        if($verificar > 0){
            header("location:bienvenido.php");
        }else{
            ?>
            <script language='javascript'>window.alert("Datos erroneos!!!")</script>
            <?php
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="actualizarproyecto.css">
    <link rel="stylesheet" href="css/login.css">
    <title>Demostracion Sesiones</title>
</head>
<body>
<div class="login-1">
       <img src="img/rojo.jpg" class="avatar">
<form action="" method="POST">
    <table>
        <tr>
            <td colspan="2" aling="center">.::INGRESO::..</td>
        </tr>
        <tr>
            <td>Usuario:</td>
            <td><input type="text" name="txtu" placeholder="Usuario..." required></td>
        </tr>
        <tr>
            <td>Password:</td>
            <td><input type="password" name="txtp" placeholder="contraseña..." require></td>
        </tr>
        <tr>
            <td colspan="2" align="center">
                <input type="submit" name="btni" value=".::Ingresar::.">
            </td>
        </tr>
    </table>
    </form>
    </div>
</body>
</html>
