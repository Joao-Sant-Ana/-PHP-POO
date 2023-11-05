<?php
    // Aula 6, 7 continua aqui.
    declare(strict_types=1);

    class Person {

        // Properties
        private string $nome;
        private string $corFavorita;
        private int $idade;

        // Dá valores as propriedades da função, logo quando o objeto é criado.
        public function __construct(string $nome, string $corFavorita, int $idade) {
            $this->nome = $nome;
            $this->corFavorita = $corFavorita;
            $this->idade = $idade;
        }

        // Methods
        public function setName($name) {
            $this->nome = $name;
        }


        public function getName() {
            return $this->nome;
        }

        public function __destruct() {
            echo "Fim da classe";
        }
    }
