<?php

require_once '../Helper/GetIdClass.php';

function addClassStudent(string $email, string $title) {
    global $students;

    $idClass = getIdClass($title);
    foreach ($students as &$student) {
        if ($student['email'] == $email) {
            $student['class'][] = $idClass;
            return;
        }
    }

    echo 'Gagal Menambahkan Class '. $title . PHP_EOL;
}