<?php

function register(string $email, string $password) {
    global $students;

    $students[] = [
        "email" => $email,
        "password" => $password
    ];

    echo "Akun telah dibuat." . PHP_EOL;
}