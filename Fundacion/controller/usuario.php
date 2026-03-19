<?php
require_once("../config/conection.php");
require_once("../model/Usuario.php");

$usuario=new Usuario();

switch($_GET["op"]){

   case "guardar":
                $datos=$usuario->getCorreoUsuario($_POST["txtEmail"]);

                if($_POST["txtPassword1"]==$_POST["txtPassword2"]){
                    if(is_array($datos) and count($datos)==0){
                        $usuario->registrarUsuario($_POST["txtUsuario"],$_POST["txtNombre"],$_POST["txtApellido"],$_POST["txtEmail"],$_POST["txtPassword1"]);
                        }
                    else{
                        echo "mail";//envia al ajax:  "El correo ya existe, por favor elige otro.";
                        }
                    }
                else{
                    echo "pass";//envia al ajax:  "Las contraseñas no coinciden, por favor verifica.";
                }
        break;

}

?>