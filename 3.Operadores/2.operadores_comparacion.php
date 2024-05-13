<?php

//se utilian para comparar valores

// operador igual ==
    $raza  ="Husky";
    var_dump($raza == "Akita"); // devuelve true o false

// operador identico ===
//este copara valor y tipo de dato a diferencia de == que solo compara valor.
    $edad = "18";
    echo "<br>";
    var_dump($edad === 18);// devuelve falso ya que el vlaor es igual pero el tipo de dato no

// operador diferente 
    //!= 
    $edad = 20;
    echo "<br>";
    var_dump($edad != 20);// devuelve true o false
    //<>
    $edad = 20;
    echo "<br>";
    var_dump($edad != 20);// devuelve true o false

// operador no identico !==
    $edad = 20;
    echo "<br>";
    var_dump($edad !== 15);// devuelve true o false

// operador mayor que >
    $edad = 20;
    echo "<br>";
    var_dump($edad > 15);// devuelve true o false

// operador mayor que <
    $edad = 20;
    echo "<br>";
    var_dump($edad < 15);// devuelve true o false

// operador mayor o igual que >=
    $edad = 20;
    echo "<br>";
    var_dump($edad >= 15);// devuelve true o false

// operador mayor o igual que <=
    $edad = 20;
    echo "<br>";
    var_dump($edad <= 15);// devuelve true o false

/** operador nave espacial
 *  0 Ambos valores son iguales
 *  1 el valor es mayor
 * -1 el valor es menir
 */
    $edad = 10;
    echo "<br>";
    var_dump($edad <=> 15);

?>