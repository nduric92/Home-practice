<?php

class Shift{
    
    public static function read()
    {
        $conection = DB::getInstance();
        $expression = $conection->prepare('
        select 	a.id,
                a.name,
                a.duration,
                count(b.id) as employees 
        from shift a
        left join worker_shift b on a.id = b.shift 
        group by 	a.id,
                    a.name,
                    a.duration 
        order by a.name asc;
        ');
        $expression->execute();
        return $expression->fetchAll();
    }

    public static function readOne($id)
    {
        $conection = DB::getInstance();
        $expression = $conection->prepare('
        
            select * from shift
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
        
            insert into shift(name,duration) values
            (:name,:duration);
        
        ');
        $expression->execute($parameters);
    }

    public static function update($parameters)
    {
        $conection = DB::getInstance();
        $expression = $conection->prepare('
        
            update shift set
            name=:name,
            duration=:duration
            where id=:id
        ');
        $expression->execute($parameters);
    }

    public static function delete($id)
    {
        $conection = DB::getInstance();
        $expression = $conection->prepare('
        
            delete from shift
            where id=:id
        
        ');
        $expression->execute([
            'id'=>$id
        ]);
        $expression->execute();
    }

    
}