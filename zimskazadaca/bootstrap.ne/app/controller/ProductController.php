<?php


class ProductController extends AuthorizationController
{
    private $viewPath = 'private' . 
    DIRECTORY_SEPARATOR . 'products' . 
    DIRECTORY_SEPARATOR;
    private $nf; //number formatter
    private $e; //start data
    private $message;

    public function __construct()
    {
        parent::__construct();
        $this->nf = new NumberFormatter('en-HR', NumberFormatter::DECIMAL);
        $this->nf->setPattern(App::config('formatNumber'));
    }


    public function index()
    {
        $this->view->render($this->viewPath . 'index',[
            'data'=>$this->adjustData(Product::read()),
            'css'=>'product.css'
        ]);
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
        Product::create((array)$this->e);  //ako je sve OK spremiti u bazu
        $this->callView([
            'e'=>$this->startData(),
            'message'=>'Successfully saved'
        ]);
    }

    private function callView($parameters)
    {
        $this->view->render($this->viewPath . 
       'new',$parameters);  
    }

    private function prepareView()
    {
        $this->e = (object)$_POST;
    }

    private function prepareBase()
    {
        $this->e->price = $this->nf->parse($this->e->price);
    }

    private function controllNew()
    {
        return $this->controllName() && $this->controllPrice();
    }

    private function controllUpdate()
    {
        return  $this->controllPrice();
    }

    private function controllName()
    {
        $s = $this->e->name;
        if(strlen(trim($s))===0){
            $this->message='Name mandatory';
            return false;
        }

        if(strlen(trim($s))>50){
            $this->poruka='The name must be less than 50 characters';
            return false;
        }


        if(Product::sameName($s)){
            $this->massage='Name already exists in base';
            return false; 
        }

        return true;
    }

    private function controllPrice()
    {

        if(strlen(trim($this->e->price))===0){
            $this->message='Price mandatory';
            return false;
        }

        $price = $this->nf->parse($this->e->price);        
        if(!$price){
            $this->message='The price is not in good format';
            return false;
        }

        if($price<=0){
            $this->message='Price has to be higher than zero';
            return false;  
        }

        if($price>3000){
            $this->message='Price should not be greater then 3000';
            return false;  
        }


        return true;
    }

    

    private function startData()
    {
        $e = new stdClass();
        $e->name='';
        $e->color='';
        $e->price='';
        $e->customer='';
        return $e;
    }

    private function adjustData($products)
    {
        foreach($products as $p)
        {
            if(strlen($p->name)>25){
                $p->name = substr($p->name,0,23) . '...';
            }
            $p->price=$this->formatPrice($p->price);
            $p->title=$p->customer;
            if($p->customer==null){
                $p->customer = 'Not set';
            }
        }
        return $products;
    }

    private function formatPrice($number)
    {
        if($number==null){
            return 'Not set';
        }
        return $this->nf->format($number);
    }










}