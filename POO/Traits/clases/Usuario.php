<?php
    require_once(__DIR__ . '/../traits/Registrable.php');
    require_once(__DIR__ . '/../traits/identificable.php');

    class Usuario{
        // "use Registrable;" PEGA aquí dentro todos los métodos del trait.
        // Ahora Usuario tiene el método log() como si lo hubiera escrito él.
        use Registrable, identificable;

        private string $nombre;

        public function __construct(string $nombre){
            $this->nombre = $nombre;
        }

        public function registrarse(): void {
            // Usamos el método que nos dio el trait, con $this->
            $this->log("Usuario '" . $this->nombre . "' se ha registrado.");
        }
    }
?>
