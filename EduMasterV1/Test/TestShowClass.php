<?php

require_once __DIR__ . '/../Model/Class.php';
require_once __DIR__ . '/../BusinessLogic/CreateClass.php';
require_once __DIR__ . '/../BusinessLogic/ShowClass.php';

createClass('PHP Dasar', 'Memahami dasar-dasar PHP', 'budi@edu.com');
createClass('Web Development', 'Memahami HTML dan CSS', 'fajar@edu.com');
showClass();