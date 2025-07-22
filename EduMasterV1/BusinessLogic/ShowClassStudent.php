<?php

require_once '../Helper/GetTitleClass.php';

function showClassStudent(string $email) {
    global $students;

    foreach ($students as $student) {
        if ($student["email"] == $email) {
            echo '=== Kelas Saya ===' . PHP_EOL;
            if (!empty($student['class'])) {
                foreach ($student["class"] as $class) {
                    echo '- ' . getTitleClass($class) . PHP_EOL;
                }
                return;
            } else {
                echo 'Belum ada kelas yang diikuti' . PHP_EOL;
                return;
            }
        }
    }
}