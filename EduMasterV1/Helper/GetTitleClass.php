<?php

function GetTitleClass(string $id) {
    global $classes;

    foreach ($classes as $class) {
        if ($class['id'] == $id) {
            return $class['title'];
        }
    }
}