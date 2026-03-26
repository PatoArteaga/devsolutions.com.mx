<?php
require_once("../../config/conection.php");
require_once("../../model/Promovido.php");

$promovido=new Promovido();

/* 
$promovido->registrarPromovido("Test","User","Apellido2","777","CLAVE1234567890","Calle Falsa","123","Colonia Ejemplo","12345","Municipio Ejemplo","Seccion Electoral Ejemplo","2","Abierto Ejemplo",NULL,NULL,NULL,"Comentarios de prueba",1,1,2,1); */

$clave_elector="777";
$resultado=$promovido->getPromovidos($clave_elector);
echo "Promovidos encontrados con clave de elector '$clave_elector':<br>";
foreach($resultado as $promovido){
    echo "ID: " . $promovido['id_promovido'] . "<br>";
    echo "Nombre: " . $promovido['nombre'] . "<br>";
    echo "Apellido1: " . $promovido['apellido1'] . "<br>";
    echo "Apellido2: " . $promovido['apellido2'] . "<br>";
    echo "Telefono: " . $promovido['telefono'] . "<br>";
    echo "Clave Elector: " . $promovido['clave_elector'] . "<br>";
    echo "Calle: " . $promovido['calle'] . "<br>";
    echo "Numero: " . $promovido['numero'] . "<br>";
    echo "Colonia: " . $promovido['colonia'] . "<br>";
    echo "CP: " . $promovido['cp'] . "<br>";
    echo "Municipio: " . $promovido['municipio'] . "<br>";
    echo "Seccion Electoral: " . $promovido['seccion_elec'] . "<br>";
    echo "DV: " . $promovido['dv_mov_comite'] . "<br>";
    echo "Abierto: " . $promovido['abierto'] . "<br>";
    echo "Foto1: " . $promovido['foto1'] . "<br>";
    echo "Foto2: " . $promovido['foto2'] . "<br>";
    echo "Foto3: " . $promovido['foto3'] . "<br>";
    echo "Comentarios: " . $promovido['comentarios'] . "<br>";
    echo "ID Coordinador: " . $promovido['id_coordinador'] . "<br>";
    echo "ID Lider: " . $promovido['id_lider'] . "<br>";
    echo "Capturo: " . $promovido['capturo'] . "<br>";
    echo "Aplica Meta: " . $promovido['aplica_meta'] . "<br>";
    echo "Fecha Registro: " . $promovido['fecha_registro'] . "<br>";
    echo "Estatus: " . $promovido['estatus'] . "<br><br>";
}   

// if($promovido);
// var_dump($promovido);
// echo "El objeto promovido fue creado correctamente.";

?>