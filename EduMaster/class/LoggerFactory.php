<?php

namespace class;

class LoggerFactory
{
    public static function createLogger(): object
    {
        return new class
        {
            public function log(string $message): void
            {
                echo "[AnonLogger} " . date("Y-m-d H:i:s") . " - $message" . PHP_EOL;
            }

            public function error(string $message): void
            {
                echo "[ERROE] " . strtoupper($message) . PHP_EOL;
            }
        };
    }
}