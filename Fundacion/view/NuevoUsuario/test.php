<?php

require_once("../../config/conection.php");
require_once("../../model/Usuario.php");

$usuario=new Usuario();

//$usuario->registrarUsuario("testuser","Test","User","test@example.com","password123");

//if($usuario);
// echo var_dump($usuario);
//echo "El objeto usuario fue creado correctamente.";


$corrreos=$usuario->getCorreoUsuario("larry@gmail.com");
echo var_dump($corrreos);
//echo "El correo fue obtenido correctamente.";



?>
