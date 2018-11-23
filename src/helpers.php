<?php

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
