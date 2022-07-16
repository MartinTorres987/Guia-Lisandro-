<?php
class animal{
    private $dormido;
    private $despierto;
    private $mensaje;

    public function comentar($mensaje){
        echo"<p>$mensaje</p>";
    }

    public function despierto ($despierto){
        $this -> despierto =true;
    }
    public function dormido ($dormido){
        $this -> dormido =false;
    }

}
$perro = new animal();
$gato = new animal();

 
$perro->comentar("Estoy comiendo");
$gato ->comentar("Me cagué");
?>