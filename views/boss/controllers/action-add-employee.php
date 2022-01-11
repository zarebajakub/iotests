<?php
$doc_root = $_SESSION['ROOT'];

require_once $doc_root.'/dao/baseDao.php';
require_once $doc_root.'/common.php';

addTask($_POST['project_id'], $_POST['user_id'], $_POST['desc']);

debug("tu ok");

redirect('/views/boss/view-tasks.php');

?>