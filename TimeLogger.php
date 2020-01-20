<?php

class TimeLogger {
    public static $counter1 = 0;
    public static $counter2 = 0;
    public static $counter3 = 0;

    public static function log(callable $function)
    {
        $start = microtime(true);

        $function();

        $end = microtime(true);

        return $end - $start;
    }

    public static function logToStdOut(callable $function)
    {
        $result = self::log($function);

        $ms = $result * 1000;

        echo 'Execution time: ' . number_format($ms, 0) . "ms\n";
    }
}
