<?php

$doc_root = $_SERVER['DOCUMENT_ROOT'];

require_once $doc_root.'/config.php';
require_once $doc_root.'/dao/baseDao.php';

$result = query("SELECT * FROM $TAB_TABELA");

echo "<br><br>";

if($result){
	while($row = mysqli_fetch_array($result)){
		echo $row[0]." ".$row[1]."<br>";
	}
}