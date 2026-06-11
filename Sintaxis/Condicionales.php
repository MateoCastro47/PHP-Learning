<?php
    $a = 5;
    $b = 2;

    echo "Este párrafo siempre se va a ver";
    echo "<br>";
    if($a < $b){
        echo "Este párrafo se ve si a < b";
    } else {
        echo "Este se ve si a > b";
    };
    echo "<br>";
    echo "Este también se ve siempre";
    echo "<br>";

    //También existen las condiciones anidadas, es decir que tienen mas que dos opciones, esto se hace usando un else if.

// Operadores ternarios

    //* Un operador ternario es una forma alternativa de escribir una condicional, es mas compacto

    // El símbolo de interrogación es el equivalente al if en los condicionales
    $valor = $a > $b ? "Mayor" : "Menor"; //! El : separa los valores, los valores a la izquierda se imprimen si se cumple la condición y los de la derecha los que no se cumplen.
    echo $valor;
?>