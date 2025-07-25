<?php

require_once '../View/ViewHomeInstructor.php';

global $instructors;
$instructors[] = [
    'email' => 'john@gmail.com'
];

$instructor = [
    'email' => 'john@gmail.com',
];
viewHomeInstructor($instructor);