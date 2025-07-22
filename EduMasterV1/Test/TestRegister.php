<?php

require_once '../Model/Student.php';
require_once '../BusinessLogic/Register.php';
require_once '../BusinessLogic/Login.php';

register('Fajar', 'fajar@gmail.com', 'fajar123');
var_dump($students);
login('fajar@gmail.com', 'fajar123');