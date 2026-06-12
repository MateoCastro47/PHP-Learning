<?php
    /*
        CLASE ABSTRACTA = una plantilla a medio hacer.
        Mezcla lo mejor de la herencia y de las interfaces:

          - Puede tener métodos YA hechos (con código), como en la herencia.
          - Puede tener métodos ABSTRACTOS (sin cuerpo) que OBLIGAN a las
            clases hijas a implementarlos, como en una interfaz.

        Regla clave: NO se puede crear un objeto de una clase abstracta.
        $f = new Figura();  // ❌ ERROR. Es solo una plantilla para heredar.
        Tiene sentido: "una figura" en abstracto no existe; existe un círculo,
        un rectángulo... pero "figura genérica" no se puede dibujar.
    */
    abstract class Figura{

        protected string $nombre;

        public function __construct(string $nombre){
            $this->nombre = $nombre;
        }

        // MÉTODO ABSTRACTO: solo la firma, sin cuerpo.
        // Cada figura calcula su área de forma distinta, así que aquí no
        // podemos escribirlo: OBLIGAMOS a cada hija a hacerlo.
        abstract public function area(): float;

        // MÉTODO NORMAL (ya hecho): lo heredan todas las figuras igual.
        // Fíjate que usa area() aunque aquí no sepamos cómo se calcula:
        // confiamos en que la hija lo habrá implementado.
        public function describir(): string {
            return "La figura '" . $this->nombre . "' tiene un área de " . $this->area();
        }
    }
?>
