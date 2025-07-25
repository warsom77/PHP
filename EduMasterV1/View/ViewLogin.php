<?php

require_once __DIR__ . '/../BusinessLogic/Login.php';
require_once __DIR__ . '/../Helper/Input.php';
require_once __DIR__ . '/../View/ViewHomeStudent.php';
require_once __DIR__ . '/../View/ViewHomeInstructor.php';
require_once __DIR__ . '/../View/ViewHomeAdmin.php';

function viewLogin() {
    echo '===== Login =====' . PHP_EOL;
    echo 'Ketik 0 untuk kembali' . PHP_EOL;
    $email = input('Email');
    if ($email == '0') return;
    $password = input('Password');

    $account = login($email, $password);
    if ($account == false) {
        return;
    } else if ($account == 'admin') {
        viewHomeAdmin();
    } else if (str_contains($account['id'], 'ST')) {
        viewHomeStudent($account);
    } else if (str_contains($account['id'], 'IT')) {
        viewHomeInstructor($account);
    }
}