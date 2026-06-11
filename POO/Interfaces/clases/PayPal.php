<?php
    require_once(__DIR__ . '/../interfaces/MedioPago.php');

    // Otra clase que firma el MISMO contrato, pero paga de OTRA forma.
    class PayPal implements MedioPago{

        private string $email;

        public function __construct(string $email){
            $this->email = $email;
        }

        // Misma firma que en la interfaz, distinta forma de hacerlo.
        public function pagar(float $cantidad): string {
            return "Pagados " . $cantidad . " € con la cuenta PayPal " . $this->email;
        }
    }
?>
