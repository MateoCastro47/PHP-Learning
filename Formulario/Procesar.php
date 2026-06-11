<?php

    // $_GET["name"]  -> coge el valor del input cuyo name="name" del formulario GET.
    // Solo funciona si el formulario usa method="get".
    //
    // Lo envolvemos en un if con isset() para que SOLO se ejecute cuando
    // existe el dato. Si no, al enviar el otro formulario (POST) daría el
    // aviso "Undefined array key", porque por POST no llega ningún $_GET["name"].
    if (isset($_GET["name"])) {
        $nombre = $_GET["name"];
        echo "El nombre mandado es: " . $nombre;
    }


    // $_SERVER["REQUEST_METHOD"] nos dice cómo llegó la petición ("GET" o "POST").
    // Así solo procesamos el POST cuando de verdad se envió por POST.
    if ($_SERVER["REQUEST_METHOD"] === "POST") {

        // $_POST["nombre"] -> lee el input cuyo name="nombre" del formulario POST.
        $nombrePost = $_POST["nombre"];
        $edadPost   = $_POST["edad"];

        echo "<br>";
        echo "Por POST recibí -> Nombre: " . $nombrePost . " | Edad: " . $edadPost;
    }

?>
