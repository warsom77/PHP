<?php

function showStudent() {
    global $students;

    echo str_repeat('=', 20) . " Daftar Siswa " . str_repeat('=', 20) . PHP_EOL;
    echo str_repeat('_', 54) . PHP_EOL;
    echo '|' . str_pad('NO', 4, " ", STR_PAD_BOTH) . "|";
    echo str_pad('ID', 6, " ", STR_PAD_BOTH) . "|";
    echo str_pad('NAMA', 15, " ", STR_PAD_BOTH) . "|";
    echo str_pad('EMAIL', 15, " ", STR_PAD_BOTH) . "|";
    echo str_pad('STATUS', 8, " ", STR_PAD_BOTH) . "|" . PHP_EOL;
    echo str_repeat('_', 54) . PHP_EOL;

    foreach ($students as $key => $student) {
        echo '|' . str_pad(++$key, 4, " ", STR_PAD_BOTH) . "|";
        echo str_pad($student['id'], 6, " ", STR_PAD_BOTH) . "|";
        echo str_pad($student['name'], 15, " ", STR_PAD_BOTH) . "|";
        echo str_pad($student['email'], 15, " ", STR_PAD_BOTH) . "|";
        echo str_pad($student['status'], 8, " ", STR_PAD_BOTH) . "|" . PHP_EOL;
    }

    echo str_repeat('_', 54) . PHP_EOL;
}