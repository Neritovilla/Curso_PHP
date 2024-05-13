<?php

/* definicion de variables usar el $nombre_variable 
    * la variable toma el tipo dependiendo que que valor se le asigna
*/
$nombre;
$nombre_apellido;

/*tipos de datos */
/**
 * String
 * Int
 * Double
 * Boolean
 */

    $string = 'variable tipo string';
    $int = 10;
    $double = 9.5;
    $boolean = true;

//para imprimir un valor usamos echo
    echo $string;

//para concatenar una cadena de texto hacemos uso del .
    echo '<br>variable tipo string: ' . $string;
    echo '<br>variable tipo int: ' . $int;

/**
 * una variable puede cam,biar su valor, pero este debe ser del mismo tipo
 * si definiste una variabla tipo string esta solo acptara ese tipo
 */

//constantes
// definimos con const y el nombre de la constante
    const valor = 10;
//otra manera es usar define(), esta solo sirve dentro del archivo donde se creo
    define('valor2', 15);
    echo '<br>constante valor: ' . valor;
    echo '<br>constante valor2: ' . valor2;
    

?>