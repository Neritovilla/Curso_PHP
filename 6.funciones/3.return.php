<?php

function obtenerEdad(){
    $edad = 2024 - 1997;
    //esto nos permite regresar un dato
    return $edad;
}

//asi puedo obtener el valor de retorno al llamar a la funcion y guardarla en una variable
$edad = obtenerEdad();
echo $edad;


?>