# PHP Learning

Repositorio de aprendizaje de **PHP**, organizado por temas. Cada archivo está comentado en español y pensado para repasar conceptos con ejemplos ejecutables, desde la sintaxis básica hasta la Programación Orientada a Objetos.

## Requisitos

- **PHP 7.4+** (recomendado PHP 8).
- Un servidor local como **XAMPP** (el repo vive en `htdocs/PHP`), o el servidor embebido de PHP.

## Cómo ejecutarlo

Con XAMPP, inicia Apache y abre en el navegador, por ejemplo:

```
http://localhost/PHP/Sintaxis/holaMundo.php
```

O usando el servidor embebido de PHP desde la raíz del proyecto:

```bash
php -S localhost:8000
```

Y luego visita `http://localhost:8000/Sintaxis/holaMundo.php`.

## Estructura

### `Sintaxis/`
Fundamentos del lenguaje.

- `holaMundo.php` — primer script y `echo` embebido en HTML.
- `variablesYconstantes.php` — variables y constantes.
- `TiposDeDatos.php` — tipos de datos.
- `Operadores.php` — operadores.
- `Condicionales.php` — `if` / `else`.
- `SeleccionMultiple.php` — `switch`.
- `Repeticion.php` — bucles (`for`, `while`, `foreach`).

### `Funciones/`
Definición y uso de funciones.

- `DefinirFunciones.php` — cómo declarar funciones.
- `Parametros.php` — parámetros y argumentos.
- `returnVsEcho.php` — diferencia entre `return` y `echo`.

### `Formulario/`
Manejo de formularios y métodos HTTP.

- `Formularios.php` — formularios con `GET` y `POST`.
- `Procesar.php` — lectura de datos con `$_GET` / `$_POST`.

### `POO/`
Programación Orientada a Objetos.

- `index.php` + `clases/` — clases, herencia (`Persona` / `Espanhol`) y constructores.
- `Encapsulamiento/` — propiedades privadas, getters y setters (`CuentaBancaria`).
- `ClasesAbstractas/` — clases abstractas y figuras geométricas (`Figura`, `Circulo`, `Rectangulo`, `Triangulo`).
- `Interfaces/` — interfaces y polimorfismo (`MedioPago` con `Efectivo`, `Tarjeta`, `PayPal`).
- `Traits/` — reutilización de código con traits (`Identificable`, `Registrable`).
- `NamespaceAutoload/` — namespaces y autoload con `spl_autoload_register`.

## Notas

Algunos comentarios del código incluyen, de forma intencionada, advertencias sobre errores comunes (por ejemplo, usar `method="get"` en lugar de `method="$_GET"` en los formularios) como recordatorio de aprendizaje.
