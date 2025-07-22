<?php

require_once '../Model/Instructor.php';
require_once '../BusinessLogic/AddInstructor.php';
require_once '../BusinessLogic/Login.php';

addInstructor('Budi','budi@edu.com', 'budi123');
var_dump($instructors);
login('budi@edu.com', 'budi123');