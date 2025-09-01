<?php


if(!isset($_GET['ruta'])){
require_once "inicio.controlador.php";
$controlador = new InicioControlador();
}
else{
    
    echo "Bienvenido a la seccion de: ".$_GET['ruta'];
}
?>