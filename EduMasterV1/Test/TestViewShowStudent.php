<?php

require_once '../View/ViewShowStudent.php';

global $students;
$students[] = [
    'id' => 'ST1',
    'name' => 'John Doe',
    'email' => 'john@gmail.com',
    'class' => [],
    'status' => 'active'
];
viewShowStudent();