<?php

require_once("../../config/conection.php");
require_once("../../model/Usuario.php");

$usuario=new Usuario();

//$usuario->registrarUsuario("testuser123","Test","User","test@example.com","password123","2","Este es un comentario.");
$usuario->registrarUsuarionivel1("Usuario1","Nombre1","Apellido1","test1@example.com","password123","1","Este es un comentario.","1");

if($usuario);
var_dump($usuario);
echo "El objeto usuario fue creado correctamente.";


//$corrreos=$usuario->getCorreoUsuario("lartz12.14@gmail.com");
//echo"Valorres de la funcion getCorreoUsuario: <br><br>";
//var_dump($corrreos);
//echo "El correo fue obtenido correctamente.";



?>
