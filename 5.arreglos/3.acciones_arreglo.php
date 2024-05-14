<?php

$alumnos = ["Marines","Jose","Sofia"];

$datos = [
    "Nombre"    => "Martines",
    "Apellido"  => "Mendez",
    "Edad"      => 29,
];

//agregar valores a un array
array_push($alumnos,"Pepe");
var_dump($alumnos);
echo "<br>";

$datos["Colonia"] = "Alegria";
var_dump($datos);
echo "<br>";
echo "<br>";

//eliminar datos
unset( $alumnos[0] );
var_dump($alumnos);
echo "<br>";

unset( $datos["Colonia"] );
var_dump($datos);
echo "<br>";
echo "<br>";


//modificar datos
$alumnos[0] = "Jose";
var_dump($alumnos);
echo "<br>";

$datos["Apellido"] = "Perez";
var_dump($datos);
echo "<br>";
echo "<br>";
?>