<?php

require_once __DIR__ . '/../Helper/Input.php';
require_once __DIR__ . '/../BusinessLogic/CreateClass.php';

function viewCreateClass(array $account) {
    echo '===== Buat Kelas =====' . PHP_EOL;
    echo 'Ketik 0 untuk kembali' . PHP_EOL;
    $title = input('Judul');
    if ($title == '0') return;
    $description = input('Deskripsi');
    createClass($title, $description, $account['email']);
}