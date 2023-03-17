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
        $this->nf = new NumberFormatter('hr-HR', NumberFormatter::DECIMAL);
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


    public function change($id='')
    {
        if($_SERVER['REQUEST_METHOD']==='GET'){
            if(strlen(trim($id))===0){
                header('location: ' . App::config('url') . 'index/logout');
                return;
            }

            $id=(int)$id;
            if($id===0){
                header('location: ' . App::config('url') . 'index/logout');
                return;
            }

            $this->e = Product::readOne($id);

            if($this->e==null){
                header('location: ' . App::config('url') . 'index/logout');
                return;
            }

            $this->e->price=$this->nf->format($this->e->price);

            $this->view->render($this->viewPath . 
            'change',[
                'e'=>$this->e,
                'message'=>''
            ]);  
            return;
        }

        // ovdje je POST
        $this->prepareView();
        if(!$this->controllChange()){// kontrolirati podatke, ako nešto ne valja vratiti na view s porukom 
            $this->view->render($this->viewPath . 
            'change',[
                'e'=>$this->e,
                'message'=>$this->message
            ]);  
         return;
        }

        $this->e->id=$id;
        $this->prepareBase(); // priprema za bazu
        Product::update((array)$this->e);
        $this->view->render($this->viewPath . 
        'change',[
            'e'=>$this->e,
            'message'=>'Succesfully updated'
        ]);  


    }

    public function delete($id=0){
        $id=(int)$id;
        if($id===0){
            header('location: ' . App::config('url') . 'index/logout');
            return;
        }
        Product::delete($id);
        header('location: ' . App::config('url') . 'product/index');
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

    private function controllChange()
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
            $this->message='The name must be less than 50 characters';
            return false;
        }


        if(Product::sameName($s)){
            $this->message='Name already exists in base';
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
            $this->message='The price is not in good format (xx.xx)';
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
                $p->customer = 'Customer not set';
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