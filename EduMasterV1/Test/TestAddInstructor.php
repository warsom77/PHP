<?php

require_once __DIR__ . '/../Model/Instructor.php';
require_once __DIR__ . '/../BusinessLogic/AddInstructor.php';
require_once __DIR__ . '/../BusinessLogic/Login.php';

addInstructor('Budi','budi@edu.com', 'budi123');
var_dump($instructors);
login('budi@edu.com', 'budi123');