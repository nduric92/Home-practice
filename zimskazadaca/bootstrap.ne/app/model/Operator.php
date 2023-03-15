<?php

class Operator{
    
    public static function read()
    {
        $conection = DB::getInstance();
        $expression = $conection->prepare('select * from operator');
        $expression->execute();
        return $expression->fetchAll();
    }

    public static function readOne($id)
    {
        $conection = DB::getInstance();
        $expression = $conection->prepare('
        
            select * from operator
            where id=:id
        
        ');
        $expression->execute([
            'id'=>$id
        ]);
        return $expression->fetch();
    }

    
    public static function authorize($email,$password)
    {
        $conection = DB::getInstance();
        $expression = $conection->prepare('
        select * from operator where email=:email
        ');
        $expression->execute(['email'=>$email]);

        $operator = $expression->fetch();

        if($operator==null){
            return null;
        }

        if(!password_verify($password,$operator->password)){
            return null;
        }

        unset($operator->password);

        return $operator;
    }

    public static function create($parameters)
    {
        $conection = DB::getInstance();
        $expression = $conection->prepare('
        
            insert into operator(name,surname,email,password,role)
            values (:name,:surname,:email,:password,:role);
        
        ');
        $expression->execute($parameters);
    }

    public static function update($parameters)
    {
        $conection = DB::getInstance();
        $expression = $conection->prepare('
        
            update operator set
            name=:name,
            surname=:surname,
            email=:emal,
            password=:price,
            customer=:password,
            role=:role
            where id=:id
        ');
        $expression->execute($parameters);
    }

    public static function sameName($s)
    {
        $conection = DB::getInstance();
        $expression = $conection->prepare('
        
            select id from operator
            where name=:name
        
        ');
        $expression->execute([
            'name'=>$s
        ]);
        $id=$expression->fetchColumn();
        return $id>0;
    }


}