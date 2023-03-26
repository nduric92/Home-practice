<?php

class Cycle{
    
    public static function read()
    {
        $conection = DB::getInstance();
        $expression = $conection->prepare('
        select  a.name, 
                a.surname, 
                b.name as shift, 
                c.name as product,
                wsp.amount, 
                wsp.`date` 
        from worker a
        inner join worker_shift ws on a.id = ws.worker 
        inner join shift b on b.id = ws.shift
        inner join worker_shift_product wsp on ws.id =wsp.worker_shift 
        left join product c on wsp.product = c.id
        group by 
        a.name, a.name, 
                a.surname, 
                b.name, 
                c.name,
                wsp.amount, 
                wsp.`date`
        order by date desc;
        ');
        $expression->execute();
        return $expression->fetchAll();
    }

    
    
}