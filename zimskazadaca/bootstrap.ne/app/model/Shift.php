<?php

class Shift{
    
    public static function read()
    {
        $conection = DB::getInstance();
        $expression = $conection->prepare('select * from shift');
        $expression->execute();
        return $expression->fetchAll();
    }

    
    
}