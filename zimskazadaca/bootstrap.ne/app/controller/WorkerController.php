<?php

class WorkerController  extends AuthorizationController
{
    public function index()
    {
        $this->view->render('private' . DIRECTORY_SEPARATOR . 
                'workers' . DIRECTORY_SEPARATOR . 'index');
    }
}
