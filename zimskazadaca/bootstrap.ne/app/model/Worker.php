<?php

class Worker{
    
    public static function read()
    {
        $conection = DB::getInstance();
        $expression = $conection->prepare('select * from worker');
        $expression->execute();
        return $expression->fetchAll();
    }

    public static function readOne($id)
    {
        $conection = DB::getInstance();
        $expression = $conection->prepare('
        
            select * from worker
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
        
            insert into worker(name,surname,oib,
            contractnumber,iban) values
            (:name,:surname,:oib,
            :contractnumber,:iban);
        
        ');
        $expression->execute($parameters);
    }

    public static function update($parameters)
    {
        $conection = DB::getInstance();
        $expression = $conection->prepare('
        
            update worker set
            name=:name,
            surname=:surname,
            oib=:oib,
            contractnumber=:contractnumber,
            iban=:iban
            where id=:id
        ');
        $expression->execute($parameters);
    }
    
    public static function delete($id)
    {
        $conection = DB::getInstance();
        $expression = $conection->prepare('
        
            delete from worker
            where id=:id
        
        ');
        $expression->execute([
            'id'=>$id
        ]);
        $expression->execute();
    }
    
}