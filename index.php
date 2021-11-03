<?php
require_once 'config.php';

echo "Connected Successfully";

//$query = "SELECT * FROM 'testowa' WHERE idtabela=1";

$query = "SELECT * FROM $TAB_TABELA";
$result = mysqli_query($link, $query) or die('Query Error: '.mysqli_error($link));

echo "<br><br>";

if($result){
	while($row = mysqli_fetch_array($result)){
		echo $row[0]." ".$row[1]."<br>";
	}
}

?>