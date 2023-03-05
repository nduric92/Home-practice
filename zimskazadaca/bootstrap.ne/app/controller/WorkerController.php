<?php


class WorkerController extends AdminController
{
    private $viewPath = 'private' . 
    DIRECTORY_SEPARATOR . 'workers' . 
    DIRECTORY_SEPARATOR;

    public function index()
    {

        $workers = Worker::read();
        foreach($workers as $w){
            unset($w->password);
        }


        $this->view->render($this->viewPath . 'index',[
            'data'=>$workers
        ]);
    }

}