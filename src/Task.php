<?php

namespace NeueFische;

abstract class Task
{
    public $title;
    protected $description;
    public $completed = false;

    public function __construct($title)
    {
        $this->title = $title;
    }

    public function complete()
    {
        $this->completed = true;
    }

    public function setDescription($description)
    {
        if (strlen($description) > 140) {
            throw new \Exception('Description is too long.');
        }
        $this->description = $description;
    }

    public abstract function getDescription();
}