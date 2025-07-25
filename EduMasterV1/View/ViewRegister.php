<?php

require_once __DIR__ . '/../Helper/Input.php';
require_once __DIR__ . '/../BusinessLogic/Register.php';
require_once __DIR__ . '/../View/ViewLogin.php';

function viewRegister() {
    echo '===== Register =====' . PHP_EOL;
    echo 'Ketik 0 untuk kembali' . PHP_EOL;
    $name = input('Nama');
    if ($name == '0') return;
    $email = input('Email');
    $password = input('Password');

    register($name, $email, $password);
    viewLogin();
}