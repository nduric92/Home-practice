<?php

class Operator{
    
    public static function read()
    {
        $conection = DB::getInstance();
        $expression = $conection->prepare('select * from operater');
        $expression->execute();
        return $expression->fetchAll();
    }

    
    public static function authorize($email,$password)
    {
        $conection = DB::getInstance();
        $expression = $conection->prepare('
        select * from operater where email=:email
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
}