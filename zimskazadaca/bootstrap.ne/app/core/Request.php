<?php

class Request
{
    public static function getRoute()
    {
        $route='';
        if(isset($_SERVER['REDIRECT_PATH_INFO']))
        {
            $route = $_SERVER['REDIRECT_PATH_INFO'];
        }elseif (isset($_SERVER['REQUEST_URI']))
        {
            $route = $_SERVER['REQUEST_URI'];
        }
        return $route;
    }
    
}