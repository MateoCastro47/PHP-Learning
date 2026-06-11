<?php 
    function factorial($numero){
    $resultado = 1;
    for($i = 1; $i <= $numero; $i++){
        $resultado *= $i;   // atajo de $resultado = $resultado * $i
    }
    return $resultado;       // devuelve, no imprime
    }

    $f = factorial(5);          // guardas el resultado
    echo $f * 2;                // y lo usas para lo que quieras

?>