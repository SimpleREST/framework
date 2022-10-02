<?php

namespace Simplerest\Framework\Core;

use Simplerest\Framework\Interfaces\Applicable;

class Application implements Applicable
{

    public function getVersion(): string
    {
        return "Класс приложения (Core) для Wizard версия 1.0.1";
    }

    public function finalise(callable|string $callback, Application $app): Application
    {
        echo "Запускается процесс финализации работы приложения";
        return $app;
    }

    public function terminate(): void
    {
        echo "Приложение закончило свою работу!";
    }
}