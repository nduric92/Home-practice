<?php


class OperatorController extends AdminController
{
    private $viewPath = 'private' . 
    DIRECTORY_SEPARATOR . 'operators' . 
    DIRECTORY_SEPARATOR;
    private $e;//srart data
    private $message;


    public function index()
    {
        $this->view->render($this->viewPath . 'index',[
            'data'=>$this->adjustData(Operator::read()),
            'css'=>'operator.css'
        ]);
    }

    public function new()
    {
        if($_SERVER['REQUEST_METHOD']==='GET'){
            $this->callView([
                'e'=>$this->startData(),
                'message'=>$this->message
            ]);
            return;
        }
        $this->prepareView();
        if(!$this->controllNew()){
            $this->callView([
                'e'=>$this->e,
                'message'=>$this->message
            ]);
            return;
        }
        Operator::create((array)$this->e);  //ako je sve OK spremiti u bazu
        $this->callView([
            'e'=>$this->startData(),
            'message'=>'Successfully saved'
        ]);
    }

    private function controllNew()
    {
        return $this->controllName();
    }

    private function callView($parameters)
    {
        $this->view->render($this->viewPath . 
       'new',$parameters);  
    }

    private function prepareView()
    {
        $this->e = (object)$_POST;
    }

    private function controllName()
    {
        $s = $this->e->name;
        if(strlen(trim($s))===0){
            $this->message='Name mandatory';
            return false;
        }

        if(strlen(trim($s))>50){
            $this->message='The name must be less than 50 characters';
            return false;
        }


        if(Operator::sameName($s)){
            $this->message='Name already exists in base';
            return false; 
        }

        return true;
    }


    private function startData()
    {
        $e = new stdClass();
        $e->name='';
        $e->surname='';
        $e->email='';
        $e->role='';
        $e->customer='';
        return $e;
    }


    private function adjustData($operators)
    {
        foreach($operators as $o)
        {            
            $o->title=$o->email;
            if($o->email==null){
                $o->email = 'Not set';
            }
        }
        return $operators;
    }

}