<?php
include('navbar.php');
$doc_root = $_SERVER['DOCUMENT_ROOT'];
require_once $doc_root.'/common.php';

redirect('/views/employee/view-tasks.php');
?>