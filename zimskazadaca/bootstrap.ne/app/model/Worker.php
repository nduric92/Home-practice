<?php

class Worker{
    
    public static function read()
    {
        $conection = DB::getInstance();
        $expression = $conection->prepare('select * from radnik');
        $expression->execute();
        return $expression->fetchAll();
    }

    
    
}