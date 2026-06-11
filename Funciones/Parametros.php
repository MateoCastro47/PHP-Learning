<?php
    function factorial($numero){ // Inicializas una variable para hacer mas flexible la funcion
        $resultado = 1;
        for($i = 1; $i <= $numero; $i++){
            $resultado = $resultado * $i;
        }
        echo "El factorial de $numero es: " . $resultado;

        
    }

    factorial(5); // Haces factorial de 5;
    echo "<br>";
    factorial(9); // Haces factorial de 9, reutilizando la función;
?>