<?php

class DB extends PDO
{
    private static $instance=null;

    private function __construct()
    {
        extract(App::config('base'));
        parent::__construct($dsn,$user,$password);
        $this->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
    }

    public static function getInstance()
    {
        if(self::$instance==null){
            self::$instance=new self();
        }
        return self::$instance;
    }
}