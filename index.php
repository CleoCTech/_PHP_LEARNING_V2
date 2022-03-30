<?php

//array -> primitive collection of reltaed things. 
$task = [
    'title'=>'Finish Homeowrk',
    'due'=>'Today',
    'assigned_to'=>'Cleo',
    'completed'=> true, //a boolean value, where we can use condition in view to check if the task is completed and if so we check a green checkmark.
];

// die(var_dump($task));

require 'index.view.php'; // require means, pull in everything from this path; 