<?php

define('CLIENT', 1);
define('EMPLOYEE', CLIENT + 1);
define('BOSS', EMPLOYEE + 1);

function debug($data)
{
    if(is_array($data))
    {
        foreach($data as $el)
        {
            print_r($el);
            echo "<br>";
        }
    }
    else
    {
        print_r($data);
    }
    echo "<br>";
    die();
}

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

function makeSafeForDb($str)
{
    return '"'.$str.'"';
}


?>