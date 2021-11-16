<?php

echo $_SERVER['DOCUMENT_ROOT'];

$doc_root = $_SERVER['DOCUMENT_ROOT'];

require_once $doc_root.'/config.php';
require_once 'baseDao.php';
echo '<br>';

echo $doc_root.'/config.php';	

$login = $_POST['login'];
$password = $_POST['password'];

$query = "SELECT * FROM $TAB_TABELA";

query($query);
$result = mysqli_query($link, $query) or die('Query Error: '.mysqli_error($link));

echo "<br><br>";

if($result){
	while($row = mysqli_fetch_array($result)){
		echo $row[0]." ".$row[1]."<br>";
	}
}