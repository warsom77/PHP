<?php

require_once __DIR__ . '/../Model/Student.php';
require_once __DIR__ . '/../Model/Instructor.php';
require_once __DIR__ . '/../BusinessLogic/Login.php';
require_once __DIR__ . '/../BusinessLogic/AddInstructor.php';
require_once __DIR__ . '/../BusinessLogic/Register.php';
require_once __DIR__ . '/../BusinessLogic/NonActiveAccount.php';

addInstructor('Budi', 'budi@edu.com', 'budi123');
register('Ali', 'ali@gmail.com', 'ali123');
nonActiveAccount('budi@edu.com');
nonActiveAccount('ali@gmail.com');
login('budi@edu.com', 'budi123');
login('ali@gmail.com', 'ali123');
