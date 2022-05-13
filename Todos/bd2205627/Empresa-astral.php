<?php
include 'conexion.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empresa</title>
</head>
<body>
    <table>
    <tr>
    <td colspan="2">..::REGISTRO DE EQUIPOS::..</td>
    </tr>
    <tr>
    <td>Marca:</td>
    <td><input type="text" name="txt1" required></td>
    </tr>
    <tr>
    <td>Capacidad:</td>
    <td><input type="text" name="txt2" required></td>
    </tr>
    <tr>
    <td>Color:</td>
    <td><input type="text" name="txt3" required></td>
    <tr>
    </tr>
    <tr>
    <td>Procesador:</td>
    <td><input type="text" name="txt4" required></td>
    <tr>
    </tr>
    <td colspan="1">
    <input type="submit" name="btn1" value="Guardar"></td>
    </tr>
    <p><a href="consulta_equipos.php">Registro_equipos</a></p>
<p><a href="consulta_equipos.php">Consultar_equipos</a></p>
    </table>
    <?php
    if(isset($_POST['btn1'])){
    	$vmarca_equipos = $_POST['txt1'];
    	$vcapacidad_equipos = $_POST['txt2'];
    	$vcolor_equipoS = $_POST['txt3'];
    	$vprocesador_equipos = $_POST['txt4'];
    	echo "$vmarca_equipos - $vcapacidad_equipos - $vcolor_equipos - $vprocesador_equipos ";

    	try{
    		 $sql= "INSERT INTO `empresa-astral`(`Id_equipos`, `marca_equipos`, `capacidad_equipos`, `color_equipos`, `procesador_equipos`) VALUES ('',:marca_equipos, :capacidad_equipos, :color_equipos, :procesador_equipos)";
    		 $resultado = $base -> prepare($sql);
    		  $resultado->execute(array(":marca_equipos"=>$vmarca_equipos, ":capacidad_equipos"=>$vcapacidad_equipos, ":color_equipos"=>$vcolor_equipos, ":procesador_equipos"=>$vprocesador_equipos));
    		  ?>
            <script language="javascript">window.alert('Los libros se registraron exitosamente!!!')</script>
            <?php
        }catch(Exception $e){
            die('Error de conexion:  '.$e->getmessage());
        }
    }
    ?>
    	</body>
</html>