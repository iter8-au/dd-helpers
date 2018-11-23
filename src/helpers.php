<?php

use Symfony\Component\VarDumper\VarDumper;

// Check to see if we have the >=4.1 VarDumper version which has ServerDumper (and includes its own version of dd)
if (!function_exists('dd') && !class_exists('\Symfony\Component\VarDumper\Dumper\ServerDumper')) {
    /**
     * Nicely formatted var_dump and die.
     * Hat tip Laravel.
     *
     * @param mixed $var
     * @param mixed $moreVars
     *
     * @return void
     */
    function dd($var, ...$moreVars)
    {
        VarDumper::dump($var);

        foreach ($moreVars as $v) {
            VarDumper::dump($v);
        }

        exit(1);
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
