<?php

namespace class;

use traits\HasLogger;
use traits\HasTimestamp;
use traits\HasReport;

class Admin
{
    use HasLogger, HasTimestamp, HasReport {
        HasTimestamp::log insteadof HasLogger;
        HasLogger::log as basicLog;
    }

    public function __construct()
    {
        $this->initTimestamp();
    }

    public function action(): void {
        $this->log("Admin melakukan tindakan");
        $this->basicLog("Ini log biasa");
    }
}