<?php
include 'conexion.php';
if (isset($_POST['btn1'])){
    echo "Funcionando";
    $countfiles = count($_FILES['files']['name']);

    $sql1= "INSERT INTO productos (subir,imagen) VALUES(?,?) ";
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
<script language="javascript">window.alert("Imagen Guardada");swindow.location="carrito_compras.php"</script>
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
   
</table>
</form>
<?php
$sql2= "SELECT * FROM productos ";
$resultado1 = $base->prepare($sql2);
$resultado1->execute();

while($consulta1=$resultado1->fetch(PDO::FETCH_ASSOC)){
    ?> 
    <img src="./subir/<?=$consulta1['imagen'] ?>" title="<?=$consulta1['imagen'] ?>" width='200' height='300'> 
  <?php  
}
?>
</body>

</html>