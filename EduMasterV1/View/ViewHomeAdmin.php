<?php

require_once __DIR__ . '/../Helper/Input.php';
require_once __DIR__ . '/../View/ViewShowStudent.php';
require_once __DIR__ . '/../View/ViewShowInstructor.php';
require_once __DIR__ . '/../View/ViewShowClass.php';
require_once __DIR__ . '/../View/ViewAddInstructor.php';
require_once __DIR__ . '/../View/ViewNonActiveAccount.php';

function viewHomeAdmin() {
    do {
        echo '===== Home Admin ======' . PHP_EOL;
        echo '1. Lihat Siswa' . PHP_EOL;
        echo '2. Lihat Instruktur' . PHP_EOL;
        echo '3. Lihat Kelas' . PHP_EOL;
        echo '4. Tambah Instruktur' . PHP_EOL;
        echo '5. Non Aktifkan Akun' . PHP_EOL;
        echo '0. Log Out' . PHP_EOL;
        $pilihan = input('pilih');

        switch ($pilihan) {
            case '1': viewShowStudent(); break;
            case '2': viewShowInstructor(); break;
            case '3': viewShowClass(); break;
            case '4': viewAddInstructor(); break;
            case '5': viewNonActiveAccount(); break;
            case '0': return;
            default: echo 'Pilihan anda tidak ditemukan' . PHP_EOL;
        }
    } while (true);
}