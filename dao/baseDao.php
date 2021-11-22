<?php
require_once $doc_root.'/config.php';

use models\User;
use models\Client;

function query($query)
{
    try
    {
        global $link;
        return mysqli_query($link, $query);
    }
    catch(Exception $dbExc)
    {
        print_r('DATABASE EXCEPTION: '. $dbExc->getMessage().'\n');
        throw $dbExc;
    }
}

function findUser($email, $passEncrypted)
{
    $result = query("SELECT * FROM users WHERE email = $email AND password = $passEncrypted");

    if($result)  { return $result; }

    $client = query('');

    return $client;
}

function registerUser(User $user)
{
    query('');


}

function registerClient(Client $client)
{
    query('');

    
}