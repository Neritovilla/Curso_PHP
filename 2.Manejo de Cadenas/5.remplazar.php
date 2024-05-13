<?php

$RFC = "91 75 1A EC C7";

//para remplazar valores en una cadena hacemos uso de replace()
$buscar = " ";
$remplazar = ":";
// str_replace recive 3 valores:
// el vlaor a ser remplazado , el valor que deseo, la cadena
$resultado = str_replace($buscar, $remplazar, $RFC);
echo $resultado;


?>