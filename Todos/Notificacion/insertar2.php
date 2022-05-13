<?php
include 'conexion.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Interfaz Grafica</title>
</head>
<body>
<form method="POST" action="" name="frm1">
    <table class="box">
    <tr>
    <td colspan="2" class="titulo">..::ESCRIBIR Y ENVIAR MENSAJE::..</td>
    </tr>
    <tr>
    <td >ASUNTO::</td>
    <td><input type="text" name="txt1" required></td>
    </tr>
    <tr>
    <td>MENSAJE:</td>
    <td><input type="text" name="txt2" required></td>
    </tr>
    <td colspan="2">
    <input type="submit" name="btn1" value="ENVIAR"></td>
    </tr>
    </table>
    </form>
    <?php
    if (isset($_POST['btn1'])) {
        $vasu_men = $_POST['txt1'];
        $vcon_men = $_POST['txt2'];
        $vest_men="Pendiente";

        try{
            $sql= "INSERT INTO interfaz(`id_men`, `asu_men`, `con_men`, `est_men`) VALUES
             ('',:asu,:con,:est )";
            $resultado = $base->prepare($sql);
            $resultado->execute(array(":asu"=>$vasu_men,":con"=>$vcon_men,":est"=>$vest_men));
            ?>
            <script language="javascript">window.alert('La interfaz se registro con exito!!!')</script>
            <?php
        }catch(Exception $e){
            die('Error de conexion:  '.$e->getmessage());
        }
    }
    ?>
</body>
</html>