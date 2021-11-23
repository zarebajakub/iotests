<?php
$doc_root = $_SERVER['DOCUMENT_ROOT'];

require_once $doc_root.'/dao/baseDao.php';
require_once $doc_root.'/common.php';
require_once $doc_root.'/models/User.php';

use models\Client;
use models\User;


$email = htmlentities($_POST['email']);
$password = $_POST['pass'];
$repeat_password = $_POST['pass-repeat'];

if($_POST['pass'] != $_POST['pass-repeat'])
{
    redirect('signup.html', ['Hasła powinny być takie same']);
}

$password = $_POST['pass'];//password_hash($_POST['pass'],  PASSWORD_DEFAULT);

$user = findUser($email, $password);
if($user)
{
    redirect('signup.html', ['To konto już istnieje']);
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
        $url = '/views/employee/index.php';
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
        $url = '/views/boss/index.php';
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
        $url = '/views/client/index.php';
    }
}


if($ok)
{
    redirect($url, [$user]);
}
else
{
    redirect('signup.html', ['Coś poszło nie tak z rejestracją']);
}


?>