<?php

require 'vendor/autoload.php';

use NeueFische\Task;

$regular = new Task\RegularTask('Learn PHP');
$regular->setDescription('Write some backend code.');
$regular->complete();

$daily = new Task\DailyTask('Joggen');
$daily->setDescription('Einmal um den Block laufen.');
$daily->setTime(10);

$recurring = new Task\RecurringTask('Auto putzen');
$recurring->setDescription('Zur Tanke fahren und durch die Waschstraße schicken.');

$tl = new \NeueFische\TaskList();
$tl->addTask($regular);
$tl->addTask($daily);
$tl->addTask($recurring);
var_dump($tl);

$tl->removeTask($daily);
var_dump($tl);