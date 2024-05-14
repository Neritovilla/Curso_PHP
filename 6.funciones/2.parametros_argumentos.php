<?php

$anio = 2024;
$fecha_nacimeinto = 1997;
function obtenerEdad($anio,$fecha_nacimeinto){
    $edad = $anio - $fecha_nacimeinto;
    echo "mi edad es : ".$edad.".";
}

//envio el argumento como parametro para su uso en la fuincion
obtenerEdad($anio,$fecha_nacimeinto);

?>