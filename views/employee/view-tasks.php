<?php
include('navbar.php');

$doc_root = $_SERVER['DOCUMENT_ROOT'];

require_once $doc_root.'/dao/baseDao.php';

addTask(1, 1, 'pierwsze zadanie opis');
addTask(1, 1, 'drugie zadanie opis');
echo "<pre>";
print_r(viewTasksEmployee(1));
echo "</pre>";

deleteTask(1,1);
?>