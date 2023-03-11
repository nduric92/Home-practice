<?php


class WorkershiftController extends AdminController
{
    private $viewPath = 'private' . 
    DIRECTORY_SEPARATOR . 'workershifts' . 
    DIRECTORY_SEPARATOR;

    public function index()
    {

        $workershifts = Workershift::read();
        foreach($workershifts as $ws){
            unset($ws->password);
        }


        $this->view->render($this->viewPath . 'index',[
            'data'=>$workershifts,
            'css'=>'wshift.css'
        ]);
    }

}