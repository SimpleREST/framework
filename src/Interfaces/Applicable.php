<?php

namespace Simplerest\Framework\Interfaces;

use Simplerest\Framework\Core\Application;

interface Applicable
{
    /**
     * Геттер версии приложения (пригодится)
     *
     * @return string
     */
    public function getVersion(): string;

    /**
     * Финализация работы приложения (не путать с завершением).
     *
     * @param callable|string $callback
     * @param Application $app
     */
    public function finalise(callable|string $callback, Application $app): Application;

    /**
     * Завершите действие приложения.
     *
     * @return void
     */
    public function terminate(): void;
}