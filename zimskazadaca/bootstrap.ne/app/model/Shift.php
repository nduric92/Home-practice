<?php

class Shift{
    
    public static function read()
    {
        $conection = DB::getInstance();
        $expression = $conection->prepare('select * from smjena');
        $expression->execute();
        return $expression->fetchAll();
    }

    
    
}