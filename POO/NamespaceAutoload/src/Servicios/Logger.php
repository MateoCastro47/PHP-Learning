<?php
    // Esta clase vive en otro namespace: App\Servicios
    // Gracias a eso, podría existir OTRA clase "Logger" en App\Otro
    // sin chocar: una sería App\Servicios\Logger y la otra App\Otro\Logger.
    namespace App\Servicios;

    class Logger{
        public function log(string $mensaje): void {
            echo "[LOG " . date("H:i:s") . "] " . $mensaje . "<br>";
        }
    }
?>
