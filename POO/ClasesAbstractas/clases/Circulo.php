<?php
    require_once(__DIR__ . '/Figura.php');

    // Circulo HEREDA de Figura (que es abstracta).
    class Circulo extends Figura{

        private float $radio;

        public function __construct(float $radio){
            // Llamamos al constructor del padre para fijar el nombre...
            parent::__construct("Círculo");
            // ...y guardamos lo propio del círculo.
            $this->radio = $radio;
        }

        // OBLIGATORIO: implementamos el método abstracto area().
        // Si no lo hiciéramos, PHP daría error.
        public function area(): float {
            return pi() * $this->radio ** 2;   // π · r²   (** es "elevado a")
        }
    }
?>
