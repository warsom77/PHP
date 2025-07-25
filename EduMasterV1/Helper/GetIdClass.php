<?php

function getIdClass(string $title) {
    global $classes;

    if (!empty($classes)) {
        foreach ($classes as $class) {
            if ($class['title'] == $title) {
                return $class['id'];
            }
        }
    }
    return null;
}