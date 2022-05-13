<?php
include 'conexion.php';
if (isset($_POST['btn1'])){
    echo "Funcionando";
    $countfiles = count($_FILES['files']['name']);

    $sql1= "INSERT INTO subir (nombre,imagen) VALUES(?,?) ";
    $resultado = $base->prepare($sql1);
    for($i = 0; $i < $countfiles; $i++){

        $filename = $_FILES['files']['name'][$i];

        $carpeta= 'subir/'.$filename;
        $file_extension = pathinfo($carpeta, PATHINFO_EXTENSION);
        $file_extension = strtolower($file_extension);
        $valid_extension = array("png", "jpeg", "jpg");
        if(in_array($file_extension, $valid_extension)){
            if(move_uploaded_file($_FILES['files']['tmp_name'][$i],$carpeta)){

                $resultado->execute(array($filename, $carpeta));
                }
        }
    }
}
?>
<script language="javascript">window.alert("Imagen Guardada");swindow.location="registro.php"</script>
<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>imagenes</title>
</head>
<body>
    
<form name="name" method="POST" action="" enctype="multipart/form-data">
<table>
    <tr>
        <td colspan="2">DATOS DEL ASPIRANTE</td>
    </tr>
    <td>FOTO:</td>
    <td>
        <input type="file" name="files[]">
    </td>
    <tr>
    </tr>
    <td colspan="2">
        <input type="submit" name="btn1" value="ENVIAR..">

    </td>
</table>
</form>
<?php
$sql2= "SELECT * FROM subir ";
$resultado1 = $base->prepare($sql2);
$resultado1->execute();

while($consulta1=$resultado1->fetch(PDO::FETCH_ASSOC)){
    ?> 
    <img src="./subir/<?=$consulta1['nombre'] ?>" title="<?=$consulta1['nombre'] ?>" width='200' height='300'> 
  <?php  
}
?>
</body>

</html>