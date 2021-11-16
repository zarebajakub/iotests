<?php

namespace models;

class User implements baseModelInterface
{
    public $id;
    public $name;
    public $password;
    public $email;
    public $type; // employee, boss

    public function validate()
    {
        $ok = true;

        return $ok;
    }
    public function toMap()
    {

    }
}