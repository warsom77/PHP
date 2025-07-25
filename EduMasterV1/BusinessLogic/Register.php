<?php

function register(string $name, string $email, string $password) {
    global $students;
    if (is_null($students)) {
        $count = 0;
    } else {
        $count = count($students);
    }

    $students[] = [
        "id" => "ST" . ++$count,
        "name" => $name,
        "email" => $email,
        "password" => password_hash($password, PASSWORD_DEFAULT),
        "status" => "active"
    ];

    echo "Akun telah dibuat." . PHP_EOL;
}