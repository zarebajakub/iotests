<?php

namespace models;

class Client implements baseModelInterface
{
    public $id;
    public $name;
    public $surname;
    public $password;
    public $email;
    public $phoneNumber;
    public $companyName;

    public function __construct($userMap=[])
    {
        if(isset($userMap['organisationId'])) { $this->organisationId = $userMap['organisationId']; }
        if(isset($userMap['name'])) { $this->name = $userMap['name']; }
        if(isset($userMap['surname'])) { $this->surname = $userMap['surname']; }
        if(isset($userMap['password'])) { $this->password = $userMap['pass']; }
        if(isset($userMap['email'])) { $this->email = $userMap['email']; }
        if(isset($userMap['phoneNumber'])) { $this->phoneNumber = $userMap['phoneNumber']; }
        if(isset($userMap['companyName'])) { $this->companyName = $userMap['companyName']; }
    }

    public function validate()
    {
        $ok = true;

        return $ok;
    }
    public function toMap()
    {

    }
}