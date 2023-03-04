<?php

class DashboardController  extends AuthorizationController
{
    public function index()
    {
        $this->view->render('private' . DIRECTORY_SEPARATOR . 
                'dashboard');
    }
}