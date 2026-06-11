<?php
    class Persona{
        // PROPIEDADES: los datos que guarda cada objeto Persona.
        public string $nombre;
        public string $apellido;
        public int $edad;

        // CONSTRUCTOR: método especial que se ejecuta automáticamente
        // al hacer "new Persona(...)". Aquí recibes los datos y los guardas.
        // $this se refiere al propio objeto que se está creando.
        public function __construct(string $nombre, string $apellido, int $edad){
            $this->nombre   = $nombre;
            $this->apellido = $apellido;
            $this->edad     = $edad;
        }

        // MÉTODO: una función que pertenece a la clase.
        // Devuelve un texto usando los datos del objeto.
        public function presentar(): string {
            return "Hola, soy " . $this->nombre . " " . $this->apellido .
                   " y tengo " . $this->edad . " años.";
        }

        // GETTER: solo DEVUELVE el dato. No recibe parámetros.
        // ": string" indica el tipo que devuelve.
        public function getNombre(): string {
            return $this->nombre;
        }

        // SETTER: RECIBE un valor y lo guarda en la propiedad. No devuelve nada.
        // "string $nombre" indica el tipo que acepta el parámetro.
        // ": void" indica que el método no devuelve nada.
        public function setNombre(string $nombre): void {
            $this->nombre = $nombre;
        }
    }
?>
