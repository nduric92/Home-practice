<?php

class WorkerShift{
    
    public static function read()
    {
        $conection = DB::getInstance();
        $expression = $conection->prepare('
        select a.ime, a.prezime, b.naziv as smjena
        from radnik a
        inner join radnik_smjena rs on a.id = rs.radnik 
        inner join smjena b on b.id = rs.smjena 
        order by a.id;
        ');
        $expression->execute();
        return $expression->fetchAll();
    }

    
    
}