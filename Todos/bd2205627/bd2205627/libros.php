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
    <td colspan="2">..::REGISTRO DE LIBROS::..</td>
    </tr>
    <tr>
    <td>Nombre:</td>
    <td><input type="text" name="txt1" required></td>
    </tr>
    <tr>
    <td>Numero de paginas:</td>
    <td><input type="number" name="txt2" required></td>
    </tr>
    <tr>
    <td>Descripcion:</td>
    <td><input type="text" name="txt3" required></td>
    </tr>
    <tr>
    <td colspan="2">
    <input type="submit" name="btn1" value="GUARDAR"></td>
    </tr>
    </table>
    </form>
    <?php
    if (isset($_POST['btn1'])) {
        $vnombres_li = $_POST['txt1'];
        $vpagina_li = $_POST['txt2'];
        $vdescri = $_POST['txt3'];
        echo "$vnombres_li - $vpagina_li - $vdescri ";
        
        try{
            $sql= "INSERT INTO libros (`id_libros` , `nombres_li` , `pagina_li` , `descripciones`)
            VALUES ('',:nombres_li,:pagina_li,:descripciones)";
            $resultado = $base->prepare($sql);
            $resultado->execute(array(":nombres_li"=>$vnombres_li,":pagina_li"=>$vpagina_li,":descripciones"=>$vdescri));
            ?>
            <script language="javascript">window.alert('Libro registrado exitosamente!!!')</script>
            <?php
        }catch(Exception $e){
            die('Error de conexion:  '.$e->getmessage());
        }
    }
    ?>
</body>
</html>