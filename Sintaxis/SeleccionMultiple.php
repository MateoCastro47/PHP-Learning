<?php
    // Cuando quieres comparar el valor de una variable entre varios casos, existe una estructura llamada Switch.
    // Switch te ahorra usar varios condicionales que solo hacen mas verboso el código.

    $a = 3;

    switch ($a) { // El Switch divide su estructura en casos, si tu variable cumple la condicion del caso su código se inicia. 
        case '1':
            echo "El valor es 1";
            break;
        case '2':
            echo "El valor es 2";
            break;
        case '3':
            echo "El valor es 3";
            break;
        default: // Si no se cumple ninguna de las condiciones el default lanza su código.
            echo "El valor de a no es válido";
            break;
    };

    echo "<br>";

    // MATCH (desde PHP 8.0): alternativa más moderna y segura al switch.
   

    // match es una EXPRESIÓN: en vez de ejecutar código, DEVUELVE un valor,
    // por eso lo guardamos en una variable (o lo pasamos directo a un echo).
    $resultado = match ($a) { // compara $a con cada caso usando === (comparación ESTRICTA: el tipo importa, 3 no es igual a '3')
        1 => "El valor es 1",            // cada rama usa => y devuelve un valor; NO hace falta break (no hay "caída" al siguiente caso)
        2 => "El valor es 2",
        3 => "El valor es 3",            // si $a vale 3 (entero), esta rama coincide
        default => "El valor de a no es válido", // se ejecuta si ninguna rama coincide; sin default, un valor no contemplado lanza UnhandledMatchError
    }; // el ; es obligatorio: match es una expresión y termina en una sentencia de asignación

    echo $resultado;
?>