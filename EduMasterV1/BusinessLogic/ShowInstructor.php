<?php

function showInstructor() {
    global $instructors;

    echo str_repeat('=', 17) . " Daftar Instruktur " . str_repeat('=', 17) . PHP_EOL;
    echo str_repeat('_', 54) . PHP_EOL;
    echo '|' . str_pad('NO', 4, " ", STR_PAD_BOTH) . "|";
    echo str_pad('ID', 6, " ", STR_PAD_BOTH) . "|";
    echo str_pad('NAMA', 15, " ", STR_PAD_BOTH) . "|";
    echo str_pad('EMAIL', 15, " ", STR_PAD_BOTH) . "|";
    echo str_pad('STATUS', 8, " ", STR_PAD_BOTH) . "|" . PHP_EOL;
    echo str_repeat('_', 54) . PHP_EOL;

    if (!empty($instructors)) {
        foreach ($instructors as $key => $instructor) {
            echo '|' . str_pad(++$key, 4, " ", STR_PAD_BOTH) . "|";
            echo str_pad($instructor['id'], 6, " ", STR_PAD_BOTH) . "|";
            echo str_pad($instructor['name'], 15, " ", STR_PAD_BOTH) . "|";
            echo str_pad($instructor['email'], 15, " ", STR_PAD_BOTH) . "|";
            echo str_pad($instructor['status'], 8, " ", STR_PAD_BOTH) . "|" . PHP_EOL;
        }
    }

    echo str_repeat('_', 54) . PHP_EOL;
}