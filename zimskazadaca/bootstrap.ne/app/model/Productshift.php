<?php

class ProductShift{
    
    public static function read()
    {
        $conection = DB::getInstance();
        $expression = $conection->prepare('select * from radnik_smjena');
        $expression->execute();
        return $expression->fetchAll();
    }

    
    
}