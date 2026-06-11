<?php
    require_once(__DIR__ . '/../interfaces/MedioPago.php');

    // "implements MedioPago" = esta clase FIRMA el contrato.
    // Por tanto está OBLIGADA a tener el método pagar().
    class Tarjeta implements MedioPago{

        private string $numero;

        public function __construct(string $numero){
            $this->numero = $numero;
        }

        // Implementación PROPIA de pagar() para una tarjeta.
        public function pagar(float $cantidad): string {
            // Mostramos solo los 4 últimos dígitos (buena práctica).
            $ultimos = substr($this->numero, -4);
            return "Pagados " . $cantidad . " € con la tarjeta terminada en " . $ultimos;
        }
    }
?>
