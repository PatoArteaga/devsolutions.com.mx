<?php
echo "<center>APP</center>";
echo "<br>";
echo "<center>Licencias SARE<center>";


$config["Programming_Language"] = "PHP";
$config["Strictly_Typed"] = "No";
$config["Version"] = 1;

foreach($config as $key => $setting) {
	print("$key: $setting<br>");
}

$arreglo=["1","2","3","10","77777"];
foreach($arreglo as $atributo=>$valor){
    echo "Atributo en la posicion [$atributo]: $valor<br>";
}