<?php

/* desde php 7 podemos establecer un tipo de dato fijo de una variable, en este caso 
    lo realizamos en los parametros*/

//aqui definimos que los parametros a recibir seran de tiopo int
declare(strict_types = 1);//usamos declare para definir que este tipo de dato es estricto
function obtenerEdad(int $anio, int $fecha_nacimeinto){
    $edad = $anio - $fecha_nacimeinto;
    echo "mi edad es : ".$edad.".";
}

//envio el argumento como parametro para su uso en la fuincion
obtenerEdad(2024, 1997);



?>

