<?php
if (session_status() == PHP_SESSION_NONE) 
{
    session_start();
}
$doc_root = $_SERVER['DOCUMENT_ROOT'];

require_once $doc_root.'/dao/baseDao.php';
require_once $doc_root.'/common.php';

addTask($_POST['project_id'], $_POST['user_id'], $_POST['desc']);

redirect('views/boss/view-tasks.php');

?>