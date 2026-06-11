<?php
    require_once('clases/Tarjeta.php');
    require_once('clases/PayPal.php');
    require_once('clases/Efectivo.php');

    // Creamos dos medios de pago DISTINTOS.
    $tarjeta = new Tarjeta("1234567812345678");
    $paypal  = new PayPal("mateo@email.com");
    $efectivo = new Efectivo;

    // Cada uno paga a su manera, pero los dos entienden "pagar()".
    echo $tarjeta->pagar(50) . "<br>";
    echo $paypal->pagar(30) . "<br>";

    echo "<hr>";

    /*
        LA GRAN VENTAJA (polimorfismo):
        Esta función acepta CUALQUIER cosa que cumpla el contrato MedioPago.
        No le importa si es Tarjeta, PayPal o algo que inventes mañana:
        mientras tenga pagar(), funciona. El "type hint" es la INTERFAZ.
    */
    function procesarCompra(MedioPago $medio, float $importe): void {
        echo "Procesando compra...<br>";
        echo $medio->pagar($importe) . "<br>";
    }

    procesarCompra($tarjeta, 100);   // le paso una Tarjeta
    procesarCompra($paypal, 200);    // le paso un PayPal -> la MISMA función vale
    procesarCompra($efectivo, 50);

    /* ====== 🏋️ EJERCICIO PARA TI ======
       Crea una clase nueva "Efectivo" (en clases/Efectivo.php) que TAMBIÉN
       implemente MedioPago. Su pagar() puede devolver algo como
       "Pagados X € en efectivo".
       Luego pruébala aquí con procesarCompra($efectivo, 75).
       Verás que NO hace falta tocar la función procesarCompra: ese es el poder
       de programar contra una interfaz. */
?>
