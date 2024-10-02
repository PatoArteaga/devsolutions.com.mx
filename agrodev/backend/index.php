<?php
ini_set("display_errors",1);//Sirve para vizualizar los errores en el navegador
ini_set("log_errors",1);//Almacena los errores
ini_set("error_log","C:/xampp/htdocs/devsolutions.com.mx/agrodev/errores/php_error_log");


require_once("controllers/controller.plantilla.php");
$plantilla = new ControllerPlantilla();
$plantilla->Plantilla();




?>