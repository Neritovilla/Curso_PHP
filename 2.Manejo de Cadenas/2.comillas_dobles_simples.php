<?php
//Uso de comillas simplas y dobles
$saludo = "Hola";
echo " <br> $saludo bienvenida ";
echo ' <br> $saludo bienvenida ';// comillas simples no permite interpolacion, se usa solo para texto
echo ' <br> hola "bienvenida" '; //para poder usar "" dentro de un texto suso '' 
echo " <br> hola \"bienvenida\" ";//tambien podemos lograrlo usando \
echo "\$US"; // TAMBIEN USAMOS \ PARA PODER USAR $ EN TEXTO CON ""
echo '$US'; // en comillas simples no hace falta

?>