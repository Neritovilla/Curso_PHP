<?php
//llamamos autocarga
require_once("autocarga.php");
(new Autocarga())->cargarRutas();
 

$cliente = new Cliente();
$cliente->nombre = "Jose";
echo $cliente->nombre . '<br>';
$cliente->comer();
echo '<br>';
$empleado = new Empleado();
$empleado->nombre = 'Luis';
$cliente->saludar($empleado);
$cliente->hablar("Gatos");
$proveedor = new Proveedor();


//clases anonimas
$claseAnonima = new class{
    public $nombre;
    public function suma() {
        echo 10+20;
    }
};
$claseAnonima->suma();


?>