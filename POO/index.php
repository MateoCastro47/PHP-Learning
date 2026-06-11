<?php
    require_once('clases/Persona.php');

    // Creamos un objeto (una "Persona" concreta).
    // Los datos se pasan AQUÍ, entre paréntesis del new -> van al constructor.
    $persona1 = new Persona("", "Castro", 20);

    $persona1->setNombre("Jose");
    // Para mostrar usamos un MÉTODO del objeto, con la flecha ->
    // (no se llama al objeto con paréntesis: $persona1(...) está mal).
    echo $persona1->presentar();

    echo "<br>";

    // También puedes acceder a una propiedad suelta con ->
    echo "Solo el nombre: " . $persona1->getNombre();

?>
