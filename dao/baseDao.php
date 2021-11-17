<?php
require_once $doc_root.'/config.php';

function query($query)
{
    try
    {
        global $link;
        return mysqli_query($link, $query);
    }
    catch(Exception $dbExc)
    {
        print_r('DATABASE EXCEPTION: '. $dbExc->getMessage().'\n');
        throw $dbExc;
    }
}