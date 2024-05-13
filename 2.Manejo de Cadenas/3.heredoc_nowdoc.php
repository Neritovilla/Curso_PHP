<?php

    $saludo = "Hola";

    //heredoc
    //para crear un heredoc usamos <<< identificador texto.....  identificador;
    echo <<<Frase
    $saludo, 
    No cuentes los días, has que los días cuenten
    Frase;
    //heredoc funciona igual que las ""

    //nowdoc
    //para crear un heredoc usamos  <<< 'identificador' texto.....  identificador;
    echo <<<'Frase'
    <br>
    $saludo, 
    No cuentes los días, has que los días cuenten
    Frase;
    //nowdoc funciona igual que las ''
?>