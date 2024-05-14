<?php
require_once("usuario.php");

//crear usuario
$usuarioCrear = new Usuario(
    0,
    "Juan",
    "Lopeez",
    "0123456789",
    18
);
//$usuarioCrear->insertar();


//modificar usuario
$usuarioModificar = new Usuario(
     4,
    "Pepe",
    "Lopez",
    "0123456789",
     17
);
//$usuarioModificar->actualizar();

//eliminar
$usuarioEliminar = new Usuario();
//$usuarioEliminar->eliminar(5);

//consultar
$usuarioConsultar = new Usuario();
//var_dump($usuarioConsultar ->consultarTodo());
var_dump($usuarioConsultar ->consultarUno(6));
?>