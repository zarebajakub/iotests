<?php

/**
 * kontener klienta
 * przechowuje wszystkie istotne dane dla uzytkownika jakim jets klient
 * 
 */

namespace models;

class Client
{
    public $id;
    public $name;
    public $surname;
    public $password;
    public $email;
    public $phoneNumber;

    public function __construct($userMap=[])
    {
        if(isset($userMap['organisationId'])) { $this->organisationId = $userMap['organisationId']; }
        if(isset($userMap['name'])) { $this->name = $userMap['name']; }
        if(isset($userMap['surname'])) { $this->surname = $userMap['surname']; }
        if(isset($userMap['password'])) { $this->password = $userMap['pass']; }
        if(isset($userMap['email'])) { $this->email = $userMap['email']; }
        if(isset($userMap['phoneNumber'])) { $this->phoneNumber = $userMap['phoneNumber']; }
    }

}