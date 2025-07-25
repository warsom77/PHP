<?php

require_once '../View/ViewShowInstructor.php';

global $instructors;
$instructors[] = [
    'id' => 'IT1',
    'name' => 'John Doe',
    'email' => 'john@edu.com',
    'status' => 'active',
];
viewShowInstructor();