<?php

require_once __DIR__ . '/../Model/Instructor.php';
require_once __DIR__ . '/../Model/Class.php';
require_once __DIR__ . '/../BusinessLogic/AddInstructor.php';
require_once __DIR__ . '/../BusinessLogic/CreateClass.php';
require_once __DIR__ . '/../BusinessLogic/ShowClassInstructor.php';

addInstructor('Budi', 'budi@edu.com', 'budi123');
createClass('PHP Dasar', 'Memahami dasar-dasar PHP', 'budi@edu.com');
createClass('Web Development', 'Memahami HTML dan CSS', 'ali@edu.com');
showClassInstructor('budi@edu.com');