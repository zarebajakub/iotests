<?php

$dbHost = ""; //wpisz adres swojego hosta
$dbUser = ""; //wpisz nazwê u¿ytkownika
$dbPass = ""; //wpisz has³o
$dbName = ""; //wpisz nazwê bazy danych

$mysql = new mysqli($dbHost, $dbUser, $dbPass, $dbName);
if ($mysql->connect_error) {
  die("Connection failed: " . $mysql->connect_error);
} 

$link = mysqli_connect($dbHost, $dbUser, $dbPass) or die('MySQL: Connect Error');
mysqli_select_db($link, $dbName) or die('MySQL: DBSelect Error');


$SUB_FOLDER = "";
if (session_status() == PHP_SESSION_NONE) 
{
    session_start();
}
$_SESSION['ROOT'] = $_SERVER['DOCUMENT_ROOT'];
if($_SERVER['HTTP_HOST'] == '') //wpisz domenê serwera
{
  $SUB_FOLDER = ''; //wpisz podkatalog
  $_SESSION['ROOT'] = ""; //wpisz œcie¿kê do strony
}
    
?>