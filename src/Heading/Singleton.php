<?php

namespace Maestroprog\Saw\Heading;

abstract class Singleton
{
    protected static $instance = [];

    private function __construct()
    {
    }

    /**
     * @return static|self
     */
    public static function instance()
    {
        if (!isset(static::$instance[static::class])) {
            static::$instance[static::class] = new static();
        }
        return static::$instance[static::class];
    }

    private function __clone()
    {
    }

    private function __sleep()
    {
    }

    private function __wakeup()
    {
    }
}
