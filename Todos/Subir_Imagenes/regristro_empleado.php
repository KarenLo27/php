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
<form method="POST" action="" name="frm1" enctype="multipart/form-data">
    <table>
    <tr>
    <td colspan="2">..::REGISTRO DE EMPLEADOS::..</td>
    </tr>
    <tr>
    <td>Nombre:</td>
    <td><input type="text" name="txt1" required></td>
    </tr>
    <tr>
    <td>Apellido:</td>
    <td><input type="text" name="txt2" required></td>
    </tr>
    <tr>
    <td>Edad:</td>
    <td><input type="text" name="txt3" required></td>
    <tr>
    </tr>
    <tr>
    <td>Fecha de nacimiento:</td>
    <td><input type="date" name="txt4" required></td>
    <tr>
    </tr>
    <tr>
    <td>Fotografia</td>
    <td><input type="file" name="files[]"></td>
    </tr>
    <tr>
    <td>Sexo</td>
    <td>
   <select name="txt6" >
        <option >Define tu sexo</option>
        <option value="Masculino">Hombre</option>
        <option value="Femenino">Mujer</option>
        <option value="NoEspecifico">No especifico</option>
   </select>
   </td>
   </tr>
    <tr>
    <td>Titulo profesional</td>
    <td><input type="text" name="txt7" required></td>
    <tr>
    <tr>
    <td>Perfil</td>
    <td><input type="text" name="txt8" required></td>
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
        $vapellido = $_POST['txt2'];
        $vedad = $_POST['txt3'];
        $vfecha_nacimiento = $_POST['txt4'];
        $vsexo = $_POST['txt6'];
        $vtitulo_profesional = $_POST['txt7'];
        $vperfil = $_POST['txt8'];
        $countfiles = count($_FILES['files']['name']);
        $sql= "INSERT INTO empleado (nombre, apellido, edad, fecha_nacimiento, fotografia, sexo, titulo_profesional, perfil, imagen)
        VALUES  (?,?,?,?,?,?,?,?,?)";
         $resultado = $base->prepare($sql);
         for ($i = 0; $i < $countfiles; $i++){
             $filename= $_FILES['files']['name'][$i];
             $carpeta= 'subir/'.$filename;
             $file_extencion= pathinfo($carpeta, PATHINFO_EXTENSION);
             $file_extencion = strtolower($file_extencion);
             $validar_extencion = array("png","jpeg","jpg");
             if(in_array($file_extencion , $validar_extencion)){
                 if(move_uploaded_file($_FILES['files']['tmp_name'][$i], $carpeta)){
                     $resultado->execute(array($vnombre, $vapellido, $vedad, $vfecha_nacimiento, $filename, $vsexo,$vtitulo_profesional, $vperfil, $carpeta));
                 }
             }

         }
         ?>
<script language="javascript">window.alert("Imagen subida con exito...");window.location="regristro_empleado.php"</script>
        <?php

    }
    ?>
</body>
</html>