<?php 

    class Pessoa {
        private $name;
        private $skinColor;
        private $pet;

        public function __construct($name, $skinColor, $pet) {
            $this->name = $name;
            $this->skinColor = $skinColor;
            $this->pet = $pet;
        }

        static function test() {
            echo "Teste";
        }

        public function getName() {
            self::test();
            echo $this->name;

        }
    }