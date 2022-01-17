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
    return query("INSERT INTO users(email, password, uprawnienia) VALUES (".makeSafeForDb($user->email).", ".makeSafeForDb($user->password).", $user->type)");
}

function addUserAdditionalInfo($name, $surname, $organisationId, $id)
{
    $name = makeSafeForDb($name);
    $surname = makeSafeForDb($surname);
    $organisationId = makeSafeForDb($organisationId);
    $id = makeSafeForDb($id);
    return query("UPDATE users SET name = $name, surname = $surname, organization_id = $organisationId WHERE user_id = $id");
}

function addClientAdditionalInfo($name, $surname, $phone, $id)
{
    $name = makeSafeForDb($name);
    $surname = makeSafeForDb($surname);
    $phone = makeSafeForDb($phone);
    return query("UPDATE clients SET name = $name, surname = $surname, phone = $phone WHERE clients_id = $id");
}

function registerClient(Client $client)
{
    return query("INSERT INTO clients(email, password) VALUES (".makeSafeForDb($client->email).", ".makeSafeForDb($client->password).")");
}

function viewEmployes()
{
	return query("SELECT * FROM users WHERE uprawnienia = ".EMPLOYEE);	
}

function getEmployesOfOrganisation($organisationId)
{
	return query("SELECT * FROM users WHERE uprawnienia = ".EMPLOYEE." AND organization_id = ".makeSafeForDb($organisationId));	
}

function addTask($project_id,$user_id, $desc)
{
    $desc = makeSafeForDb($desc);
	return query("INSERT INTO tasks(projects_id, user_id, description) VALUES ($project_id,$user_id,$desc)");
}

function deleteTask($project_id,$user_id)
{
	return query("DELETE FROM tasks WHERE projects_id = $project_id AND user_id = $user_id");
}

function markAsCompletedTask($task_id)
{
	return query("UPDATE tasks SET finished=1 WHERE task_id='$task_id'");
}

function addEmployee($organization_id) 
{
	return query("INSERT INTO users VALUES ()");
}

function editProfile($password,$name,$surname)
{
	return query("UPDATE user SET (password,name,surname) = ($password,$name,$surname)");
}

function editTask(Task $task)
{
	return query("UPDATE task SET description=$task->description WHERE task_id=$task->id");
}

function getTasksEmployee($userId)
{
    if($userId == false) { return []; }
	return query("SELECT * FROM tasks WHERE user_id=$userId");
}

function getTasksBoss()
{
	return query("SELECT * FROM tasks");
}

function addProjectForOrganisation($orgId, $clientId, $desc)
{
    $orgId = makeSafeForDb($orgId);
    $clientId = makeSafeForDb($clientId);
    $desc = makeSafeForDb($desc);
    return query("INSERT INTO projects(organization_id, c_id, description) VALUES ($orgId, $clientId, $desc)");
}

function addOrganisation($owner, $name)
{
    $owner = makeSafeForDb($owner);
    $name = makeSafeForDb($name);
    query("INSERT INTO organizations(owner, name) VALUES ($owner, $name)");
    return query("SELECT * FROM organizations WHERE owner=$owner AND name=$name");
}

function getOrganisations()
{
	return query("SELECT * FROM organizations");
}

function getProjects($orgId)
{
    if($orgId == false) { return []; }
	return query("SELECT * FROM projects WHERE organization_id = $orgId");
}

function getProjectsOfClient($clientId)
{
    if($clientId == false) { return []; }
	return query("SELECT * FROM projects WHERE c_id = $clientId");
}

function getTasksOfProject($projectId)
{
    if($projectId == false) { return []; }
    return query("SELECT * FROM tasks WHERE projects_id = $projectId");
}



