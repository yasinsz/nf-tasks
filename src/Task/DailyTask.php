<?php

namespace NeueFische\Task;

class DailyTask extends \NeueFische\Task
{
    private $time;

    public function setTime($time)
    {
        $this->time = (int)$time;
    }

    public function getTime()
    {
        return $this->time . " Uhr";
    }

    public function getDescription()
    {
        return $this->getTime() . ": " . $this->description . "\n";
        //return  $this->getTime() . ": " . parent::getDescription();
    }
}