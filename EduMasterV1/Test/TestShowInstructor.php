<?php

require_once '../Model/Instructor.php';
require_once '../BusinessLogic/AddInstructor.php';
require_once '../BusinessLogic/ShowInstructor.php';

addInstructor('Budi', 'budi@edu.com', 'budi123');
addInstructor('Fajar', 'fajar@edu.com', 'fajar123');
showInstructor();