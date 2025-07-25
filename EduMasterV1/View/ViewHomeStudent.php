<?php

require_once __DIR__ . '/../BusinessLogic/ShowClassStudent.php';
require_once __DIR__ . '/../Helper/Input.php';
require_once __DIR__ . '/../View/ViewAddClassStudent.php';

function viewHomeStudent(array $account) {
    do {
        showClassStudent($account['email']);
        echo '=============================' . PHP_EOL;
        echo '1. Tambah Kelas' . PHP_EOL;
        echo '0. Log Out' . PHP_EOL;
        $pilihan = input("Pilih");

        switch ($pilihan) {
            case '1': viewAddClassStudent($account); break;
            case '0'; return;
            default: echo 'Pilihan anda tidak ditemukan' . PHP_EOL;
        }
    } while (true);
}