<?php

require_once __DIR__ . '/../Model/Student.php';
require_once __DIR__ . '/../BusinessLogic/Register.php';
require_once __DIR__ . '/../BusinessLogic/Login.php';

register('Fajar', 'fajar@gmail.com', 'fajar123');
var_dump($students);
login('fajar@gmail.com', 'fajar123');