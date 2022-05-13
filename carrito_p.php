<?php
session_start();
$mensaje="";
if(isset($_POST['carro'])){
    switch ($_POST['carro']) {
        case 'Agregar':
            if(is_numeric($_POST['codigo'])){
                $CODIGO=$_POST['codigo'];
                $mensaje.="Codigo correcto".$CODIGO. "<br>";
            }else{
                $mensaje.="Mensaje incorrecto";
            }
            if (is_string($_POST['nombre'])){
                $NOMBRE=$_POST['nombre'];
                $mensaje.="NOMBRE correcto".$NOMBRE. "<br>";

            }else{
                $mensaje.="Dato incorrecto";
            }
            if(is_string($_POST['descripcion'])){
                $DESCRIPCION=$_POST['descripcion'];
                $mensaje.="Descripcion correcto".$DESCRIPCION. "<br>";

            }else{
                $mensaje.="Dato incorrecto";
            }
            if(is_numeric($_POST['valor'])){
                $VALOR=$_POST['valor'];
                $mensaje.="Valor correcto".$VALOR."<br>";

            }else{
                $mensaje.="Dato incorrecto";
                 }
            if(is_numeric($_POST['stock'])){
                    $STOCK=$_POST['stock'];
                    $mensaje.="Stock correcto".$STOCK. "<br>";
    
            }else{
                    $mensaje.="Dato incorrecto";
                }
            if(is_string($_POST['categoria'])){
                    $CATEGORIA=$_POST['categoria'];
                    $mensaje.="Categoria correcto".$CATEGORIA. "<br>";
    
            }else{
                    $mensaje.="Dato incorrecto";
                }
            if(is_string($_POST['proveedor'])){
                    $PROVEDOR=$_POST['proveedor'];
                    $mensaje.="fk_provedor correcto".$PROVEDOR. "<br>";
    
            }else{
                    $mensaje.="Dato incorrecto";
                }
                if(is_numeric($_POST['cantidad'])){
                    $CANTIDAD=$_POST['cantidad'];
                    $mensaje.="cantidad correcto".$CANTIDAD. "<br>";
    
            }else{
                    $mensaje.="Dato incorrecto";
                }
                 if(!isset($_SESSION['CARRITO'])){
                  $producto=array(
                      'CODIGO'=>$CODIGO,
                      'NOMBRE'=>$NOMBRE,
                      'DESCRIPCION'=>$DESCRIPCION,
                      'VALOR'=>$VALOR,
                      'STOCK'=>$STOCK,
                      'CATEGORIA'=>$CATEGORIA,
                      'PROVEDOR'=>$PROVEDOR,
                      'CANTIDAD'=>$CANTIDAD);
                      $_SESSION['CARRITO'][0]=$producto;
                    
                 }else{

                    $numerop=count( $_SESSION['CARRITO']);
                    $producto=array(
                      'CODIGO'=>$CODIGO,
                      'NOMBRE'=>$NOMBRE,
                      'DESCRIPCION'=>$DESCRIPCION,
                      'VALOR'=>$VALOR,
                      'STOCK'=>$STOCK,
                      'CATEGORIA'=>$CATEGORIA,
                      'PROVEDOR'=>$PROVEDOR,
                      'CANTIDAD'=>$CANTIDAD);
                        $_SESSION['CARRITO'][$numerop]=$producto;
                 }
                 $mensaje=print_r($_SESSION,true);
            break;
            case 'Eliminar':
                if(is_numeric($_POST['id'])){
                   $CODIGO=$_POST['id'];
                   foreach($_SESSION['CARRITO'] as $indice=>$producto ){
                       if($producto['CODIGO']==$CODIGO){
                           unset($_SESSION['CARRITO'][$indice]);
                           echo "<script>alert('Se borro')</script>";
                       }
                   }
                } 
                break;  
    }
}
?>