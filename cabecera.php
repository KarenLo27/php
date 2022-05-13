<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/carrito.css">
    <link rel="stylesheet" href="css/listas.css">
   
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
      <script src="https://kit.fontawesome.com/47910d8a72.js" crossorigin="anonymous"></script>
  
    <title>Datos</title>
</head>
<body>
 <h1>Consulta de los productos
 <a href="consultap_carrito.php">Home</a>
 <a   href="ver_carrito.php">Carrito(
     <?php 
 if (empty($_SESSION['CARRITO'])){

 }else{
     echo count($_SESSION['CARRITO']);
    }
    ?>)</a></h1>
    <div class="conten">
   
    <input type="submit" value="VerCarrito" class="carro"  ><br><br>
    </div>