<?php
    trait identificable{
        public int $id;

        // SETTER: mete un valor en $id. Hay que llamarlo ANTES de getId(),
        // si no, $id está "sin inicializar" y getId() peta.
        public function setId(int $id): void {
            $this->id = $id;
        }

        // GETTER: devuelve el id YA guardado.
        public function getId(): int {
            return $this->id;
        }
    }
?>
