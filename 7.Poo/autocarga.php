<?php

class Autocarga{
    private function cargarClases($clase){
        $ruta = str_replace("\\","/",$clase).".php";
        if(file_exists($ruta)){
            require_once($ruta);
        }
    }

    public function cargarRutas(){
        //genera un array para cargar los requiere_one
        spl_autoload_register(array($this,"cargarClases"));
    }

}

?>