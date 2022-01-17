<?php


if (session_status() == PHP_SESSION_NONE) 
{
    session_start();
}
$doc_root = $_SESSION['ROOT'];

echo $doc_root;

require_once $doc_root.'/dao/baseDao.php';
require_once $doc_root.'/common.php';
require_once $doc_root.'/models/User.php';
require_once $doc_root.'/models/Client.php';

use models\Client;
use models\User;

$email = htmlentities($_POST['email']);
$password = $_POST['pass'];
$repeat_password = $_POST['pass-repeat'];

if($user)
{
    redirect('signup.php', ['To konto już istnieje']);
}

// w tym momencie trzeba sprawdzic jakie konto to ma być - employee czy klient czy boss

$userType = $_POST['user-type'];

$url = "";

if($userType == 'employee')
{
    $user = new User();
    $user->password = $password;
    $user->email = $email;
    $user->type = EMPLOYEE;
    $ok= registerUser($user);
    if($ok)
    {
        $url = '/views/employee-boss-dodatkowe.php';
    }
}
else if($userType == 'project-manager')
{
    $user = new User();
    $user->password = $password;
    $user->email = $email;
    $user->type = BOSS;
    $ok = registerUser($user);
    if($ok)
    {
        $url = '/views/employee-boss-dodatkowe.php';
    }
}
else if($userType == 'client')
{
    $user = new Client();
    $user->password = $password;
    $user->email = $email;
    $ok = registerClient($user);
    if($ok)
    {
        $url = '/views/klient-dodatkowe.php';
    }
}


if($ok)
{
    redirect($url);
}
else
{
    redirect('signup.php', ['Coś poszło nie tak z rejestracją']);
}


?>