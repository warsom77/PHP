<?php

require_once __DIR__ . '/../BusinessLogic/ShowClass.php';
require_once __DIR__ . '/../Helper/Input.php';

function viewShowClass() {
    do {
        showClass();
        echo 'Ketik 0 untuk kembali' . PHP_EOL;
        if (input('pilih') == 0) {
            return;
        } else {
            echo 'Pilihan tidak valid' . PHP_EOL;
        }
    } while (true);
}