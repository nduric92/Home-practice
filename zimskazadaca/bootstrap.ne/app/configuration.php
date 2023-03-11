<?php

$dev = $_SERVER['SERVER_ADDR']==='127.0.0.1' ? true : false;

if($dev)
{
    return [
        'dev'=> $dev,
        'formatNumber'=>'###,##0.00',
        'url'=>'http://bootstrap.ne/',
        'nameApp'=>'Production',
        'base'=>[
            'dsn'=>'mysql:host=localhost;dbname=proizvodnja;charset=utf8mb4',
            'user'=>'root',
            'password'=>''
        ]
    ]; 
}else{
    return [
        'dev'=> $dev,
        'formatNumber'=>'###,##0.00',
        'url'=>'https://polaznik24.edunova.hr/',
        'nameApp'=>'Production',
        'base'=>[
            'dsn'=>'mysql:host=localhost;dbname=persefona_proizvodnja;charset=utf8mb4',
            'user'=>'persefona_persefona',
            'password'=>'Persefona23422'
        ]
    ];
}


