<?php

class Product{
    
    public static function read()
    {
        $conection = DB::getInstance();
        $expression = $conection->prepare('
        select * from product order by name asc');
        $expression->execute();
        return $expression->fetchAll();
    }

    public static function readOne($id)
    {
        $conection = DB::getInstance();
        $expression = $conection->prepare('
        
            select * from product
            where id=:id
        
        ');
        $expression->execute([
            'id'=>$id
        ]);
        return $expression->fetch();
    }

    public static function create($parameters)
    {
        $conection = DB::getInstance();
        $expression = $conection->prepare('
        
            insert into product(name,color,price,
            customer) values
            (:name,:color,:price,
            :customer);
        
        ');
        $expression->execute($parameters);
    }

    public static function update($parameters)
    {
        $base = DB::getInstance();
        $expression = $conection->prepare('
        
            update product set
            name=:name,
            color=:color,
            price=:price,
            customer=:customer
        ');
        $expression->execute($parameters);
    }

    public static function sameName($s)
    {
        $conection = DB::getInstance();
        $expression = $conection->prepare('
        
            select id from product
            where name=:name
        
        ');
        $expression->execute([
            'name'=>$s
        ]);
        $id=$expression->fetchColumn();
        return $id>0;
    }
    
    
}