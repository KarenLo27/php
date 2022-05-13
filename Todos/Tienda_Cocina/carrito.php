<?php
session_start();
$mensaje="";
if(isset($_POST['carro'])){
    switch ($_POST['carro']) {
        case 'Agregar':
            if(is_numeric($_POST['id'])){
                $ID=$_POST['id'];
                $mensaje.="ID correcto".$ID. "<br>";
            }else{
                $mensaje.="Mensaje incorrecto";
            }
            if (is_string($_POST['nombre'])){
                $NOMBRE=$_POST['nombre'];
                $mensaje.="NOMBRE correcto".$NOMBRE. "<br>";

            }else{
                $mensaje.="Dato incorrecto";
            }
            if(is_numeric($_POST['precio'])){
                $PRECIO=$_POST['precio'];
                $mensaje.="Precio correcto".$PRECIO. "<br>";

            }else{
                $mensaje.="Dato incorrecto";
            }
            if(is_numeric($_POST['cantidad'])){
                $CANTIDAD=$_POST['cantidad'];
                $mensaje.="Cantidad correcto".$CANTIDAD."<br>";

            }else{
                $mensaje.="Dato incorrecto";
                 }
                 if(!isset($_SESSION['CARRITO'])){
                  $producto=array(
                      'ID'=>$ID,
                      'NOMBRE'=>$NOMBRE,
                      'PRECIO'=>$PRECIO,
                      'CANTIDAD'=>$CANTIDAD);
                      $_SESSION['CARRITO'][0]=$producto;
                    
                 }else{
                     $numerop=count( $_SESSION['CARRITO']);
                    $producto=array(
                        'ID'=>$ID,
                        'NOMBRE'=>$NOMBRE,
                        'PRECIO'=>$PRECIO,
                        'CANTIDAD'=>$CANTIDAD);
                        $_SESSION['CARRITO'][$numerop]=$producto;
                 }
                 $mensaje=print_r($_SESSION,true);
            break;
            case 'Eliminar':
                if(is_numeric($_POST['id'])){
                    $ID=$_POST['id'];
                    foreach($_SESSION['CARRITO'] as $indice=>$producto ){
                if($producto['ID']==$ID){
                    unset($_SESSION['CARRITO'][$indice]);
                    echo "<script>alert('No elimine productos');</script>";
                }
                    }
                }
                break;
        
       
    }
}else{

}
?>