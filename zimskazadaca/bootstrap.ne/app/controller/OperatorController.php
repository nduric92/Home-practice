<?php


class OperatorController extends AdminController
{
    private $viewPath = 'private' . 
    DIRECTORY_SEPARATOR . 'operators' . 
    DIRECTORY_SEPARATOR;

    public function index()
    {

        $operators = Operator::read();
        foreach($operators as $o){
            unset($o->password);
        }


        $this->view->render($this->viewPath . 'index',[
            'data'=>$operators
        ]);
    }

}