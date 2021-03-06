<?php
/**
 * ten plik jest odpowiedzialny za zebranie dodatkowych informacji od uzytkownika typu imie, nazwisko, numer
 * dla klienta lub nazwa organizacji dla pracownika/ project managera i przekierowuje do odpowiedniej
 * strony glownej (w zaleznosci od typu uzytkownika - klient/pracownika/menedzer projektu)
 * 
 */

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

if (session_status() == PHP_SESSION_NONE) 
{
    session_start();
}
$userType = $_SESSION['lastPageData'][0];

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
    addOrganisation($_POST['organisation-name'],$_SESSION['User']['user_id']);
    $orgId = getLastAddedOrganisation();
    $ok = addUserAdditionalInfo($_POST['name'], $_POST['surname'], $orgId, $_SESSION['User']['user_id']);
    if($ok)
    {
        $url = '/views/boss/boss-page/main-page.php';
    }
}
else if($userType == 'client')
{
    $notOkUrl = '/views/klient-dodatkowe.php';
    $ok = addClientAdditionalInfo($_POST['name'], $_POST['surname'], $_POST['phone'], $_SESSION['User']['clients_id']);
    if($ok)
    {
        $url = '/views/client/client-page/main-page.php';
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