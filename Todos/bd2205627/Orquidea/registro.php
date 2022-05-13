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
    <td colspan="2">..::BEBIDAS::..</td>
    </tr>
    <tr>
    <td>Nombre:</td>
    <td><input type="text" name="txt1" required></td>
    </tr>
    <tr>
    <td>Ingredientes:</td>
    <td><input type="text" name="txt2" required></td>
    </tr>
    <tr>
    <td>Descripcion: </td>
    <td><input type="text" name="txt3" required></td>
    <tr>
    </tr>
    <td>Valor: </td>
    <td><input type="text" name="txt4" required></td>
    <tr>
    </tr>
    <td colspan="2">
    <input type="submit" name="btn1" value="REGISTRAR"></td>
    </tr>
    </table>
    </form>
    <?php
    if (isset($_POST['btn1'])) {
        $vNombre = $_POST['txt1'];
        $vIngredientes = $_POST['txt2'];
        $vDescripcion = $_POST['txt3'];
        $vValor = $_POST['txt4'];
        echo " $ $vNombre - $vIngredientes-$vDescripcion - $vValor ";
        
        try{
            $sql= "INSERT INTO bebidas(id_bebidas, Nombre, Ingredientes, Descripción, Valor)
            VALUES('',:Nombre,:Ingredientes,:Descripcion,:Valor)";
              $resultado = $base->prepare($sql);
            $resultado->execute(array(":Nombre"=>$vNombre,":Ingredientes"=>$vIngredientes,":Descripcion"=>$vDescripcion,":Valor"=>$vValor));
            ?>
            <script language="javascript">window.alert('Las bebidas se registraron exitosamente!!!')</script>
            <?php
        }catch(Exception $e){
            die('Error de conexion:  '.$e->getmessage());
        }
    }
    ?>
</body>
</html>