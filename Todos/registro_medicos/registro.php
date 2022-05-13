<?php
include 'conexion.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="mediser.css">
    <title>registro</title>
</head>
<body>
<div>
   <table border="2" >
<form method="POST" action="" name="frm1">
    <table>
    <tr>
    <td colspan="2">..::REGISTROS MEDICOS:..</td>
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
    <td>Cedula:</td>
    <td><input type="text" name="txt3" required></td>
    </tr>
    <tr>
    <td>Direccion:</td>
    <td><input type="text" name="txt4" required></td>
    </tr>
    <tr>
    <td>Telefono:</td>
    <td><input type="text" name="txt5" required></td>
    </tr>
    <tr>
    <td>Tipo:</td>
    <td> 
    <select name="txt5" >
    <option >Seleccione el tipo</option>
   <option value="medico">Medico general</option>
   <option value="especialista">Medico especialista</option>
   </select>
   </td>
   </tr>
    <tr>
    <td>Salario:</td>
    <td><input type="text" name="txt6" required></td>
    </tr>
    <tr>
    <td colspan="2">
    <input type="submit" name="btn1" value="Guardar"></td>
    </tr>
    </table>
    </form>
     </div>
    <?php
    if (isset($_POST['btn1'])) {
        $vnombre_m = $_POST['txt1'];
        $vapellido_m = $_POST['txt2'];
        $vdireccion_m = $_POST['txt3'];
        $vtelefono_m = $_POST['txt4'];
        $vid_tipo = $_POST['txt5'];
        $vsalario_m = $_POST['txt6'];
       echo "$vnombre_m - $vapellido_m - $vdireccion_m - $vtelefono_m - $vid_tipo - $vsalario_m";
        
        try{
            $sql= "INSERT INTO hospital_medicos(`id_m`, `nombre_m`, `apellido_m`, `direccion_m`, `telefono_m`, `id_tipo`, `salario_m`)
            VALUES ('',:nombr_m,:apellid_m,:direccio_m,:telefon_m,:i_tipo,:salari_m )";
            $resultado = $base->prepare($sql);
            $resultado->execute(array(":nombr_m"=>$vnombre_m,":apellid_m"=>$vapellido_m,":direccio_m"=>$direccion_m, ":telefon_m"=>$vtelefono_m, ":i_tipo"=>$id_tipo, ":salari_m"=>$vsalario_m));
            ?>
            <script language="javascript">window.alert('El medico se registro con exito!!!')</script>
            <?php
        }catch(Exception $e){
            die('Error de conexion:  '.$e->getmessage());
        }
    }
    ?>
</body>
</html>