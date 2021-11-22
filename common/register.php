<?php
$doc_root = $_SERVER['DOCUMENT_ROOT'];

require_once $doc_root.'/dao/baseDao.php';
require_once $doc_root.'/common.php';

use models\Client;
use models\User;


$email = $_POST['email'];
$password = $_POST['pass'];

$user = ['uprawnienia'=>'EMPLOYEE',
'param2'=>'value2'];//findUser($email, $password);
if($user)
{
    redirect('signup.html', ['To konto już istnieje']);
}

$client = new Client($user);

registerClient($client);

?>