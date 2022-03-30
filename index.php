<?php

//array -> primitive collection of reltaed things. 
$person = [
    
    'age'=>26, 
    'hair'=>'Black', 
    'career'=>'Web Developer'
];

$person['name'] = 'Cleo';

unset($person['name']);

// die(var_dump($person));

require 'index.view.php'; // require means, pull in everything from this path; 