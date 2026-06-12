<?php
    require_once('clases/Usuario.php');
    require_once('clases/Producto.php');

    $usuario  = new Usuario("Mateo");
    $producto = new Producto("Teclado", 25.50);

    // Las dos clases, totalmente distintas, comparten el método log()
    // gracias al trait Registrable.
    $usuario->registrarse();
    $producto->ponerEnVenta();

    echo "<hr>";

    // También puedes usar log() directamente, porque el trait se lo dio a ambas.
    $usuario->log("Mensaje suelto desde un Usuario.");
    $producto->log("Mensaje suelto desde un Producto.");
    $usuario->setId(1);                       // 1º asignamos el id
    echo "El id del usuario es: " . $usuario->getId() . "<br>";   // 2º lo leemos (con echo)


    /* ====== 🏋️ EJERCICIO PARA TI ======
       Crea un trait nuevo "Identificable" (traits/Identificable.php) que tenga
       una propiedad $id y un método getId().
       Luego haz que Usuario use LOS DOS traits a la vez:
            use Registrable, Identificable;
       Sí: una clase puede usar varios traits separados por comas.
       Eso es justo lo que NO te deja hacer la herencia (solo 1 padre). */
?>
