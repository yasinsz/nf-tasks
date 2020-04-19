<?php

namespace NeueFische;

class TaskList implements TaskListInterface
{
    private $tasks = [];

    public function addTask(Task $task)
    {
        $this->tasks[] = $task;
    }

    public function removeTask(Task $task)
    {
        $index = array_search($task, $this->tasks);

        if ($index !== false) {
            array_splice($this->tasks, $index, 1);
        }
    }
}