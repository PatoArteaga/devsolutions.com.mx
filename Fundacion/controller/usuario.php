<?php
require_once("../config/conection.php");
require_once("../model/Usuario.php");

$usuario=new Usuario();

switch($_GET["op"]){

   case "guardar":
                $datos=$usuario->getCorreoUsuario($_POST["txtEmail"]);

                if($_POST["txtPassword1"]==$_POST["txtPassword2"]){
                    if(is_array($datos) and count($datos)==0){

                        // Validar y asignar valores para comentarios, nivel y estatus
                        if(ISSET($_POST["txtComentarios"]) && !empty($_POST["txtComentarios"])){
                            $comentarios = $_POST["txtComentarios"];
                        } else {
                            $comentarios = NULL; // O puedes asignar un valor predeterminado si lo prefieres

                        }

                        if(ISSET($_POST["txtNivel"]) && !empty($_POST["txtNivel"])){
                            $nivel = $_POST["txtNivel"];
                        } else {
                            $nivel = 0; // O puedes asignar un valor predeterminado si lo prefieres

                        }
                        if(ISSET($_POST["txtEstatus"]) && !empty($_POST["txtEstatus"])){
                            $estatus = $_POST["txtEstatus"];
                        } else {
                            $estatus = 0; // O puedes asignar un valor predeterminado si lo prefieres

                        }

                       

                        if($nivel == "1"){
                            $usuario->registrarUsuarionivel1($_POST["txtUsuario"],$_POST["txtNombre"],$_POST["txtApellido"],$_POST["txtEmail"],$_POST["txtPassword1"],$nivel,$comentarios,$estatus);
    
                        } else if ($nivel == "0"){
                            
                            $usuario->registrarUsuario($_POST["txtUsuario"],$_POST["txtNombre"],$_POST["txtApellido"],$_POST["txtEmail"],$_POST["txtPassword1"],$nivel,$comentarios,$estatus);

                        }
                        else if ($nivel == "2"){
                            
                            $usuario->registrarUsuarionivel2($_POST["txtUsuario"],$_POST["txtNombre"],$_POST["txtApellido"],$_POST["txtEmail"],$_POST["txtPassword1"],$nivel,$comentarios,$estatus,$_POST["txtAdscrito"]);

                        }

                        /*Registrar el usuario con los valores validados
                        $usuario->registrarUsuario($_POST["txtUsuario"],$_POST["txtNombre"],$_POST["txtApellido"],$_POST["txtEmail"],$_POST["txtPassword1"],$nivel,$comentarios,$estatus);
                        
                        */
                        


                        }
                    else{
                        echo "mail";//envia al ajax(frontend):  "El correo ya existe, por favor elige otro.";
                        }
                    }
                else{
                    echo "pass";//envia al ajax(frontend):  "Las contraseñas no coinciden, por favor verifica.";
                }
        break;
        

}

?>