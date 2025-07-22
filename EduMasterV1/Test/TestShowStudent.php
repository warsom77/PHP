<?php

require_once '../Model/Student.php';
require_once '../BusinessLogic/Register.php';
require_once '../BusinessLogic/ShowStudent.php';

register('Fajar', 'fajar@gmail.com', 'fajar123');
register('Budi', 'budi@gmail.com', 'budi123');
register('Agus', 'agus@gmail.com', 'agus123');
showStudent();