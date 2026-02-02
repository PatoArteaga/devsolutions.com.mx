<?php
require_once("../model/conectar.php");
require_once("../model/Usuario.php");

$usuario=new Usuario();

switch($_GET["op"]){

   case "guardar":
                $datos=$usuario->getCorreoUsuario($_POST["txtEmail"]);

                if($_POST["txtPassword"]==$_POST["txtPassword1"]){
    
                    if(is_array($datos) and count($datos)==0){
                    $usuario->registrarUsuario($_POST["txtUsuario"],$_POST["txtNombre"],$_POST["txtApellido"],$_POST["txtEmail"],$_POST["txtPassword"]);
                    }
                
                }
        break;

}

?>