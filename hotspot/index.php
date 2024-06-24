<?php
    //require_once "controllers/conection.ctrl.php";
    require_once "controllers/crearegistro.ctrl.php";
    //$con = new Conectar();
    //$con -> conectaDB();
    //$sum =new Registra();
    //$sum->suma(4,5);
    $reg = new Registra();
    $reg -> registrarU("Mauricio","Lmau@hotmial.com");
    $reg -> suma(30,50);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>



    
</head>
<body>
    
<div>
HTML
</div>







    
</body>
</html>