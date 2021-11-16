<?php

namespace models;

class Task implements baseModelInterface
{
    public $id;
    public $userId;
    public $description;

    public function validate()
    {
        $ok = true;

        return $ok;
    }
    public function toMap()
    {

    }
}