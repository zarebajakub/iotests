<?php

/**
 * kontener uzytkownika
 * przechowuje wszystkie istotne dane dla uzytkownika jakim jest uzytkownik (w bazie)
 * 
 */

namespace models;

class User
{
    public $id;
    public $organisationId;
    public $name;
    public $surname;
    public $password;
    public $email;
    public $type;

    public function __construct($userMap=[])
    {
        if(isset($userMap['organisationId'])) { $this->organisationId = $userMap['organisationId']; }
        if(isset($userMap['name'])) { $this->name = $userMap['name']; }
        if(isset($userMap['surname'])) { $this->surname = $userMap['surname']; }
        if(isset($userMap['pass'])) { $this->password = $userMap['pass']; }
        if(isset($userMap['email'])) { $this->email = $userMap['email']; }
        if(isset($userMap['type'])) { $this->type = $userMap['type']; }
    }


}