<?php
    /*
        TRAIT = un bloque de métodos (y/o propiedades) reutilizable
        que se "inserta" dentro de varias clases, AUNQUE no tengan
        ninguna relación de herencia entre ellas.

        El problema que resuelve:
          - En PHP una clase solo puede "extends" UNA clase.
          - Pero a veces varias clases distintas necesitan el MISMO método.
          - Un trait te deja compartir ese código sin herencia.

        Se declara con "trait" (no "class") y NO se puede instanciar:
        no existe  new Registrable();  -> es solo código para "pegar" en clases.
    */
    trait Registrable{

        // Método que cualquier clase que USE este trait tendrá gratis.
        public function log(string $mensaje): void {
            // date() da la fecha y hora actual.
            echo "[" . date("H:i:s") . "] " . $mensaje . "<br>";
        }
    }
?>
