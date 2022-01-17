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


$email = htmlentities($_POST['email']);
$password = $_POST['pass'];
$repeat_password = $_POST['pass-repeat'];


$userType = $_POST['user-type'];

$url = "";
$notOkUrl = "";

if($userType == 'employee')
{
    $notOkUrl = '/views/employee-dodatkowe.php';
    $ok = addUserAdditionalInfo($_POST['name'], $_POST['surname'], $_POST['organisation'], $_SESSION['User']['user_id']);
    if($ok)
    {
        $url = '/views/employee/employee-page/index.php';
    }
}
else if($userType == 'project-manager')
{
    $notOkUrl = '/views/boss-dodatkowe.php';
    $orgId = addOrganisation($POST['organisation-name'],$_SESSION['User']['user_id']);
    $ok = addUserAdditionalInfo($_POST['name'], $_POST['surname'], $orgId, $_SESSION['User']['user_id']);
    if($ok)
    {
        $url = '/views/boss/boss-page/index.php';
    }
}
else if($userType == 'client')
{
    $notOkUrl = '/views/klient-dodatkowe.php';
    $ok = addClientAdditionalInfo($_POST['name'], $_POST['surname'], $_POST['phone'], $_SESSION['User']['user_id']);
    if($ok)
    {
        $url = '/views/client/client-page/index.html';
    }
}


if($ok)
{
    redirect($url);
}
else
{
    redirect($notOkUrl, ['Coś poszło nie tak z rejestracją']);
}


?>