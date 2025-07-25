<?php

require_once __DIR__ . '/../Helper/Input.php';
require_once __DIR__ . '/../View/ViewLogin.php';
require_once __DIR__ . '/../View/ViewRegister.php';

function viewApp() {

    do {
        echo "===== Edu Master ======" . PHP_EOL;
        echo "1. Masuk" . PHP_EOL;
        echo "2. Daftar" . PHP_EOL;
        echo "0. Keluar" . PHP_EOL;
        $pilihan = input("Pilih");

        switch ($pilihan) {
            case '1': viewLogin(); break;
            case '2': viewRegister(); break;
            case '0': exit(); break;
            default: echo "Pilihan anda tidak ditemukan" . PHP_EOL;
        }
    } while (true);
}