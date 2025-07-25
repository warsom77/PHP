<?php

require_once __DIR__ . '/../Helper/Input.php';
require_once __DIR__ . '/../BusinessLogic/NonActiveAccount.php';

function viewNonActiveAccount() {
    echo '===== Non Aktif Akun =====' . PHP_EOL;
    echo 'Ketik 0 untuk kembali' . PHP_EOL;
    $email = input('Email');
    if ($email == '0') return;
    nonActiveAccount($email);
}