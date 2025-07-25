<?php

require_once __DIR__ . '/../BusinessLogic/ShowStudent.php';
require_once __DIR__ . '/../Helper/Input.php';

function viewShowStudent() {
    do {
        showStudent();
        echo 'Ketik 0 untuk kembali' . PHP_EOL;
        if (input('pilih') == 0) {
            return;
        } else {
            echo 'Pilihan tidak valid' . PHP_EOL;
        }
    } while (true);
}