<?php

    $string = 'variable tipo string';
    $int = 10;
    $double = 9.5;
    $boolean = true;

    // obtener el tipo de dato de una variable
    // hacemos uso de la funcion gettype()
        $tipo_dato = gettype($string);
        $tipo_dato2 = gettype($int);
        echo '<br>tipo dato $tipo_dato: ' .  $tipo_dato;
        echo '<br>tipo dato $tipo_dato2: ' . $tipo_dato2;
    // Conversion de tipos de datos

    // conversion automatica
        $numero = "20";
        $numero2 = 10;
        $suma = $numero + $numero2;
        echo '<br>' . $suma;    
    // php convierte strings a numeros de manera automatica

    // conversion de decimal a int
    // usamamos la funcion intval()
        $numero_double = 20.5;
        $numero_int = intval($numero_double);
        echo '<br>' . $numero_int;  

    //convertir a string, usamos intval()
        $numero_string = intval($numero_int);
        echo '<br>' . $numero_string;  

    //convertir a double, usamos floatval()
        $numero_double2 = intval($numero_string);
        echo '<br>' . $numero_double2;  
    ?>