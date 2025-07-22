<?php

require_once '../Model/Student.php';
require_once '../Model/Class.php';
require_once '../BusinessLogic/Register.php';
require_once '../BusinessLogic/CreateClass.php';
require_once '../BusinessLogic/AddClassStudent.php';

register('ali', 'ali@gmail.com', 'ali123');
createClass('PHP Dasar', 'Memahami dasar-dasar PHP', 'budi@edu.com');
createClass('Web Development', 'Memahami HTML dan CSS', 'fajar@edu.com');
addClassStudent('ali@gmail.com', 'PHP Dasar');
var_dump($students);
addClassStudent('budi@edu.com', 'PHP Dasar');