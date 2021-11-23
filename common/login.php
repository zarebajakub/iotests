<?php
$doc_root = $_SERVER['DOCUMENT_ROOT'];

require_once $doc_root.'/dao/baseDao.php';
require_once $doc_root.'/common.php';


$email = $_POST['email'];
$password = password_hash($_POST['pass'],  PASSWORD_DEFAULT);

$user = findUser($email, $password);
if($user)
{
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
redirect('index.html');
?>