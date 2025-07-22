<?php

function showClassInstructor(string $email)
{
    global $instructors;
    global $classes;
    $count = 0;

    foreach ($instructors as $instructor) {
        if ($instructor["email"] == $email) {
            echo '=== Kelas Saya ===' . PHP_EOL;
            foreach ($classes as $class) {
                if ($class["instructor"] == $email) {
                    echo "- " . $class["title"] . PHP_EOL;
                    $count++;
                }
            }
            if ($count == 0) {
                echo 'Belum ada kelas yang dibuat' . PHP_EOL;
            }
        }
    }
}