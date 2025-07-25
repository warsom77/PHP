<?php

require_once __DIR__ . '/../Helper/Input.php';
require_once __DIR__ . '/../BusinessLogic/AddClassStudent.php';

function viewAddClassStudent(array $account) {
    echo "===== Tambah Kelas =====" . PHP_EOL;
    $class = input("Kelas");
    addClassStudent($account['email'], $class);
}