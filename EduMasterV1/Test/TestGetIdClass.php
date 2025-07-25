<?php

require_once __DIR__ . '/../Model/Class.php';
require_once __DIR__ . '/../BusinessLogic/CreateClass.php';
require_once __DIR__ . '/../Helper/GetIdClass.php';

createClass('PHP Dasar', 'Memahami dasar-dasar PHP', 'ali@edu.com');
echo getIdClass('PHP Dasar');