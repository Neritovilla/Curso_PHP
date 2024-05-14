<?php

class Coneccion{
    //creamos coneccion

    public function __construct(
       public string $driver = 'mysql',
       public string $host = 'localhost',
       public string $user = 'root',
       public string $pass = '1234',
       public string $database = 'sunny_side',
       public string $charset = 'utf8',
    ){}

    protected function conexion(){
        try{
            $pdo = new PDO(
                "$this->driver:host = $this->host;
                dbname=$this->database;
                charset=$this->charset", 
                $this->user, 
                $this->pass);
            return $pdo;
        }catch(Exception $e){
            echo $e->getMessage();
        }
    }



}

?>