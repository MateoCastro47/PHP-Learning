<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>

    <!--
        action="Procesar.php"  -> a qué archivo se envían los datos.
        method="$_GET"         -> OJO: aquí debería ir "get" (en minúsculas), no "$_GET".
                                  $_GET es la variable de PHP que LEE los datos, no el método.
                                  Con GET los datos viajan visibles en la URL: Procesar.php?name=Mateo
        name="name"            -> la "etiqueta" con la que PHP encuentra este campo: $_GET["name"]
    -->
    <form action="Procesar.php" method="get">
        <input type="text" name="name">

        <button type="submit">Enviar (GET)</button>
    </form>


   
    <!--
        method="post" -> los datos NO se ven en la URL, viajan "ocultos" en la petición.
                         Se usa para datos sensibles o formularios largos (logins, registros...).
        Cada input necesita su atributo name para poder leerlo luego con $_POST["..."]
    -->
    <form action="Procesar.php" method="post">
        <input type="text" name="nombre" placeholder="Tu nombre">
        <input type="number" name="edad" placeholder="Tu edad">

        <button type="submit">Enviar (POST)</button>
    </form>

</body>
</html>
