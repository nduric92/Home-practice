<?php

if($_POST['email']==='nemanja.duric92@gmail.com' && 
    $_POST['password']==='nemanja'){
        session_start();
        $_SESSION['auth']=true;
        setcookie('email',$_POST['email']);
        header('location: zasticeno.php');

    }else{
        header('location: login.php?email=' . $_POST['email']);
    }