<?php

function showClass(){
    global $classes;

    echo str_repeat('=', 20) . " Daftar Kelas " . str_repeat('=', 20) . PHP_EOL;
    echo str_repeat('_', 80) . PHP_EOL;
    echo '|' . str_pad('NO', 4, " ", STR_PAD_BOTH) . "|";
    echo str_pad('ID', 6, " ", STR_PAD_BOTH) . "|";
    echo str_pad('JUDUL', 20, " ", STR_PAD_BOTH) . "|";
    echo str_pad('DESKRIPSI', 30, " ", STR_PAD_BOTH) . "|";
    echo str_pad('INSTRUKTUR', 15, " ", STR_PAD_BOTH) . "|" . PHP_EOL;
    echo str_repeat('_', 80) . PHP_EOL;

    foreach ($classes as $key => $class) {
        echo '|' . str_pad(++$key, 4, " ", STR_PAD_BOTH) . "|";
        echo str_pad($class['id'], 6, " ", STR_PAD_BOTH) . "|";
        echo str_pad($class['title'], 20, " ", STR_PAD_BOTH) . "|";
        echo str_pad($class['description'], 30, " ", STR_PAD_BOTH) . "|";
        echo str_pad($class['instructor'], 15, " ", STR_PAD_BOTH) . "|" . PHP_EOL;
    }

    echo str_repeat('_', 80) . PHP_EOL;
}