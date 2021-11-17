<?php

namespace models;

class Client implements baseModelInterface
{
    public $id;
    public $name;
    public $surname;
    public $email;
    public $telefon;
    public $companyName;

    public function validate()
    {
        $ok = true;

        return $ok;
    }
    public function toMap()
    {

    }
}