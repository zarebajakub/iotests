<?php
include('navbar.php');
$doc_root = $_SESSION['ROOT'];
require_once $doc_root.'/common.php';

redirect('/views/employee/view-tasks.php');
?>