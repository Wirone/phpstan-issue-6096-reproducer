<?php

declare(strict_types=1);

class Autoloader
{
    public function __construct()
    {
    }

    public function registerAutoload()
    {
        spl_autoload_register(['Autoloader', 'autoload']);
    }

    public static function autoload(string $class): ?bool
    {
        if ($class === 'Y') {
            require_once __DIR__ . '/Y.php';
            return true;
        }

        return null;
    }
}
