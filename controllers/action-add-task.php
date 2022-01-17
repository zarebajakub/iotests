<?php
if (session_status() == PHP_SESSION_NONE) 
{
    session_start();
}
$doc_root = $_SESSION['ROOT'];

require_once $doc_root.'/dao/baseDao.php';
require_once $doc_root.'/common.php';

addTask($_POST['project_id'], $_POST['user_id'], $_POST['desc']);

redirect('views/boss/boss-page/main-page.php');

?>