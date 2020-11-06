<?php

class BaseDatos {

    //Atributos == Variables

    public $usuarioBD="root";
    public $passwordBD=""; 


    //funcion especial que se llama constructor

    public function __construct(){}



    //metodos == funciones

    public function conectarBD(){

        try{
       
            $infoDB="mysql:host=localhost;dbname=tienda18";
            $conexionBD=new PDO($infoDB,$this->usuarioBD,$this->passwordBD);
            echo("exito conectando");
        }catch(PDOException $error){
            echo($error->getMessage());
        }
        
    }
   
}


?>