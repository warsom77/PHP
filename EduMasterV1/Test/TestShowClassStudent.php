<?php

require_once '../Model/Student.php';
require_once '../Model/Class.php';
require_once '../BusinessLogic/Register.php';
require_once '../BusinessLogic/CreateClass.php';
require_once '../BusinessLogic/AddClassStudent.php';
require_once '../BusinessLogic/ShowClassStudent.php';

register('Ali', 'ali@gmail.com', 'ali123');
register('Budi', 'budi@gmail.com', 'budi123');
createClass('PHP Dasar', 'Memahami dasar-dasar PHP', 'budi@edu.com');
createClass('Web Development', 'Memahami HTML dan CSS', 'fajar@edu.com');
addClassStudent('ali@gmail.com', 'PHP Dasar');
addClassStudent('ali@gmail.com', 'Web Development');
var_dump($students);
showClassStudent('ali@gmail.com');
showClassStudent('budi@gmail.com');