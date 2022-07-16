<?php
class DispocitivoElectronico{
  
    private $nombre;
    private $marca;
    private $encendido; 
    

    public function getnombre(){
        return $this->nombre; 
    }
    public function getmarca(){
        return $this->marca;
    }
    public function getencendido(){
        return $this->encendido;
    }


    public function encender(){
        $this->encendido = true;
    }
    public function apagar(){
        $this->encendido = FALSE;
    }
    

    public function setnombre($nombre){
        $this->nombre=$nombre;
    }
    public function setmarca($marca){
        $this->marca=$marca;
    }
    public function setencendido($encendido){
        $this->encendido=$encendido;
    }
}

class Telefono extends DispocitivoElectronico{
    private $compañia;

    public function getcompañia(){
        return $this->compañia;
    }
    //Esto es para imprimir
    public function llamar(){
        echo $this->compañia. "llamando";
    }
}


class Televisor extends DispocitivoElectronico{
    //Es para definir las variables para las funciones
    private $pulgadas;
    private $calidad;

    public function getpulgadas(){
        return $this->pulgadas; 
    }
    public function getcalidad(){
        return $this->calidad;
    }
    //Esto es para imprimir 
    public function Programacion(){
        echo $this->calidad. "Programación diaria";
    }

}


class Consola extends DispocitivoElectronico{
    public function Programacion(){
        echo  "Juego en proceso";
    } 
}

?>