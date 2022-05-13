<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Mensaje</title>
</head>
<body>
    <?php
    require('conexion.php');
    $contador=0;
    try{
        $sql="SELECT  asu_men, con_men, est_men FROM interfaz";
        $resultado=$base->prepare($sql);
        $resultado->execute(array());
        while($consulta=$resultado->fetch(PDO::FETCH_ASSOC)){
            if($consulta['est_men']=='Pendiente') {
                $contador=$contador + 1;
            }
        }
    }
    catch(Exception $e){
        die('Error: '.$e->getMessage());
    }
    ?>
    <header>
        <section class="cabecera">
            <table class="tuno">
                <tr>
                    <td><img src="img/carta.png" height="50px"></td>
                    <td>
                        <?php
                        if($contador > 0){
                        ?>
                        <section class="notificacion">
                           <a href="insertar2.php">
                           <?php
                           echo $contador;
                           ?>
                        </a>
                        </section>
                        <?php
                        }
                        ?>
                    </td>
                </tr>

            </table>
        </section>
    </header>
</body>
</html>