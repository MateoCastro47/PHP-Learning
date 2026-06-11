<?php
    require_once('clases/CuentaBancaria.php');

    // Creamos una cuenta con 100 € de saldo inicial.
    $cuenta = new CuentaBancaria("Mateo", 100);

    echo "Titular: " . $cuenta->getTitular() . "<br>";
    echo "Saldo inicial: " . $cuenta->getSaldo() . " €<br><br>";

    $cuenta->ingresar(50);     // OK -> 150
    $cuenta->retirar(30);      // OK -> 120
    $cuenta->retirar(500);     // saldo insuficiente, lo bloquea
    $cuenta->ingresar(-10);    // cantidad negativa, lo bloquea

    echo "<br>Saldo final: " . $cuenta->getSaldo() . " €<br>";


    /*
       Descomenta la línea de abajo y recarga la página.
       Verás un ERROR: no puedes tocar el saldo directamente.
       Eso es justo lo que protege el encapsulamiento. */

    // $cuenta->saldo = 999999;   // <- Fatal error: Cannot access private property

   $CuentaDestino = new CuentaBancaria("Mateo", 200);

   $cuenta->transferir($CuentaDestino, 10);
   echo "<br> Saldo final de la cuenta 1: " . $cuenta->getSaldo() . "<br>";
   echo "<br> Saldo final de la cuenta destino: " . $CuentaDestino-> getSaldo() . "<br>";

?>
