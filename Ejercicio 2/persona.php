<?php

    class Persona{
        private $nombre;
        private $apellido;
        private $dui;

        //Metodos
        public function __construct($newNombre, $newApellido, $newDui){
            $this->nombre = $newNombre;
            $this->apellido = $newApellido;
            $this->dui = $newDui;
        }

        public function getNombre(){
            return $this->nombre;
        }

        public function getApellido(){
            return $this->apellido;
        }

        public function getDui(){
            return $this->dui;
        }
    
        public function setNombre($nombre){
            $this->nombre = $nombre;
        }

        public function setApellido($apellido){
            $this->apellido = $apellido;
        }

        public function setDui($dui){
            $this->dui = $dui;
        }
    }

    /*--------*/

    $persona = new Persona("Martin", "Carbajal","0314645-9");


    /*Imprimir los datos*/
    echo ($persona->getNombre());
    echo "<br>";
    echo ($persona->getApellido());
    echo "<br>";
    echo ($persona->getDui());
?>