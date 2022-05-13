<?php

try{
    $base = new PDO('mysql:host=localhost; dbname=empresa-astral','root','');
    
}catch(Exception $e){
    die('Error de conexion:  '.$e->getmessage());
}
?>