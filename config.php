<?php

$dbHost = "localhost";
$dbUser = "root";
$dbPass = "localhost";
$dbName = "projekt_io_db";

$TAB_TABELA = "tabela";

$mysql = new mysqli($dbHost, $dbUser, $dbPass, $dbName);
// Check connection
if ($mysql->connect_error) {
  die("Connection failed: " . $mysql->connect_error);
} 

$link = mysqli_connect($dbHost, $dbUser, $dbPass) or die('MySQL: Connect Error');
mysqli_select_db($link, $dbName) or die('MySQL: DBSelect Error');


$SUB_FOLDER = "";
if($_SERVER['HTTP_HOST'] == 'student.agh.edu.pl')
{
  $SUB_FOLDER = '/~jakubzar/test/';
}

if (session_status() == PHP_SESSION_NONE) 
    {
        session_start();
    }
    $_SESSION['ROOT'] = $_SERVER['DOCUMENT_ROOT'].$SUB_FOLDER;
   
?>