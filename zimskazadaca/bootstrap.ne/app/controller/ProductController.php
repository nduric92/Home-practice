<?php

class ProductController  extends AuthorizationController
{
    public function index()
    {
        $this->view->render('private' . DIRECTORY_SEPARATOR . 
                'products' . DIRECTORY_SEPARATOR . 'index');
    }
}