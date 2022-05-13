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
<form method="POST" action="" name="frm1">
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
   <option value="Bebé">Bebé</option>
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
            <option value="<?php echo $consulta['codigo'];?>"><?php echo $consulta['nombre'];?></option>
            <?php
             }  
            }catch(Exeption $e){
                die('ALERTA - se produjo un error al intentar consutar la BD...'.$e->getMessage());
            }
            ?>
        </select>
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
        echo " $vnombre -$vdescripcion - $vvalor - $vstock - $vcategoria - $vfk_provedor";
        
        try{
            $sql= "INSERT INTO productos(`codigo_pdto`, `nombre`, `descripcion`, `valor`, `stock`, `categoria`, `fk_provedor`) VALUES
             ('',:nombr,:descripcio,:valo,:stoc,:categori,:fk_provedor )";
            $resultado = $base->prepare($sql);
            $resultado->execute(array(":nombr"=>$vnombre,":descripcio"=>$vdescripcion,":valo"=>$vvalor, ":stoc"=>$vstock, ":categori"=>$vcategoria, ":fk_provedor"=>$vfk_provedor));
            ?>
            <script language="javascript">window.alert('El Producto se registro con exito!!!')</script>
            <?php
        }catch(Exception $e){
            die('Error de conexion:  '.$e->getmessage());
        }
    }
    ?>
</body>
</html>