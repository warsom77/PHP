<?php

namespace traits;

trait HasTimestamp
{
    protected string $createdAt;

    public function initTimestamp(): void {
        $this->createdAt = date('Y-m-d H:i:s');
    }

    public function log(string $message): void {
        echo "[TIMESTAMPED LOG] $this->createdAt - $message" . PHP_EOL;
    }
}