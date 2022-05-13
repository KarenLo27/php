<?php
include 'conexion.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editorial</title>
</head>
<body>
<form method="POST" action="" name="frm1">
    <table>
    <tr>
    <td colspan="2">..::EDITORIAL::..</td>
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
    <td>Year_fabricacion</td>
    <td><input type="number" name="txt3" required></td>
    <tr>
    </tr>
    <td colspan="2">
    <input type="submit" name="btn1" value="GUARDAR"></td>
    </tr>
    </table>
    </form>
    <?php
    if (isset($_POST['btn1'])) {
        $vnombre = $_POST['txt1'];
        $vpais = $_POST['txt2'];
        $vyear_fabricacion = $_POST['txt3'];
        echo "$vnombre - $vpais - $vyear_fabricacion ";
        
        try{
            $sql= "INSERT INTO editorial(`Id`, `Nombre`, `Pais`, `year_fabricacion`)
            VALUES  ('',:nombre,:pais,:year)";
            $resultado = $base->prepare($sql);
            $resultado->execute(array(":nombre"=>$vnombre,":pais"=>$vpais,":year"=>$vyear_fabricacion));
            ?>
            <script language="javascript">window.alert('La editorial se registro exitosamente!!!')</script>
            <?php
        }catch(Exception $e){
            die('Error de conexion:  '.$e->getmessage());
        }
    }
    ?>
</body>
</html>