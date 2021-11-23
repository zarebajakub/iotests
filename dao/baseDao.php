<?php
require_once $doc_root.'/config.php';

use models\User;
use models\Client;

function query($query)
{
    try
    {
        global $link;
        return mysqli_query($link, $query);
    }
    catch(Exception $dbExc)
    {
        print_r('DATABASE EXCEPTION: '. $dbExc->getMessage().'\n');
        throw $dbExc;
    }
}

function findUser($email, $passEncrypted)
{
    $result = query("SELECT * FROM users WHERE email = $email AND password = $passEncrypted");

    if($result)  { return $result; }

    $client = query("SELECT * FROM clients WHERE email = $email AND password = $passEncrypted");

    return $client;
}

function registerUser(User $user)
{
    $result = query("INSERT INTO users(email,password,name,surname) VALUES ($email,$password,$name,$surname)");


}

function registerClient(Client $client)
{
    $result = query("INSERT INTO users(email,password,name,surname,telefon,nazwa_firmy) VALUES ($email,$password,$name,$surname,$phoneNumber,$companyName)");

    
}

function viewEmployes()
{
	$result = query("SELECT * FROM users");	
}

function addTask($p_id,$user_id) //parameters?
{
	$result = query("INSERT INTO tasks(p_id,user_id,description,finished,created_at) VALUES ($p_id,$user_id,$description,0,CURRENT_TIMESTAMP");
}

function markAsCompletedTask($task_id)
{
	$result = query("UPDATE tasks SET finished=1 WHERE task_id='$task_id'");
}

function addEmployee($organization_id)
{
	$result = query("INSERT INTO users VALUES ($organization_id,$email,$password,$name,$surname,2)");
}

function editProfile()
{
	$result = query("UPDATE user SET (password,name,surname) = ($password,$name,$surname)");
}

function editTask($task_id)
{
	$result = query("UPDATE task SET description=$description WHERE task_id=$task_id");
}

function viewTasks($user_id)
{
	$result = query("SELECT * FROM tasks WHERE user_id=$user_id");
}


