<?php


class ShiftController extends AdminController
{
    private $viewPath = 'private' . 
    DIRECTORY_SEPARATOR . 'shifts' . 
    DIRECTORY_SEPARATOR;

    public function index()
    {

        $shifts = Shift::read();
        foreach($shifts as $s){
            unset($s->password);
        }


        $this->view->render($this->viewPath . 'index',[
            'data'=>$shifts
        ]);
    }

}