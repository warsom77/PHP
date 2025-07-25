<?php

require_once __DIR__ . '/../Helper/Input.php';
require_once __DIR__ . '/../BusinessLogic/AddInstructor.php';

function viewAddInstructor() {
    echo '===== Tambah Instruktur =====' . PHP_EOL;
    echo 'Ketik 0 untuk kembali' . PHP_EOL;
    $name = input('Nama');
    if ($name == '0') return;
    $email = input('Email');
    $password = input('Password');

    addInstructor($name, $email, $password);
}