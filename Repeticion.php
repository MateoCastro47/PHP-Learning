<?php

    //En php existen 4 estructuras repetitivas o bucles: While, do while, for y for each. 
    $Valor = 1;

    //El While imprime un valor mientras una condicion se cumpla.
    while ($Valor <= 10) {
        echo "Soy un bucle while <br>";
        $Valor++; //!Importante: Si no sumamos el valor al final del bucle lo haremos infinito y falla el programa
    }
    echo "--------------------- <br>";

    //El do while asegura que por lo menos la sentencia se ejecute una vez.

    $Valor2 = 1;
    do{
        echo "Soy un do while <br>";
        $Valor2++;
    }while($Valor2 < 10);

    echo "--------------------- <br>";

    //El For es una estructura que permite definir una variable en el mismo bucle.
    //Sigue un orden Inicializas variable -> Explicas condición -> Sumas el valor.

    for($Valor3 = 0; $Valor3 <= 10; $Valor3++){
        echo "Soy un bucle for <br>";
    }

    echo "--------------------- <br>";

    //El for each es usado para recorrer arrays. Un array sirve para guardar varios datos en una variable.

    $nombres = ["Victor", "Mateo", "Josefa", "Alba"];

    foreach ($nombres as $nombre) {
        echo $nombre . "<br>";
    };
?>