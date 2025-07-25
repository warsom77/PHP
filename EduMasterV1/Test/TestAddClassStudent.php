<?php

require_once __DIR__ . '/../Model/Student.php';
require_once __DIR__ . '/../Model/Class.php';
require_once __DIR__ . '/../BusinessLogic/Register.php';
require_once __DIR__ . '/../BusinessLogic/CreateClass.php';
require_once __DIR__ . '/../BusinessLogic/AddClassStudent.php';

register('ali', 'ali@gmail.com', 'ali123');
createClass('PHP Dasar', 'Memahami dasar-dasar PHP', 'budi@edu.com');
createClass('Web Development', 'Memahami HTML dan CSS', 'fajar@edu.com');
addClassStudent('ali@gmail.com', 'PHP Dasar');
var_dump($students);
addClassStudent('budi@edu.com', 'PHP Dasar');