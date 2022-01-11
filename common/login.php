<?php
if (session_status() == PHP_SESSION_NONE) 
{
    session_start();
}
$doc_root = $_SESSION['ROOT'];

require_once $doc_root.'/dao/baseDao.php';
require_once $doc_root.'/common.php';


$email = $_POST['email'];
$password = $_POST['pass'];//password_hash($_POST['pass'],  PASSWORD_DEFAULT);

$user = findUser($email, $password);

if($user)
{
    session_start();
    $_SESSION['User'] = $user;

    $userType = whoIsIt($user);

    if($userType == EMPLOYEE)
    {
        redirect('/views/employee/index.php', $user);
    }
    else if($userType == BOSS)
    {
        redirect('/views/boss/index.php', $user);
    }
    else if($userType == CLIENT)
    {
        redirect('/views/client/index.php', $user);
    }
}
redirect('login.php');
?>