<?php
if(!isset($_GET['c'])){
    echo "No se asigno valor a la variable"."<br>";
    require_once ("./controllers/inicio.controlador.php");
    $controlador=new InicioControlador();
    call_user_func(array($controlador,"Inicio"));


    include ("./models/mdl.conexion.php");
    $con=new Conection();
    $con->conect();



    }

else{
    echo"Valor de la variable controlador: ".$_GET['c'];

    $controlador= $_GET['c'];
    require_once("./controllers/.$controlador.controlador.php");
    $controlador = ucwords($controlador)."controlador";
    $controlador = new $controlador;
    $accion = isset($_GET['a']) ? $_GET['c'] : "Inicio";
    call_user_func(array($controlador,$accion));


    
    
    }
?>