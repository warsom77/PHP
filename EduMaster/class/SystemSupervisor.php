<?php

namespace class;

use traits\CanNotify;
use traits\HasAuditLog;
use traits\HasLogger;
use traits\HasReport;
use traits\HasTimestamp;

class SystemSupervisor
{
    use HasLogger, HasTimestamp, HasReport, CanNotify, HasAuditLog {
        HasLogger::log insteadof HasTimestamp;
        HasTimestamp::log as timestampLog;
    }

    public function __construct()
    {
        $this->initTimestamp();
    }

    public function performAudit(): void
    {
        $this->audit("Supervisor mengecek sistem keamanan");
        $this->notify("Audit telah selesai.");
    }

    public function generateReport(): string
    {
        return "[Supervisor Report] " . date('Y-m-d H:i:s') . PHP_EOL;
    }
}
