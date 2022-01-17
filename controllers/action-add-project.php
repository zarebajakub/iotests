<?php
/**
 * ten plik odpowiada za dodanie projektu dla danej firmy i przekierowuje na strone glowna klienta
 */
if (session_status() == PHP_SESSION_NONE) 
{
    session_start();
}
$doc_root = $_SESSION['ROOT'];

require_once $doc_root.'/dao/baseDao.php';
require_once $doc_root.'/common.php';

addProjectForOrganisation($_POST['organisation-id'], $_SESSION['User']['clients_id'], $_POST['description-project']);

redirect('views/client/client-page/main-page.php', ["Zadanie zostało zlecone"])
?>