<?php
include 'conexion.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Busqueda de autores</h1>
    <form  method="POST" action="">
        <table>
            <tr>
                <td><input type="text" name="txtbuscar"></td>
                <td><input type="submit" name="btnbuscar" value="BUSCAR..."></td>
            </tr>
        </table>
    </form>
    
    <?php
    if(isset($_POST['btnbuscar'])){
        $busqueda=$_POST['txtbuscar'];
        if($busqueda != "") {
        ?>
        <table width="900px">
            <tr>
                <td>Nombre</td>
                <td>Apellidos</td>
                <td>Fecha de nacimiento</td>
                <td>Nacionalidad</td>
            </tr>
            <?php
            try { 
            $sql="SELECT * FROM autores WHERE  nombres_au =?";
            $resultado = $base->prepare($sql);
            $resultado -> execute(array($busqueda));
            $contador = $resultado -> rowCount();
            if($contador >= 1){
                while ($consulta = $resultado->fetch(PDO::FETCH_ASSOC)) {
                   ?>
                   <tr>
                       <td><?php echo $consulta['nombres_au'];?></td>
                       <td><?php echo $consulta['apellidos'];?></td>
                       <td><?php echo $consulta['fecha'];?></td>
                       <td><?php echo $consulta['nacionalidad'];?></td>
                            </tr>
                            <?php
                }
                }else{
                    echo "No se encontraron datos que concuerden con la busqueda...";
                }
            
         }catch(Exeption $e){
             die('Alerta al ejecutar la sentenci SQL...'.$e-> getMessage());
         }
            echo "BUSCANDO DATOS... ESPERE UN MOMENTO";
        }else {
            echo "Por favor editar en la caja de texto el dato buscar...";
        }
    } 
    ?>
    </table>
   
</body>
</html>