<?php
    require_once(__DIR__ . '/Figura.php');

    class Rectangulo extends Figura{

        private float $base;
        private float $altura;

        public function __construct(float $base, float $altura){
            parent::__construct("Rectángulo");
            $this->base   = $base;
            $this->altura = $altura;
        }

        // Misma obligación, distinta fórmula: base · altura.
        public function area(): float {
            return $this->base * $this->altura;
        }
    }
?>
