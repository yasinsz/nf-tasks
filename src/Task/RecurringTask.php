<?php

namespace NeueFische\Task;

class RecurringTask extends \NeueFische\Task
{
    public $day = 'Montag';

    public function getDescription()
    {
        return $this->day . ': ' . $this->description;
    }
}