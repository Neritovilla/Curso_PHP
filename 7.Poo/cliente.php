<?php
require_once("persona.php");


    class Cliente extends Persona{

        public function __construct(
            public bool $esFrecuente = false ,
            public string $correo = "",
            ) {
        }

        function comer(){
            $this->setTelefono ("0123456789");
            echo $this->getTelefono();
        }

        function saludar(Empleado $empleado){
            echo "Felicitaciones chef: ", $empleado->nombre . '<br>';
        }


        function hablar($tema){
            echo"hola mi tema es: " . $tema . '<br>'; 
        }

    }
?>