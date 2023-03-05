<?php


class ProductController extends AuthorizationController
{
    private $viewPath = 'private' . 
    DIRECTORY_SEPARATOR . 'products' . 
    DIRECTORY_SEPARATOR;

    public function index()
    {

        $products = Product::read();
        foreach($products as $p){
            unset($p->products);
        }


        $this->view->render($this->viewPath . 'index',[
            'data'=>$products
        ]);
    }

}