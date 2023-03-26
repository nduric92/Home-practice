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

    public static function readOne($id)
    {
        $conection = DB::getInstance();
        $expression = $conection->prepare('
        
            select * from worker_shift_product
            where id=:id
        
        ');
        $expression->execute([
            'id'=>$id
        ]);
        $cycle = $expression->fetch();

        $expression = $conection->prepare('
        select name from product
        ');

        $expression->execute([
            'id'=>$id
        ]);
        $cycle->products = $expression->fetchAll();

        return $cycle;
    }

    public static function create($parameters)
    {
        $conection = DB::getInstance();
        $expression = $conection->prepare('
        
            insert into worker_shift_product(worker_shift,product,amount,
            date) values
            (:worker_shift,:product,:amount,
            :date)
        
        ');
        $expression->execute($parameters);
        return $conection->lastInsertId();
    }

    public static function update($parameters)
    {
        $conection = DB::getInstance();
        $expression = $conection->prepare('
        
            update worker_shift_product set
            worker_shift=:worker_shift,
            product=:product,
            amount=:amount,
            date=:date
            where id=:id
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
    
    public static function delete($id)
    {
        $conection = DB::getInstance();
        $expression = $conection->prepare('
        
            delete from product
            where id=:id
        
        ');
        $expression->execute([
            'id'=>$id
        ]);
        $expression->execute();
    }
    
}