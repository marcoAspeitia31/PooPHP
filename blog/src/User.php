<?php

namespace App;

abstract class User
{
    private $name;
    private $email;
    private $login;
    
    protected function __construct($name, $email)
    {
        $this->name = $name;
        $this->email = $email;
        $this->login = false;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getLogin()
    {
        return $this->login;
    }

    public function login()
    {
        $this->login = true;
    }

    public function logout()
    {
        $this->login = false;
    }

}