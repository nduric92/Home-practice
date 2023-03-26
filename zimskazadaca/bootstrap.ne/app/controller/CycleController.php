<?php


class CycleController extends AuthorizationController
{
    private $viewPath = 'private' . 
    DIRECTORY_SEPARATOR . 'cycles' . 
    DIRECTORY_SEPARATOR;
    private $nf; //number formatter
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

    
}