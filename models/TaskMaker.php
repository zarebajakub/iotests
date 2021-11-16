<?php

namespace models;

class TaskMaker implements baseModelInterface
{
    public $id;
    public $userId;
    public $timeFrom;
    public $timeTo;
    public $hours;
    public $additionalInfo;

    public function validate()
    {
        $ok = true;

        return $ok;
    }
    public function toMap()
    {

    }
}