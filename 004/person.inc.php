<?php

//Por padrão colocar tudo como private e com a necessidade mudar para protected ou public.

class Person {
    protected $firstname = "Joao";
    private $lastname;
    private $age;
}

class Pet extends Person{
    public function owner() {
        $a = $this->firstname;
        return $a;
    }
}