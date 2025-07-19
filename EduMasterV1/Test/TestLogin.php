<?php

require_once '../Model/Student.php';
require_once '../Model/Instructor.php';
require_once '../BusinessLogic/Login.php';

$students[0] = [
    'email' => 'ali@gmail.com',
    'password' => 'ali123'
];
$instructors[0] = [
    'email' => 'budi@edu.com',
    'password' => 'budi123'
];

login();