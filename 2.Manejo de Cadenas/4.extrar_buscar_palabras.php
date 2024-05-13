<?php
    $nombre_completo = "Erick Villavicencio";

    //para obtener un substring hacemos uso de substr()
    $nombre = substr($nombre_completo,0,5);
    echo "<br> nombre: " . $nombre;

    //buscar una cadena de texto dentro de otra, usamos strpos()
    $nombre = "Erick";
    $buscar = strpos($nombre_completo,$nombre);
    echo "<br> buscar: " . $buscar;
    //esto devuelve la posicion donde inicia el valor buscado

    //para extraer un texto unimos las dos anteriores
    $apellido = "Villavicencio";
    $buscar = strpos($nombre_completo,$apellido);
    $extraccion = substr($nombre_completo,$buscar);
    echo "<br> extraccion: " . $extraccion;
?>