<?php

class User
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    final public function getName() //variable final impide que se sobreescriba la función (evita el polimorfismo)
    {
        return $this->name;
    }
}