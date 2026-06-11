<?php
    $nombre = "Mateo Castro Souto";
    //PHP es case sensitive, es decir, distingue entre mayusculas y minusculas entonces nombre =! Nombre
    $Nombre = "Andrea Castro Souto";

    //Las constantes de definen con la funcion define()

    //En la primera posicion va la constante, que sería "CURSO", es la que le retornas al echo.
    //En la segunda va el contenido de la constante, que es lo que retorna la web al ejecutar el programa.

    define("CURSO", "PHP desde cero");

    //También puedes definir arrays

    define("ANIMALES", [
        'perro',
        'gato',
        'leon',
        'tigre'
    ])
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learning Variables</title>
</head>
<body>
    <h1> <?php echo "Hola mundo mi nombre es $nombre" ?></h1>
    <p>
        <?php echo "Estoy haciendo este curso: " . CURSO //Para concatenar es con un . no con el símbolo + ?>
    </p>

    <ul>
        <?php
        echo "Mi animal favorito es el: " . ANIMALES[0]
        ?>
    </ul>
</body>
</html>