<?php

function createClass(string $title, string $description, string $instructor) {
    global $classes;
    $count = count($classes);

    $classes[] = [
        'id' => "CL" . ++$count,
        'title' => $title,
        'description' => $description,
        'instructor' => $instructor
    ];

    echo 'Kelas telah dibuat.' . PHP_EOL;
}