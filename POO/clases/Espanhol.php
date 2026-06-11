<?php
    // HERENCIA: "extends Persona" significa que Espanhol HEREDA todo lo de
    // Persona (sus propiedades y métodos: nombre, apellido, edad, presentar...).
    // Espanhol ES una Persona, pero con cosas propias añadidas.
    class Espanhol extends Persona{

        // Propiedad NUEVA que solo tienen los españoles.
        public string $comunidad;

        // Constructor propio. Recibe los datos de Persona + la comunidad.
        public function __construct(string $nombre, string $apellido, int $edad, string $comunidad){
            // parent::__construct(...) llama al constructor de la clase PADRE
            // (Persona) para que rellene nombre, apellido y edad.
            parent::__construct($nombre, $apellido, $edad);

            // Y aquí guardamos lo que es exclusivo de Espanhol.
            $this->comunidad = $comunidad;
        }

        // Método propio de Espanhol.
        public function saludarRegion(): string {
            return "Soy de " . $this->comunidad;
        }
    }
?>
