<?php
include('navbar.php');

if (session_status() == PHP_SESSION_NONE) 
{
    session_start();
}
$doc_root = $_SERVER['DOCUMENT_ROOT'];

require_once $doc_root.'/dao/baseDao.php';

session_start();

echo "<pre>";
print_r(viewTasksBoss());
echo "</pre>";

?>