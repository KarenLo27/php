<?php
include 'conexion.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda</title>
</head>
<body>
<form method="POST" action="" name="frm1" enctype="multipart/form-data">
    <table>
    <tr>
    <td colspan="2">..::TIENDA DE COMIDA::..</td>
    </tr>
    <tr>
    <td>Nombre:</td>
    <td><input type="text" name="txt1" required></td>
    </tr>
    <tr>
    <td>Precio:</td>
    <td><input type="text" name="txt2" required></td>
    </tr>
    <tr>
    <td>Descripcion:</td>
    <td><input type="text" name="txt3" required></td>
    </tr>
    <tr>
        <td>
            imagen:
        </td>
        <td>
            <input type="file" name="files[]">
        </td>
    </tr>
   <td colspan="2">
    <input type="submit" name="btn1" value="Registrar"></td>
    </tr>
    </table>
    </form>
    <?php
    if (isset($_POST['btn1'])) {
        $vnombre = $_POST['txt1'];
        $vprecio = $_POST['txt2'];
        $vdescripcion = $_POST['txt3'];
        $countfiles = count($_FILES['files']['name']);
        $sql= "INSERT INTO tproductos(id, nombre, precio, descripcion,imagen) VALUES  (?,?,?,?,?)";
         $resultado = $base->prepare($sql);
         for ($i = 0; $i < $countfiles; $i++){
             $filename= $_FILES['files']['name'][$i];
             $carpeta= 'img/'.$filename;
             $file_extencion= pathinfo($carpeta, PATHINFO_EXTENSION);
             $file_extencion = strtolower($file_extencion);
             $validar_extencion = array("png","jpeg","jpg");
             if(in_array($file_extencion , $validar_extencion)){
                 if(move_uploaded_file($_FILES['files']['tmp_name'][$i], $carpeta)){
                     $resultado->execute(array('',$vnombre,$vprecio,$vdescripcion, $filename, $carpeta));
                 }
             }

         }
         ?>
<script language="javascript">window.alert("Imagen subida con exito...");window.location="registro_cocina.php"</script>
        <?php

    }
    ?>
</body>
</html>