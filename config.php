<?php

$dbHost = "localhost";
$dbUser = "root";
$dbPass = "localhost";
$dbName = "testowa";

$TAB_TABELA = "tabela";

$link = mysqli_connect($dbHost, $dbUser, $dbPass) or die('MySQL: Connect Error');
mysqli_select_db($link, $dbName) or die('MySQL: DBSelect Error');
   
?>