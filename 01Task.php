<?php

/**
 * Classes ----------
 */


class Task {
    public $title;
    public $description;
    public $completed = false;

    public function __construct($title, $description) {

        $this->title = $title;
        $this->description = $description;

    }
    
    public function completed() {
        $this->completed = true;
    }
    
    public function notCompleted() {
        $this->completed = false;
    }
    
}

$task = new Task('Title Learn OOP', 'This is description of the task');

$task->completed();
//$task->notCompleted();

//var_dump($task->title);
//var_dump($task->description);
//var_dump($task->completed);

echo '<pre>';
var_dump($task);
echo '<pre/>';

