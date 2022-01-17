<?php

/**
 * kontener zadania
 * przechowuje wszystkie istotne dane dla zadania
 * 
 */

namespace models;

class Task
{
    public $id;
    public $projectId;
    public $createdAt;
    public $userId;
    PUBLIC $finished;
    public $description;

    public function __construct($userMap)
    {
        $this->finished = false;
        if(isset($userMap['projectId'])) { $this->projectId = $userMap['projectId']; }
    }

}