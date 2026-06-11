<?php

    function factorial(){ // La función se define con la palabra reservada function;

        $resultado = 1;

        for($i = 1; $i < 9; $i++){
            $resultado = $resultado * $i;
        }

        echo "El factorial de 9 es: " . $resultado;
    } // Al finalizar el cuerpo la llamas.

    factorial(); // Al llamar a una función lo haces con su nombre, no hace falta el function.


    //Una variable definida fuera de una función no es tenida
?> 