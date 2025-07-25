<?php

require_once __DIR__ . '/../View/ViewCreateClass.php';

global $instructors;
$instructors[] = [
    'email' => 'john@gmail.com'
];

$instructor = [
    'email' => 'john@gmail.com',
];
viewCreateClass($instructor);