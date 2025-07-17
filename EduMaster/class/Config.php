<?php

namespace class;

final class Config
{
    public static string $appName = "EduMaster";
    public static string $appVersion = "1.0.0";
    public static int $accessCount = 0;

    public static function getAppInfo(): string
    {
        self::$accessCount++;
        return self::$appName . " v" . self::$appVersion;
    }

    public static function setVersion(string $ver): void
    {
        self::$appVersion = $ver;
    }

    final public static function systemName(): string
    {
        return "EDU CORE SYSTEM";
    }
}