<?php

namespace models;

class Task implements baseModelInterface
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
        //todo reszta
    }

    public function validate()
    {
        $ok = true;

        return $ok;
    }
    public function toMap()
    {

    }
}