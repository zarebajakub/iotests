<?php

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


?>