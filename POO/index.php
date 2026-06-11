<?php
    require_once('clases/Persona.php');   // primero el padre
    require_once('clases/Espanhol.php');   // luego el hijo (necesita que Persona ya exista)

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

    echo "<br>";

    $persona2 = new Espanhol("", "Vazquez", 20, "Galicia");

    $persona2-> setNombre("Marcos");
    
    echo $persona2->presentar();


    echo "<br>";

    echo $persona2->saludarRegion();
?>
