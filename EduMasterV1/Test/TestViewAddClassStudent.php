<?php

require_once __DIR__ . '/../View/ViewAddClassStudent.php';

global $students;
global $classes;
$students[] = [
    'email' => 'john@gmail.com',
    'class' => []
];

$student = [
    'email' => 'john@gmail.com',
];

$classes[] = [
    'id' => 'CL1',
    'title' => 'PHP Lanjutan',
    'description' => 'PHP Lanjutan',
];
viewAddClassStudent($student);
