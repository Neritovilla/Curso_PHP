<?php
$alumnos = ["Marines","Jose","Sofia"];

$datos = [
    "Nombre"    => "Martines",
    "Apellido"  => "Mendez",
    "Edad"      => 29,
];

//contar registros count()
var_dump(count($alumnos));
echo "<br>";
var_dump(count($datos));
echo "<br>";
echo "<br>";

//ordenar un arreglo de manera ascendente asort()
asort($alumnos);
var_dump($alumnos);
echo "<br>";

//ordenar un arreglo de manera descendente arsort()
arsort($alumnos);
var_dump($alumnos);
echo "<br>";
echo "<br>";

//buscar un valor
var_dump(array_search("Sofia",$alumnos));//este valor devuelve la pociocion que ocupa el elemento
echo "<br>";
var_dump(array_search(29,$datos));//me devuelve la clave


?>