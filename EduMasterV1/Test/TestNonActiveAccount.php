<?php

require_once '../Model/Student.php';
require_once '../Model/Instructor.php';
require_once '../BusinessLogic/Login.php';
require_once '../BusinessLogic/AddInstructor.php';
require_once '../BusinessLogic/Register.php';
require_once '../BusinessLogic/NonActiveAccount.php';

addInstructor('Budi', 'budi@edu.com', 'budi123');
register('Ali', 'ali@gmail.com', 'ali123');
nonActiveAccount('budi@edu.com');
nonActiveAccount('ali@gmail.com');
login('budi@edu.com', 'budi123');
login('ali@gmail.com', 'ali123');
