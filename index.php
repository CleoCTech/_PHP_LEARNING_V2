<?php

require 'functions.php';
class Task {
    //what would you need for a task? 
    //💡Tip: At least to start, you can look at your database/table task columns;
    //protected $description; //protected variable cannot be accessed externally/outside this class.
    public $description; //we can access it outside this class or file. e,g when we need render it on the view
    public $completed = false; //we could initialize this variable but we know when the task is being made is incomplete.

    public function __construct($description)
    {
		//automatically triggered on instantiation/initialization
        $this->description = $description;
	}
    public function complete()
    {
        $this->completed = true;
    }
    public function isCompleted()
    {
        return $this->completed;
    }
    public function description()
    {
        return $this->description; //if description if protected. 
    }
}

$tasks = [
    new Task('Clean my room'), //0 index
    new Task('Finish scrrencast'), //1 index
    new Task('Go to the store'), //2 index
    new Task('Write an article'), //3 index
];

$tasks[0]->complete(); 
// dd($tasks);
require 'index.view.php'; // require means, pull in everything from this path; 