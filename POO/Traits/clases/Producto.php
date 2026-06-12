<?php
    require_once(__DIR__ . '/../traits/Registrable.php');

    // Producto NO tiene NADA que ver con Usuario (no comparten padre),
    // pero los dos pueden usar el MISMO trait. Eso es lo potente:
    // reutilizas código entre clases sin relación de herencia.
    class Producto{
        use Registrable;

        private string $nombre;
        private float $precio;

        public function __construct(string $nombre, float $precio){
            $this->nombre = $nombre;
            $this->precio = $precio;
        }

        public function ponerEnVenta(): void {
            $this->log("Producto '" . $this->nombre . "' a la venta por " . $this->precio . " €.");
        }
    }
?>
