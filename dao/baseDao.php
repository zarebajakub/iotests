<?php
require_once $doc_root.'/config.php';
require_once $doc_root.'/common.php';

use models\User;
use models\Client;
use models\Task;

function query($query)
{
    try
    {
        global $mysql;
        $resultObject = $mysql->query($query);
        
        if(!$resultObject) 
        { 
            debug($mysql->error); 
            return false; 
        }

        if($resultObject === true)
        {
            return true;
        }
        else if($resultObject->num_rows > 1)
        {
            $result = $resultObject->fetch_all(MYSQLI_ASSOC);
        }
        else if($resultObject->num_rows == 1)
        {
            $result = $resultObject->fetch_assoc();
        }
        else
        {
            $result = false;
        }
        
        $resultObject->free_result();

        return $result;
    }
    catch(Exception $dbExc)
    {
        print_r('DATABASE EXCEPTION: '. $dbExc->getMessage().'\n');
        throw $dbExc;
    }
}

function test()
{
    return query("SELECT * FROM tabela");
}

function findUser($email, $passEncrypted)
{
    $email = makeSafeForDb($email);
    $passEncrypted = makeSafeForDb($passEncrypted);
    
    $result = query("SELECT * FROM users WHERE email = $email AND password = $passEncrypted");

    if($result)  { return $result; }

    $client = query("SELECT * FROM clients WHERE email = $email AND password = $passEncrypted");

    return $client;
}

function registerUser(User $user)
{
    return query("INSERT INTO users(email, password) VALUES (".makeSafeForDb($user->email).", ".makeSafeForDb($user->password).")");
}

function registerClient(Client $client)
{
    return query("INSERT INTO users(email,password) VALUES (".$client->email.",".$client->password.")");   
}

function viewEmployes()
{
	return query("SELECT * FROM users");	
}

function addTask($project_id,$user_id, $desc) //parameters?
{
	return query("INSERT INTO tasks(project_id, user_id, description) VALUES ($project_id,$user_id,$desc");
}

function markAsCompletedTask($task_id)
{
	return query("UPDATE tasks SET finished=1 WHERE task_id='$task_id'");
}

function addEmployee($organization_id) //TODO PRZEMYŚLEĆ CZY W TYM MOMENCIE EMPLOYEE MA JUŻ SWOJE KONTO
{
	return query("INSERT INTO users VALUES ()");
}

 // BEDZIE MUSIAŁO BYC DWOJAKO DLA KLIENTA I USERA EWENTUALNIE ZROBIĆ TYLKO DLA KLIENTA
function editProfile()
{
	return query("UPDATE user SET (password,name,surname) = ($password,$name,$surname)");
}

function editTask(Task $task)
{
	return query("UPDATE task SET description=$task->description WHERE task_id=$task->id");
}

function viewTasksEmployee($userId)
{
	return query("SELECT * FROM tasks WHERE user_id=$userId");
}

function viewTasksBoss($organisationId)
{
	return query("SELECT * FROM tasks WHERE organization_id=$organisationId");
}


