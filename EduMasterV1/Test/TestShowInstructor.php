<?php

require_once __DIR__ . '/../Model/Instructor.php';
require_once __DIR__ . '/../BusinessLogic/AddInstructor.php';
require_once __DIR__ . '/../BusinessLogic/ShowInstructor.php';

addInstructor('Budi', 'budi@edu.com', 'budi123');
addInstructor('Fajar', 'fajar@edu.com', 'fajar123');
showInstructor();