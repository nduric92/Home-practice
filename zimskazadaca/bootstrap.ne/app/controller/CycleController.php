<?php


class CycleController extends AuthorizationController
{
    private $viewPath = 'private' . 
    DIRECTORY_SEPARATOR . 'cycles' . 
    DIRECTORY_SEPARATOR;
    private $e; //start data
    private $messages=[];

    public function __construct()
    {
        parent::__construct();
    }


    public function index()
    {
        $this->view->render($this->viewPath . 'index',[
            'data'=>$this->adjustData(Cycle::read()),
            'css'=>'cycle.css'
        ]);
    }


    private function adjustData($cycles)
    {
        foreach($cycles as $c)
        {
            if($c->date==null || $c->date=='0000-00-00'){
                $c->date = 'Not defined';
            }  
        }
        return $cycles;
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
        $this->prepareBase(); // priprema za bazu
        Cycle::create((array)$this->e);  //ako je sve OK spremiti u bazu
        $this->callView([
            'e'=>$this->startData(),
            'message'=>'Successfully saved'
        ]);
    }

    private function prepareView()
    {
        $this->e = (object)$_POST;
    }

    private function controllNew()
    {
        
    }

    private function callView($parameters)
    {
        $this->view->render($this->viewPath . 
       'new',$parameters);  
    }

    private function startData()
    {
        $e = new stdClass();
        $e->worker_shift='';
        $e->product='';
        $e->amount='';
        $e->date='';
        return $e;
    }
    

    public function delete($id=0){
        $id=(int)$id;
        if($id===0){
            header('location: ' . App::config('url') . 'index/logout');
            return;
        }
        Cycle::delete($id);
        header('location: ' . App::config('url') . 'cycle/index');
    }

}