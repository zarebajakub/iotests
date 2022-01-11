<?php

//RACZEJ DO USUNIĘCIA

$doc_root = $_SESSION['ROOT'];

require_once $doc_root.'/config.php';
require_once 'baseDao.php';
echo '<br>';

$login = $_POST['login'];
$password = $_POST['password'];

$query = "SELECT * FROM $TAB_TABELA";

$result = query($query);

echo "<br><br>";

if($result){
	while($row = mysqli_fetch_array($result)){
		echo $row[0]." ".$row[1]."<br>";
	}
}