<?php

class Product{
    
    public static function read()
    {
        $conection = DB::getInstance();
        $expression = $conection->prepare('select * from proizvod');
        $expression->execute();
        return $expression->fetchAll();
    }

    
    
}