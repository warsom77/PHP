<?php

function login() {
    global $students;
    global $instructors;

    echo "Email    : ";
    $email = trim(fgets(STDIN));
    echo "Password : ";
    $password = trim(fgets(STDIN));

    foreach ($students as $student) {
        if ($student["email"] == $email && $student["password"] == $password) {
            echo "Anda login sebagai siswa." . PHP_EOL;
            return;
        }
    }

    foreach ($instructors as $instructor) {
        if ($instructor["email"] == $email && $instructor["password"] == $password) {
            echo "Anda login sebagai instruktur." . PHP_EOL;
            return;
        }
    }

    echo "Email dan Password tidak valid." . PHP_EOL;
}