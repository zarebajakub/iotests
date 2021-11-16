<?php
require_once 'config.php';

echo "Connected Successfully";

echo '<br>';
echo $_SERVER['DOCUMENT_ROOT'];

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

<form action="dao/login.php" method="post">
Login: <input type="text" name="login"><br>
Hasło: <input type="password" name="password"><br>
<input type="submit">
</form>