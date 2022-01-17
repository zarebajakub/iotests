<?php
/**
 * W tym pliku jest sprawdzenie czy istnieje uzytkownik o danym e-mailu i hasle w bazie jesli tak to loguje
 * i przekierowuje na wlasciwa strone glowna, jesli nie to wraca do strony logowania
 * 
 */
if (session_status() == PHP_SESSION_NONE) 
{
    session_start();
}
$doc_root = $_SESSION['ROOT'];

require_once $doc_root.'/dao/baseDao.php';
require_once $doc_root.'/common.php';


$email = $_POST['email'];
$password = $_POST['pass'];

$user = findUser($email, $password);

if($user)
{
    session_start();
    $_SESSION['User'] = $user;

    $userType = whoIsIt($user);

    if($userType == EMPLOYEE)
    {
        redirect('/views/employee/employee-page/main-page.php');
    }
    else if($userType == BOSS)
    {
        redirect('/views/boss/boss-page/main-page.php');
    }
    else if($userType == CLIENT)
    {
        redirect('/views/client/client-page/main-page.php');
    }
}
redirect('/views/login.php');
?>