<?php
try{
	$base= new PDO('mysql:host=localhost;dbname=imagenes','root','');
	//echo "Exitosa";
}catch(Exception $err){
	die('Error de conexion... '.$err->getMessage());
}
?>