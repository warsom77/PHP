<?php

function addInstructor(string $name, string $email, string $password) {
    global $instructors;
    $count = count($instructors);

    $instructors[] = [
        "id" => "IT" . ++$count,
        "name" => $name,
        "email" => $email,
        "password" => password_hash($password, PASSWORD_DEFAULT),
        "status" => "active"
    ];

    echo "Akun telah dibuat." . PHP_EOL;
}