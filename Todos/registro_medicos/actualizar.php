<?php
include 'conexion.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="mediser.css">
    <title>D</title>
</head>
<body>
<?php
    try{
        $sql1="SELECT * FROM hospital_medicos WHERE id_m=".$_REQUEST['cod'].";";
        $resultado = $base->prepare($sql1);
          $resultado->execute(array());
          while ($consulta = $resultado->fetch(PDO::FETCH_ASSOC)) {
          ?>
          <form action="actualizar2m.php?new=<?php echo $_REQUEST['cod']; ?>" name="frmact"
          method="POST">
          <table  class="actualizar">
              <tr>
                  <td colspan="2" class="titulo">Actualizando hospital medicos - <?php
                  echo $consulta['nombre_m'] ?> - </td>
              </tr>
              <tr>
                  <td>Nombre:</td>
                  <td><input type="text" name="txt1" requied value="<?php
                  echo $consulta['nombre_m']; ?>"></td>
              </tr>
              <tr>
              <td>Apellido:</td>
                  <td><input type="text" name="txt2" requied value="<?php
                  echo $consulta['apellido_m']; ?>"></td>
              </tr>
              <tr>
              <td>Direccion:</td>
                  <td><input type="text" name="txt3" requied value="<?php
                  echo $consulta['direccion_m']; ?>"></td>
              </tr>
              <tr>
              <td>Telefono:</td>
                  <td><input type="text" name="txt4" requied value="<?php
                  echo $consulta['telefono_m']; ?> "></td>
              </tr>
              <tr>
              <td>Tipo:</td>
                  <td><input type="text" name="txt5" requied value="<?php
                  echo $consulta['id_tipo']; ?> "></td>
              </tr>
              <tr>
              <td>Salario:</td>
                  <td><input type="text" name="txt6" requied value="<?php
                  echo $consulta['salario_m']; ?> "></td>
              </tr>
              <tr>
                  <td colspan="2"><input type="submit" name="btna" value="Actualizar..." class="boton"></td>
              </tr>
          </table>
          </form>
          <?php
         }
        }catch(Exception $e){
            die('Error de conexion:  '.$e->getmessage());
         }
          ?>
</body>
</html>