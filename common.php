<?php
require_once 'config.php';

define('CLIENT', 1);
define('EMPLOYEE', CLIENT + 1);
define('BOSS', EMPLOYEE + 1);

/**
 * funkcja ktory przekierowuje na podany adres na stronie, url to adres a data to dane ktore maja
 * byc przekazane na nastepnej stronie
 */
function redirect($url, $data=[])
{
    if (session_status() == PHP_SESSION_NONE) 
    {
        session_start();
    }
    $_SESSION['lastPageData'] = $data;
    global $SUB_FOLDER;
    header("Location: http://$_SERVER[HTTP_HOST]/$SUB_FOLDER/$url");
    exit();
}

/**
 * zwraca jakiego typu jest podany uzytkownik
 */
function whoIsIt($user)
{
    if(isset($user['uprawnienia']))
    {
        if($user['uprawnienia'] == EMPLOYEE)
        {
            return EMPLOYEE;
        }
        else if($user['uprawnienia'] == BOSS)
        {
            return BOSS;
        }
    }
    else if(isset($user['clients_id']))
    {
        return CLIENT;
    }
    return false;
}

/**
 * konwertuje string na format przyjazny dla bazy
 */
function makeSafeForDb($str)
{
    return '"'.$str.'"';
}


?>