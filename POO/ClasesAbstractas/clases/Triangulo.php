<?php
    
    require_once(__DIR__ . '/Figura.php');

    class Triangulo extends Figura{

        public float $base;
        public float $altura;

        public function __construct(float $base, float $altura)
        {
            parent::__construct("Triangulo");
            $this->base = $base;
            $this->altura = $altura;
        }

        public function area() : float{
            return $this->base * $this->altura / 2;
        }
    }

?>