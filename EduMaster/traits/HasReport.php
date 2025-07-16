<?php

namespace traits;

trait HasReport
{
    public function generateReport(): string {
        return "Laporan sistem berhasil dibuat pada " . date('Y-m-d H:i:s') . PHP_EOL;
    }
}