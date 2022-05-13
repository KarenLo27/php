<?php
include 'conexion.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
</head>
<body>
<form method="POST" action="" name="frm1" enctype="multipart/form-data">
    <table>
    <tr>
    <td colspan="2">..::PRODUCTOS::..</td>
    </tr>
    <tr>
    <td>Nombre:</td>
    <td><input type="text" name="txt1" required></td>
    </tr>
    <tr>
    <td>Descripcion:</td>
    <td><input type="text" name="txt2" required></td>
    </tr>
    <tr>
    <td>Valor:</td>
    <td><input type="text" name="txt3" required></td>
    </tr>
    <tr>
    <td>Stock</td>
    <td><input type="text" name="txt4" required></td>
    </tr>
    <tr>
    <td>Categoria</td>
    <td>
   <select name="txt5" >
    <option >Seleccione la categoria</option>
   <option value="Maquillaje">Maquillaje</option>
   <option value="Fragancia">Fragancia</option>
   <option value="Cuidado personal">Cuidado personal</option>
   <option value="Bebe">Bebe</option>
   </select>
   </td>
    <tr>
    <td>Fk_proveedor</td>
    <td>
        <select name="txt6">
            <option value="">seleccione proveedor</option>
            <?php
            try{
                $sql1="SELECT * FROM proveedor";
                $resultado = $base->prepare($sql1);
                $resultado->execute(array());
          while ($consulta = $resultado->fetch(PDO::FETCH_ASSOC)) {
            ?> 
            <option value="<?php echo $consulta['codigo'];?>"><?php echo $consulta['nombrep'];?></option>
            <?php
             }  
            }catch(Exeption $e){
                die('ALERTA - se produjo un error al intentar consutar la BD...'.$e->getMessage());
            }
            ?>
        </select>
    </td>
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
        $vdescripcion = $_POST['txt2'];
        $vvalor = $_POST['txt3'];
        $vstock = $_POST['txt4'];
        $vcategoria = $_POST['txt5'];
        $vfk_provedor = $_POST['txt6'];
        $countfiles = count($_FILES['files']['name']);
        $sql= "INSERT INTO productos(codigo_pdto, nombre, descripcion, valor, stock, categoria, fk_provedor, subir, imagen)
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
                     $resultado->execute(array('',$vnombre, $vdescripcion, $vvalor, 
                     $vstock,  $vcategoria,$vfk_provedor,
                     $filename, $carpeta));
                 }
             }

         }
         ?>
<script language="javascript">window.alert("Imagen subida con exito...");window.location="registrop_carrito.php"</script>
        <?php

    }
    ?>
</body>
</html>