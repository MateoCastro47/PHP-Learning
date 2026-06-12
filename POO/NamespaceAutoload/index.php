<?php
    // UN SOLO require: el del autoloader. Y ya está.
    // Fíjate que NO hay un require por cada clase. Ahí está la ganancia.
    require_once 'autoload.php';

    // "use" = importamos la clase por su nombre completo, para luego
    // escribir solo "Usuario" en vez de "App\Modelos\Usuario" cada vez.
    use App\Modelos\Usuario;
    use App\Servicios\Logger;

    // Al hacer "new Usuario(...)", PHP no la encuentra cargada
    // -> llama al autoloader -> este abre src/Modelos/Usuario.php. ¡Magia!
    $usuario = new Usuario("Mateo");
    $logger  = new Logger();

    $logger->log("Usuario creado: " . $usuario->getNombre());


    /* ====== 🏋️ EJERCICIO PARA TI ======
       1) Crea una clase nueva "Producto" en src/Modelos/Producto.php
          con el namespace  App\Modelos  (¡igual que Usuario!).
       2) Aquí añade  use App\Modelos\Producto;  y créala con new.
       NO añadas ningún require_once: si la carpeta y el namespace coinciden,
       el autoloader la cargará solo. Esa es toda la idea. */
?>
