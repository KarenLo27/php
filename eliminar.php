<?php
include 'conexion.php';
include 'consultap_carrito.php';

if(isset($_POST['btnr'])){
    unset($_SESSION['CARRITO']);
}
?>
<script>window.location='consultap_carrito.php'</script>