<?php

class Workershift{
    
    public static function read()
    {
        $conection = DB::getInstance();
        $expression = $conection->prepare('
            select  a.id, 
                    a.name, 
                    a.surname, 
                    b.name as shift 
        from worker_shift ws
        inner join worker a on a.id = ws.worker 
        left join shift b on b.id = ws.shift 
        group by    a.id, 
                    a.name, 
                    a.surname
        order by b.name asc
        ');
        $expression->execute();
        return $expression->fetchAll();
    }












    public static function readOne($id)
    {
        $conection = DB::getInstance();
        $expression = $conection->prepare('
        
            select * from worker_shift
            where id=:id
        
        ');
        $expression->execute([
            'id'=>$id
        ]);

        $workershift = $expression->fetch();

        $expression = $conection->prepare('
            
        ');




        return $expression->fetch();
    }















    public static function create($parameters)
    {
        $conection = DB::getInstance();
        $expression = $conection->prepare('
        
            insert into worker_shift(worker,shift) values
            (:worker,:shift);
        
        ');
        $expression->execute($parameters);
        return $conection->lastInssertId();
    }    

    
    
}