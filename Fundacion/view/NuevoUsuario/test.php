<?php

require_once("../../config/conection.php");
require_once("../../model/Usuario.php");

$usuario=new Usuario();
$usuario->registrarUsuario("testuser","Test","User","test@example.com","password123",2,1);
echo "Usuario de prueba registrado exitosamente.";

?>
