<?php

//operador ternario Operando?Operando:Operando
$promedio = 5;
$aprobo = ($promedio >= 7)?"Aprobaste":"Reprobaste";
echo '<br>' . $aprobo;

//Operador elvis ?:
//asigna un valor en caso de q este sea null
$promedio2 = null;
$aprobo = ($promedio2)?:5;
echo '<br>' .  $aprobo;

//operador fusion null?
//se usa para asignar un valor cuando este no esta definido
$promedio3;
$aprobo = ($promedio3)??15;
echo '<br>' .  $aprobo;
?>