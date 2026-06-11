<?php
 //Operadores aritméticos

    $a = 4;
    $b = 2;

    $c = $a + $b; // Ademas de + existen otros operadores matematicos
    $d = $a * $b; //Multiplicacion
    $e = $a / $b; // División
    $f = $a - $b; //Resta
    $g = $a % $b; //Módulo, sirve para conseguir el resto de una division

    echo $c; // 2 + 2 = 4
    echo "<br>";
    echo $d; // 2 * 2 = 4
    echo "<br>";
    echo $e; // 2 / 2 = 1
    echo "<br>";
    echo $f; // 2 - 2 = 0
    echo "<br>";
    echo $g; // 2 % 2 = 0
    echo "<br>";

//Operadores Lógicos

    $A = 10;
    $B = 10;

    echo $A == $B; // No confundir con "=" un signo igual es asignación, dos juntos es comparación.
    echo "<br>";

    
    //Para ver el booleano que nos devuelve, true o false sin necesariamente ser 0 o 1 usamos var_dump.

    var_dump($A == $B); //Devuelve bool(true)
    echo "<br>";
    var_dump($A != $B); //Devuelve bool(false) "!=" es el operador de negación, si A es distinto a B. Cómo 10 no es distinto a 10 devuelve false;
    echo "<br>";
    var_dump($A > $B); // Operador Mayor que, devuelve true si A es mayor que B
    echo "<br>";
    var_dump($A < $B); // Operador menor que, devuelve true si A es menor que B
    echo "<br>";
    var_dump($A >= $B); // Operador Mayor/Menor o igual que, devuelve True si se cumple alguna de las condiciones.
    echo "<br>";

//Operaciones de asignación Combinada

    $C = 1;

    $C++; //Este operador suma 1 al valor de la variable, entonces el valor de C pasa de ser 1 a 2;

    echo $C;
    echo "<br>";

    //Depende de como asignes la variable puede llevar a confusión.

    $D = 1;
    echo "<br>";
    $E = $D++;
    echo "<br>";
    echo "El valor de D es: $D";
    echo "<br>";
    echo "El valor de E es: $E"; // Cómo el operador ++ está puesto después de $D, $E coje primero el valor 1, lo muestra y después lo suma. Si estuviese escrito al reves ++$D primero lo sumaría y después lo mostraría.
?>