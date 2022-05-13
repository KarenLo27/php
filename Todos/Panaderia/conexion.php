<?php

try{
    $base = new PDO('mysql:host=localhost; dbname=panaderia_azucar','root','');
    echo "CONEXION EXITOSA ... FELICITACIONES!!!";
}catch(Exception $e){
    die('Error de conexion:  '.$e->getmessage());
}
?>