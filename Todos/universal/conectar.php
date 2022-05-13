<?php
try{
	$base= new PDO('mysql:host=localhost;dbname=universal','root','');
	
}catch(Exception $err){
	die('Error de conexion... '.$err->getMessage());
}
?>