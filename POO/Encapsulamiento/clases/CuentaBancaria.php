<?php
    /*
        Una cuenta bancaria es el ejemplo perfecto: el saldo NO se puede
        cambiar a mano (sería hacer trampa). Solo se puede modificar
        ingresando o retirando dinero, y con reglas (no retirar de más).

        Eso es encapsular: ocultar el dato (private) y controlar el acceso
        con métodos.
    */
    class CuentaBancaria{

        // private = nadie puede hacer $cuenta->saldo = 1000000 desde fuera.
        // Solo se toca a través de los métodos de abajo.
        private float $saldo;
        private string $titular;

        public function __construct(string $titular, float $saldoInicial = 0){
            $this->titular = $titular;
            $this->saldo   = $saldoInicial;
        }

        // GETTER: leer el saldo está permitido (consultarlo no es peligroso).
        public function getSaldo(): float {
            return $this->saldo;
        }

        public function getTitular(): string {
            return $this->titular;
        }

        // En vez de un setter "tonto", métodos con REGLAS:

        // INGRESAR: solo sumar cantidades positivas.
        public function ingresar(float $cantidad): void {
            if ($cantidad <= 0) {
                echo "Error: la cantidad a ingresar debe ser positiva.<br>";
                return;
            }
            $this->saldo += $cantidad;
            echo "Ingresados " . $cantidad . " €. Saldo actual: " . $this->saldo . " €<br>";
        }

        // RETIRAR: no se puede sacar más de lo que hay. ESTA es la magia
        // del encapsulamiento: el objeto se protege a sí mismo.
        public function retirar(float $cantidad): void {
            if ($cantidad <= 0) {
                echo "Error: la cantidad a retirar debe ser positiva.<br>";
                return;
            }
            if ($cantidad > $this->saldo) {
                echo "Error: saldo insuficiente. Tienes " . $this->saldo . " €<br>";
                return;
            }
            $this->saldo -= $cantidad;
            echo "Retirados " . $cantidad . " €. Saldo actual: " . $this->saldo . " €<br>";
        }

        public function transferir(CuentaBancaria $destino, float $cantidad){
            $this->retirar($cantidad);
            $destino-> ingresar($cantidad);
        }
    }
?>
