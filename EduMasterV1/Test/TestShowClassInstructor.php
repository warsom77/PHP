<?php

require_once '../Model/Instructor.php';
require_once '../Model/Class.php';
require_once '../BusinessLogic/AddInstructor.php';
require_once '../BusinessLogic/CreateClass.php';
require_once '../BusinessLogic/ShowClassInstructor.php';

addInstructor('Budi', 'budi@edu.com', 'budi123');
createClass('PHP Dasar', 'Memahami dasar-dasar PHP', 'budi@edu.com');
createClass('Web Development', 'Memahami HTML dan CSS', 'ali@edu.com');
showClassInstructor('budi@edu.com');