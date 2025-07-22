<?php

require_once '../Model/Student.php';
require_once '../Model/Instructor.php';
require_once '../BusinessLogic/Login.php';

$students[0] = [
    'email' => 'ali@gmail.com',
    'password' => password_hash('ali123', PASSWORD_DEFAULT)
];
$instructors[0] = [
    'email' => 'budi@edu.com',
    'password' => password_hash('budi123', PASSWORD_DEFAULT)
];

login('ali@gmail.com', 'ali123');
login('budi@edu.com', 'budi123');