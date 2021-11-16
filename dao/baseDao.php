<?php
require_once $doc_root.'/config.php';

function query($query, $linkLocal=$link)
{
    return mysqli_query($linkLocal, $query) or die('Query Error: '.mysqli_error($linkLocal));
}