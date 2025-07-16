<?php

namespace traits;

trait HasLogger
{
    public function log(string $message): void {
        echo "[LOG] " . date('Y-m-d H:i:s') . " - $message" . PHP_EOL;
    }
}