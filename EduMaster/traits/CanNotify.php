<?php

namespace traits;

trait CanNotify
{
    public function notify(string $message): void {
        echo "[NOTIFIKASI] $message" . PHP_EOL;
    }
}