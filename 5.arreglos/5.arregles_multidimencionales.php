<?php
//tambien llamados matrizes

$animales = [
/* fila        0                1               2          */
// columna
/*  0 */    ["Puma",        "Jaguar",       "Lince"],
/*  1 */    ["Paloma",      "Pato",         "Tucan"],
/*  2 */    ["Serpiente",   "Cocodrilo",    "Tortuga"],
];

//este arreglo contendra keys
$animales_dos = [
    "Felinos" => ["Puma", "Jaguar", "Lince"],
    "Aves" => ["Paloma", "Pato", "Tucan"],
    "Reptiles" => ["Serpiente", "Cocodrilo", "Tortuga"],

    ];


//obtener un valor Cocodrilo
 echo $animales[2][1] . '<br>';
 echo $animales_dos["Reptiles"][1] . '<br>';
 echo '<br>';

//recorrer  un arreglo multidimencional
foreach ($animales_dos as $key => $clasificacion) {
    foreach ($clasificacion as $nombre) {
        echo $key . ": " . $nombre .'<br>';
    }
}

?>