<?php

class Worker{
    
    public static function read()
    {
        $conection = DB::getInstance();
        $expression = $conection->prepare('select * from worker');
        $expression->execute();
        return $expression->fetchAll();
    }

    
    
}