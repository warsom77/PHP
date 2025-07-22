<?php

function getIdClass(string $title) {
    global $classes;

    foreach ($classes as $class) {
        if ($class['title'] == $title) {
            return $class['id'];
        }
    }
}