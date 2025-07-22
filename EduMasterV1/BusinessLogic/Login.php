<?php

function login($email, $password) {
    global $students;
    global $instructors;

    if (!empty($students)) {
        foreach ($students as $student) {
            if ($student["email"] == $email && password_verify($password, $student["password"])) {
                if ($student['status'] == 'active') {
                    echo "Anda login sebagai siswa." . PHP_EOL;
                    return true;
                } else {
                    echo "Akun anda tidak aktif." . PHP_EOL;
                    return false;
                }
            }
        }
    }

    foreach ($instructors as $instructor) {
        if ($instructor["email"] == $email && password_verify($password, $instructor["password"])) {
            if ($instructor['status'] == 'active') {
                echo "Anda login sebagai instruktur." . PHP_EOL;
                return true;
            } else {
                echo "Akun anda tidak aktif." . PHP_EOL;
                return false;
            }
        }
    }

    echo "Email dan Password tidak valid." . PHP_EOL;
}