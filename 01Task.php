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

    public function complete() {
        $this->completed = true;
    }
}

$task = new Task('Learn OOP', 'This is description');

$task->complete();


//var_dump($task->title);
//var_dump($task->description);
//var_dump($task->completed);

echo '<pre>';
var_dump($task);
echo '<pre/>';

