<?php

//poseen una key y un valor
$datos = [
    "nombre"    => "Erick",
    "apellido"  =>"Villavicencio",
    "edad"      => 26
];

//imprimir un arreglo, lo realizamos usando var_dump()
var_dump($datos);
echo '<br>';
echo '<br>';
var_dump($datos['apellido']);
echo '<br>';

//recorrer un arreglo
foreach ($datos as $key => $value) {
    echo '<br>'. $key .': '. $value .' ';
}

?>