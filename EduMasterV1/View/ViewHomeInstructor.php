<?php

require_once __DIR__ . '/../BusinessLogic/ShowClassInstructor.php';
require_once __DIR__ . '/../Helper/Input.php';
require_once __DIR__ . '/../View/ViewCreateClass.php';

function viewHomeInstructor(array $account) {
    do {
        showClassInstructor($account['email']);
        echo '=============================' . PHP_EOL;
        echo '1. Buat Kelas' . PHP_EOL;
        echo '0. Log Out' . PHP_EOL;
        $pilihan = input("Pilih");

        switch ($pilihan) {
            case '1': viewCreateClass($account); break;
            case '0'; return;
            default: echo 'Pilihan anda tidak ditemukan' . PHP_EOL;
        }
    } while (true);
}