<?php

namespace traits;

use traits\HasLogger;
trait HasAuditLog
{
    use HasLogger;

    public function audit(string $action): void {
        $this->log("[AUDIT] $action");
    }
}