<?php
    class Ahorro{
        protected $totalahorro;
        protected $cantidad;

        //Metodos

        public function __construct(){
            $this->cantidad = 0;
            $this->totalahorro = 0;
        }

        //Getter
        public function getTotal(){
            return $this->totalahorro = 0;;
        }
        public function getCantidad(){
            return $this->cantidad;
        }

        //Setter
        public function setCantidad($cantidad){
            $this->cantidad = $cantidad;
        }
        public function setTotal($totalahorro){
            $this->totalahorro = $totalahorro;
        }

        public function Retirar($retirar)
        {
            if ($retirar <= $this->totalahorro) {
                $this->cantidad=$retirar;
                return $this->totalahorro = $this->totalahorro-$retirar;
            }else{
                echo "<h2>Ups, al parecer no puedes retirar esa cantidad</h2><br>";
            }
        }

        public function setDepositar($cantidad){
            
            if ($cantidad > 0) {
                $this->cantidad = $cantidad;
                return $this->totalahorro = $cantidad + $this->totalahorro;
            }else{
                echo "<h2>Ups, al parecer no puedes retirar esa cantidad</h2><br>";
            }
        }

        public function getConsultar()
        {
            return $this->totalahorro;
        }

        
    }

    //- Objeto

    $usuario = new Ahorro();

    // Realizar Metodos

    $usuario->setDepositar(150);
    echo "La cantidad que vas a depositar es:", $usuario->getCantidad(), "<br>";
    echo "<br> <h2>Total de Ahorros: ", $usuario->getConsultar(),"</h2>";
    $usuario->Retirar(50);
    echo "<h2>Vas a retirar: ",$usuario->getCantidad()," </h2> <h1>Total de Ahorros: ", $usuario->getConsultar(), "</h1>";
    