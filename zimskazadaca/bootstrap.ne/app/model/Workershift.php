<?php

class Workershift{
    
    public static function read()
    {
        $conection = DB::getInstance();
        $expression = $conection->prepare('
        select a.name, a.surname, b.name as shift
        from worker a
        inner join worker_shift rs on a.id = rs.worker 
        inner join shift b on b.id = rs.shift 
        order by b.id;
        ');
        $expression->execute();
        return $expression->fetchAll();
    }

    
    
}