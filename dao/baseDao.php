<?php
require_once $doc_root.'/config.php';
require_once $doc_root.'/common.php';

use models\User;
use models\Client;
use models\Task;


/**
 * Podstawowa funkcja do zapytan bazy danych, jesli kwerenda zwrocila jakies dane funkcja zwraca je 
 * (jako tablica) a jesli wywalila blad przechwytuje go i wysiwietla komunikat bledu
 */
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

/**
 * wyszukuje usera w bazie o danym emailu i hasle, zwraca rezultat zapytania sqloego w formie tablicy
 */
function findUser($email, $passEncrypted)
{
    $email = makeSafeForDb($email);
    $passEncrypted = makeSafeForDb($passEncrypted);
    
    $result = query("SELECT * FROM users WHERE email = $email AND password = $passEncrypted");

    if($result)  { return $result; }

    $client = query("SELECT * FROM clients WHERE email = $email AND password = $passEncrypted");

    return $client;
}

/**
 * rejestruje uzytkownika
 */
function registerUser(User $user)
{
    return query("INSERT INTO users(email, password, uprawnienia) VALUES (".makeSafeForDb($user->email).", ".makeSafeForDb($user->password).", $user->type)");
}

/**
 * uzupelnia brakujace dane po rejestracji o uzytkowniku (pracownik/menedzer projektu)
 */
function addUserAdditionalInfo($name, $surname, $organisationId, $id)
{
    $name = makeSafeForDb($name);
    $surname = makeSafeForDb($surname);
    $organisationId = makeSafeForDb($organisationId);
    $id = makeSafeForDb($id);
    return query("UPDATE users SET name = $name, surname = $surname, organization_id = $organisationId WHERE user_id = $id");
}

/**
 * uzupelnia brakujace dane po rejestracji o uzytkowniku (klient)
 */
function addClientAdditionalInfo($name, $surname, $phone, $id)
{
    $name = makeSafeForDb($name);
    $surname = makeSafeForDb($surname);
    $phone = makeSafeForDb($phone);
    $id = makeSafeForDb($id);
    return query("UPDATE clients SET name = $name, surname = $surname, telefon = $phone WHERE clients_id = $id");
}

/**
 * rejestruje klienta
 */
function registerClient(Client $client)
{
    return query("INSERT INTO clients(email, password) VALUES (".makeSafeForDb($client->email).", ".makeSafeForDb($client->password).")");
}

/**
 * zwraca wszystkich pracownikow jacy sa w bazie
 */
function viewEmployes()
{
	return query("SELECT * FROM users WHERE uprawnienia = ".EMPLOYEE);	
}

/**
 * zwraca wszystkich pracownikow przypisanych do danej organizacji
 */
function getEmployesOfOrganisation($organisationId)
{
	return query("SELECT * FROM users WHERE uprawnienia = ".EMPLOYEE." AND organization_id = ".makeSafeForDb($organisationId));	
}

/**
 * dodaje zadanie do bazy
 */
function addTask($project_id,$user_id, $desc)
{
    $desc = makeSafeForDb($desc);
	return query("INSERT INTO tasks(projects_id, user_id, description) VALUES ($project_id,$user_id,$desc)");
}

/**
 * zwraca zadania przypisane pracownikowi
 */
function getTasksEmployee($userId)
{
    if($userId == false) { return []; }
	return query("SELECT * FROM tasks WHERE user_id=$userId");
}

/**
 * zwraca wszystkie zadania
 */
function getTasksBoss()
{
	return query("SELECT * FROM tasks");
}

/**
 * dodaje projekt dla danej firmy
 */
function addProjectForOrganisation($orgId, $clientId, $desc)
{
    $orgId = makeSafeForDb($orgId);
    $clientId = makeSafeForDb($clientId);
    $desc = makeSafeForDb($desc);
    return query("INSERT INTO projects(organization_id, c_id, description) VALUES ($orgId, $clientId, $desc)");
}

/**
 * dodaje nowa firme do bazy
 */
function addOrganisation($name, $owner)
{
    $owner = makeSafeForDb($owner);
    $name = makeSafeForDb($name);
    return query("INSERT INTO organizations(name, owner) VALUES ($name, $owner)");
}

/**
 * zwraca wszystkie firmy w systemie
 */
function getOrganisations()
{
	return query("SELECT * FROM organizations");
}

/**
 * zwraca ostatnio dodana organizacje
 */
function getLastAddedOrganisation()
{
	return query("SELECT * FROM organizations WHERE organization_id = (SELECT LAST_INSERT_ID())");
}

/**
 * zwraca wszystkie projekty(zadanie zlecone przez klienta) danej organizacji
 */
function getProjects($orgId)
{
    if($orgId == false) { return []; }
	return query("SELECT * FROM projects WHERE organization_id = $orgId");
}

/**
 * zwraca projekty, ktore zlecil dany klient
 */
function getProjectsOfClient($clientId)
{
    if($clientId == false) { return []; }
	return query("SELECT * FROM projects WHERE c_id = $clientId");
}

/**
 * zwraca zadania przypisane do danego projektu
 */
function getTasksOfProject($projectId)
{
    if($projectId == false) { return []; }
    return query("SELECT * FROM tasks WHERE projects_id = $projectId");
}



