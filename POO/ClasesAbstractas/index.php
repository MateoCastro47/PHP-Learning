<?php
    require_once('clases/Circulo.php');
    require_once('clases/Rectangulo.php');
    require_once('clases/Triangulo.php');

    $circulo    = new Circulo(5);
    $rectangulo = new Rectangulo(4, 3);
    $triangulo = new Triangulo(3, 3);

    // describir() está hecho en la clase abstracta y lo heredan los dos,
    // pero cada uno calcula su area() a su manera.
    echo $circulo->describir() . "<br>";
    echo $rectangulo->describir() . "<br>";
    echo $triangulo-> describir() . "<br>";
    echo "<hr>";

    // PRUEBA: intenta crear la clase abstracta directamente.
    // Descomenta y verás el error -> no se puede instanciar una abstracta.
    // $f = new Figura("Genérica");   // ❌ Fatal error: Cannot instantiate abstract class


    /* ====== 🏋️ EJERCICIO PARA TI ======
       Crea una clase "Triangulo" (clases/Triangulo.php) que herede de Figura.
       - Constructor: recibe base y altura.
       - area(): devuelve (base * altura) / 2.
       Luego pruébala aquí con $triangulo->describir().
       Verás que NO tienes que reescribir describir(): te lo da gratis el padre. */
?>
