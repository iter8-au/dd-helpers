<?php

if (!function_exists('dd')) {
    /**
     * Nicely formatted var_dump and die.
     * Hat tip Laravel.
     *
     * @param mixed ...$args
     *
     * @return void
     */
    function dd(...$args): void
    {
        foreach ($args as $arg) {
            (new Symfony\Component\VarDumper\Dumper\HtmlDumper())->dump($arg);
        }

        die(1);
    }
}

if (!function_exists('ddl')) {
    /**
     * Echo the line number before dying.
     *
     * @return void
     */
    function ddl(): void
    {
        echo debug_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS, 1)[0]['line'] ?? 'Unknown';

        die(1);
    }
}
