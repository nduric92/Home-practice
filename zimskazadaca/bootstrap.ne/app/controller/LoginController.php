<?php

class LoginController extends Controller
{

    public function authorization()
    {
        if(!isset($_POST['email']) || 
        strlen(trim($_POST['email']))===0)
        {
            $this->view->render('login',[
                'message'=>'email is mandatory',
                'email'=>''
            ]);
            return;
        }

        if(!isset($_POST['password']) ||
                strlen(trim($_POST['password']))===0){
            $this->view->render('login',[
                'message'=>'Password is mandatory',
                'email'=>$_POST['email']
            ]);
            return;    
        }

        $operator = Operator::authorize($_POST['email'],$_POST['password']);

        if($operator==null){
            $this->view->render('login',[
                'message'=>'Combination email and password does not match',
                'email'=>$_POST['email']
            ]);
            return;
        }

        $_SESSION['auth']=$operator;
        header('location:' . App::config('url') . 'dashboard/index');
    }


}