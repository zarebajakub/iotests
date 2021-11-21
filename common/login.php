<?php
$doc_root = $_SERVER['DOCUMENT_ROOT'];

require_once $doc_root.'/dao/baseDao.php';
require_once $doc_root.'/common.php';


$email = $_POST['email'];
$password = $_POST['pass'];

$user = ['uprawnienia'=>'EMPLOYEE',
'param2'=>'value2'];//findUser($email, $password);
if($user)
{
    if(isset($user['uprawnienia']))
    {
        if($user['uprawnienia'] == 'EMPLOYEE')
        {
            redirect('/views/employee/index.php', $user);
        }
        else if($user['uprawnienia'] == 'BOSS')
        {
            redirect('/views/boss/index.php', $user);
        }
    }
    else if(isset($user['u_id']))
    {
        redirect('/views/client/index.php', $user);
    }
}
redirect('index.html', $user);
?>