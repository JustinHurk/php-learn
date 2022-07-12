<?php

require 'functions.php';

class Task 
{
    public $description;
    public $completed = false;

    public function __construct($description)
    {
        $this->description = $description;
    }

    public function isComplete()
    {
        return $this->completed;
    }

    public function complete()
    {
        $this->completed = true;
    }
}

$tasks = [new Task('Go to the store'), new Task('Walk rusty'), new Task('Clean my room')];

$tasks[0]->complete();

//dd($tasks);

// $task = new Task('Go to the store');

// $task->complete();

// dd($task->isComplete());

require 'index.view.php';