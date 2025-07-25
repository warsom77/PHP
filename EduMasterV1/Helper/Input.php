<?php

function input(string $name) {
    echo "$name : ";
    $value = trim(fgets(STDIN));
    return $value;
}