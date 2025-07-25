<?php

require_once '../View/ViewHomeStudent.php';

global $students;
$students[] = [
    'email' => 'john@gmail.com',
    'class' => []
];

$student = [
    'email' => 'john@gmail.com',
];
viewHomeStudent($student);