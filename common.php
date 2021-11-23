<?php

define('CLIENT', 1);
define('EMPLOYEE', CLIENT + 1);
define('BOSS', EMPLOYEE + 1);

function redirect($url, $data=[])
{
    if (session_status() == PHP_SESSION_NONE) 
    {
        session_start();
    }
    $_SESSION['lastPageData'] = $data;
    header("Location: http://$_SERVER[HTTP_HOST]/$url");
    exit();
}

function whoIsIt($user)
{
    if(isset($user['uprawnienia']))
    {
        if($user['uprawnienia'] == 'EMPLOYEE')
        {
            return EMPLOYEE;
        }
        else if($user['uprawnienia'] == 'BOSS')
        {
            return BOSS;
        }
    }
    else if(isset($user['u_id']))
    {
        return CLIENT;
    }
    return false;
}


?>