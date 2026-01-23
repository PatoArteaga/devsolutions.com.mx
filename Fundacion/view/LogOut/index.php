<?php
require_once("../../config/conection.php");
session_destroy();
header("Location:".Conectar::ruta()."index.php");
exit();