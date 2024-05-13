<?php

//este operador es  =
//nos permite asignar valores a una variable
$numero = 12;
echo '<br> $numero: ' . $numero;

//operador asignacion por referencia =&
//este valor asigna  un valor nuevo a la variable sin importar
//q valor tenia antes
$a = 10;
$b = &$a;
echo '<br> $b: ' . $b;

//operador de asignacion para concatenar .=
$saludo = "Hola ";
$saludo .= "Erick";
echo '<br> $saludo: ' . $saludo;



?>