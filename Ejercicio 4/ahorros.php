<?php
    class Ahorro{
        protected static $totalahorro;
        protected $cantidad;

        //Metodos

        public function __construct(){
            $this->cantidad = 0;
            self::$totalahorro = 0;
        }


        //Getter
        public function getTotal(){
            return self::$cantidad;
        }
        public function getCantidad(){
            return $this->cantidad;
        }

        //Setter
        public function setCantidad($cantidad){
            $this->cantidad = $cantidad;
        }
        public function setTotal($totalahorro){
            self::$totalahorro = $totalahorro;
        }

        public function Retirar($retirar)
        {
            if ($retirar <= self::$totalahorro) {
                $this->cantidad=$retirar;
                return self::$totalahorro = Ahorro::$totalahorro-$retirar;
            }else{
                echo "<h2>Ups, al parecer no puedes retirar esa cantidad</h2><br>";
            }
        }

        public function setDepositar($cantidad){
            
            if ($cantidad > 0) {
                $this->cantidad = $cantidad;
                return self::$totalahorro = $cantidad + Ahorro::$totalahorro;
            }else{
                echo "<h2>Ups, al parecer no puedes retirar esa cantidad</h2><br>";
            }
        }

        public function getConsultar()
        {
            return self::$totalahorro;
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
    