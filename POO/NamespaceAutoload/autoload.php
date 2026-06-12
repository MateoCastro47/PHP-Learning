<?php
    /*
        EL AUTOLOADER
        =============
        spl_autoload_register() registra una función que PHP llama
        AUTOMÁTICAMENTE cada vez que usas una clase que aún no está cargada.
        Recibe el nombre completo de la clase (con su namespace) y nuestra
        tarea es deducir EN QUÉ ARCHIVO está y cargarlo.

        Truco: hacemos que el namespace coincida con las carpetas.
          Clase:   App\Modelos\Usuario
          Archivo: src/Modelos/Usuario.php
        Así, traducir de uno a otro es solo cambiar "\" por "/".
    */
    spl_autoload_register(function (string $clase) {

        // 1) Nuestro prefijo de namespace y la carpeta donde vive.
        $prefijo = 'App\\';
        $carpetaBase = __DIR__ . '/src/';

        // 2) ¿La clase empieza por "App\"? Si no, no es nuestra.
        if (strpos($clase, $prefijo) !== 0) {
            return;
        }

        // 3) Quitamos el prefijo:  App\Modelos\Usuario -> Modelos\Usuario
        $claseRelativa = substr($clase, strlen($prefijo));

        // 4) Cambiamos las "\" por "/" y añadimos .php
        //    Modelos\Usuario -> Modelos/Usuario.php
        $archivo = $carpetaBase . str_replace('\\', '/', $claseRelativa) . '.php';

        // 5) Si el archivo existe, lo cargamos.
        if (file_exists($archivo)) {
            require_once $archivo;
        }
    });
?>
