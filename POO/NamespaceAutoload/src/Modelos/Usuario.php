<?php
    // NAMESPACE = el "apellido" de esta clase.
    // Su nombre completo pasa a ser:  App\Modelos\Usuario
    // Se declara en la PRIMERA línea de código del archivo.
    namespace App\Modelos;

    class Usuario{
        private string $nombre;

        public function __construct(string $nombre){
            $this->nombre = $nombre;
        }

        public function getNombre(): string {
            return $this->nombre;
        }
    }
?>
