<?php

require_once __DIR__ . '/../Helper/GetIdClass.php';

function addClassStudent(string $email, string $title) {
    global $students;

    $idClass = getIdClass($title);
    if ($idClass !== null) {
        foreach ($students as &$student) {
            if ($student['email'] == $email) {
                $student['class'][] = $idClass;
                echo "Kelas $title berhasil ditambahkan" . PHP_EOL;
                return;
            }
        }
    }

    echo 'Gagal Menambahkan Class '. $title . PHP_EOL;
}