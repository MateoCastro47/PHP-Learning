<?php
    require_once(__DIR__ . '/../interfaces/MedioPago.php');

    class Efectivo implements MedioPago{
        public function pagar(float $cantidad): string
        {
            return "Has pagado " . $cantidad . " € en efectivo";
        }
    }

?>