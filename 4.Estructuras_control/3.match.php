<?php
//funcionamiento similar a swtich pero devuelve un resultado, pero no me permite agregar bloques de codigo


$camisa = 'verde';

echo match($camisa){
    'gris' => 'camisa gris',
    'roja' => 'camisa roja',
    'verde' => 'camisa verde',
};



?>