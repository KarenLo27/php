<?php
include 'conexion.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="actualizarproyecto.css">
    <title>Verificar datos</title>
</head>
<body>
<?php
    try{
        $sql1="SELECT * FROM usuario WHERE pk_identificacion=".$_REQUEST['cod'].";";
        $resultado = $base->prepare($sql1);
          $resultado->execute(array());
          while ($consulta = $resultado->fetch(PDO::FETCH_ASSOC)) {
          ?>
          <form action="actualizar_usuario2.php?new=<?php echo $_REQUEST['cod']; ?>" name="frmact"
          method="POST">
          <table  class="actualizar">
              <tr>
                  <td colspan="2" class="titulo">Actualizando usuarios - <?php
                  echo $consulta['nombre'] ?> - </td>
              </tr>
              <tr>
                  <td>Nombre:</td>
                  <td><input type="text" name="txt1" requied value="<?php
                  echo $consulta['nombre']; ?>"></td>
              </tr>
              <tr>
              <td>Telefono:</td>
                  <td><input type="text" name="txt2" requied value="<?php
                  echo $consulta['telefono']; ?>"></td>
              </tr>
              <tr>
              <td>Tipo_usuario</td>
                  <td><input type="text" name="txt3" requied value="<?php
                  echo $consulta['tipo_usuario']; ?>"></td>
              </tr>
              <tr>
              <td>Direccion</td>
                  <td><input type="text" name="txt4" requied value="<?php
                  echo $consulta['direccion']; ?> "></td>
              </tr>
              <tr>
              <td>Usuario</td>
                  <td><input type="text" name="txt5" requied value="<?php
                  echo $consulta['usuario']; ?> "></td>
              </tr>
              <tr>
              <td>Contraseña</td>
                  <td><input type="text" name="txt6" requied value="<?php
                  echo $consulta['contrasena']; ?> "></td>
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