<?php

try{
    $base = new PDO('mysql:host=localhost; dbname=notificacion','root','');
    echo "CONEXION EXITOSA ... FELICITACIONES!!!";
}catch(Exception $e){
    die('Error de conexion:  '.$e->getmessage());
}
?>