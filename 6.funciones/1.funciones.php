<?php

function obtenerEdad($fecha_nacimeinto){
    $edad = 2023 - $fecha_nacimeinto;
    echo "mi edad es : ".$edad.".";
}

//llamamos la funcion y le enviamos nmuestro año de nacimiento
obtenerEdad(1997);

?>