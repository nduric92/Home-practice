<?php

class Log
{
    public static function info($what)
    {
        echo '<pre>';
        print_r($what);
        echo '/<pre>';
    }
}