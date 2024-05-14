<?php

abstract class Persona{


    //constructor
    public function __construct(
        public string $nombre = "",
        public string $apellido = "",
        public int|float $edad  = 0,
        public string $idioma = "",
        private string $telefono = "",
    ) {        
      }


    function hablar($tema){
        //referencia a una instancia mediante $this->variable
        echo "soy ". $this->nombre ." y hablo sobre $tema, ", $this->temaEsExtenso($tema);
    }

    function ver(){
    }
    function cantar(){
    }

    //funcion para remplazar los sets y gets
    public function __get($name){        
        return $this->$name;
    }
    public function __set($name, $value){     
        switch($name){
            case "telefono":
                return $this->$name = $this->validarTelefono( $value );
            default:
            return $this->$name = $value;
        }
    }

    private function temaEsExtenso($tema){
        if($tema== "Politica"){
            return "tema extenso";
        }else{
            return "tema no extenso";
        }
    }

    protected function validarTelefono($telefono){
        //exprecion regular, que valida el numero de telefono.
        if(preg_match('/^[0-9]{10}$/', $telefono)){
            return $telefono;
        }else{
            return 'estructura incorrecta';
        }
    }


    protected function getTelefono(){
        return $this->telefono;
    }

    public function setTelefono($telefono){
         $this->telefono = $this->validarTelefono($telefono);
    }

    //destructor
    public function __destruct(){
        echo '<br>';
    }

}

?>