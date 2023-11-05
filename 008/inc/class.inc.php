<?php 
        
    class Person {
        private $nome;
        private $idade;


        public static $idadeParaBeber = 18;

        public function __construct($nome, $idade) {
            $this->nome = $nome;
            $this->idade = $idade;
        }

        public function mudarNome($nome) {
            $this->nome = $nome;
        }

        public function getNome() {
            return $this->nome;
        }

        public static function setIdadeParaBeber($idade) {
            self::$idadeParaBeber = $idade;
        }
    }