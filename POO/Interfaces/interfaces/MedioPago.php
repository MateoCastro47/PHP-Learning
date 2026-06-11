<?php
    /*
        INTERFAZ = un CONTRATO.
        Dice QUÉ métodos debe tener una clase, pero NO cómo los hace.

        Reglas de una interfaz:
          - Se declara con la palabra "interface" (no "class").
          - Sus métodos NO tienen cuerpo: solo la firma y un ";".
          - Todos sus métodos son public por obligación.

        Cualquier clase que use "implements MedioPago" se compromete a
        escribir TODOS estos métodos. Si olvida uno, PHP da error.
    */
    interface MedioPago{

        // "Quien firme este contrato debe saber pagar una cantidad."
        public function pagar(float $cantidad): string;
    }
?>
