<?php
ini_set("display_errors",1);//Sirve para vizualizar los errores en el navegador
ini_set("log_errors",1);//Almacena los errores
ini_set("error_log","C:/xampp/htdocs/devsolutions.com.mx/agrodev/dev/frontend/php_error_log_frontend.txt");


require_once "controladores/plantilla.controlador.php";
require_once "controladores/productos.controlador.php";
require_once "controladores/slide.controlador.php";
require_once "controladores/usuarios.controlador.php";
require_once "controladores/carrito.controlador.php";
require_once "controladores/visitas.controlador.php";
require_once "controladores/notificaciones.controlador.php";

require_once "modelos/plantilla.modelo.php";
require_once "modelos/productos.modelo.php";
require_once "modelos/slide.modelo.php";
require_once "modelos/usuarios.modelo.php";
require_once "modelos/carrito.modelo.php";
require_once "modelos/visitas.modelo.php";
require_once "modelos/notificaciones.modelo.php";

require_once "modelos/rutas.php";

require_once "extensiones/vendor/autoload.php";

$plantilla = new ControladorPlantilla();
$plantilla -> plantilla();