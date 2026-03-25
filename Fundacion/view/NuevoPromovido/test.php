<?php
require_once("../../config/conection.php");
require_once("../../model/Promovido.php");

$promovido=new Promovido();


$promovido->registrarPromovido("Test","User","Apellido2","1234567890","CLAVE1234567890","Calle Falsa","123","Colonia Ejemplo","12345","Municipio Ejemplo","Seccion Electoral Ejemplo","2","Abierto Ejemplo",NULL,NULL,NULL,"Comentarios de prueba",1,1,2,1);

if($promovido);
var_dump($promovido);
echo "El objeto promovido fue creado correctamente.";

?>