<?php
include('navbar.php');
if (session_status() == PHP_SESSION_NONE) 
{
    session_start();
}
$doc_root = $_SESSION['ROOT'];
require_once $doc_root.'/common.php';

redirect('/views/employee/view-tasks.php');
?>