<?php

//operador and o &&
$edad = 15;
$esMayor = $edad >= 18;
$regalo ="si";
$treRegalo = $regalo == "si";
var_dump( $esMayor  and $treRegalo);
echo "<br>";
var_dump( $esMayor  &&  $treRegalo);
echo "<br>";

//operador  or o ||
$edad = 18;
$esMayor = $edad >= 18;
$regalo ="no";
$treRegalo = $regalo == "si";
var_dump( $esMayor  or $treRegalo);
echo "<br>";
var_dump( $esMayor  ||  $treRegalo);
echo "<br>";

//operador xor
//valida q uno de los valores sea verdadero pero no ambos
$edad = 18;
$esMayor = $edad >= 18;
$regalo ="si";
$treRegalo = $regalo == "si";
var_dump( $esMayor  xor $treRegalo);
echo "<br>";
?>