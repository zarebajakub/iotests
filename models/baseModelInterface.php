<?php

namespace models;

interface baseModelInterface
{
    public function validate();
    public function toMap();
}