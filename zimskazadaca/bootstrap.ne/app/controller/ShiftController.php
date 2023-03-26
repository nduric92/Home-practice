<?php


class ShiftController extends AdminController
{
    private $viewPath = 'private' . 
    DIRECTORY_SEPARATOR . 'shifts' . 
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
            'data'=>$this->adjustData(Shift::read()),
            'css'=>'shift.css'
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
        Shift::create((array)$this->e);  //ako je sve OK spremiti u bazu
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
    private function startData()
    {
        $e = new stdClass();
        $e->name='';
        $e->duration='';
        return $e;
    }

    private function prepareView()
    {
        $this->e = (object)$_POST;
    }

    private function controllNew()
    {
        return $this->controllName();
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

        return true;
    }    

    private function prepareBase()
    {
        $this->e->duration = $this->nf->parse($this->e->duration); 
    }

    private function adjustData($shifts)
    {
        foreach($shifts as $s)
        {
            if(strlen($s->name)>25){
                $s->name = substr($s->name,0,23) . '...';
            }
            $s->title=$s->duration;
            if($s->duration==null || $s->duration==0){
                $s->duration = 'Not set';
            }
        }
        return $shifts;
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

            $this->e = Shift::readOne($id);

            if($this->e==null){
                header('location: ' . App::config('url') . 'index/logout');
                return;
            }

            $this->e->duration=$this->nf->format($this->e->duration);

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
        Shift::update((array)$this->e);
        $this->view->render($this->viewPath . 
        'change',[
            'e'=>$this->e,
            'message'=>'Succesfully updated'
        ]); 
   }

   private function controllChange()
   {
       return $this->controllName();
   }

   public function delete($id=0){
    $id=(int)$id;
    if($id===0){
        header('location: ' . App::config('url') . 'index/logout');
        return;
    }
    Shift::delete($id);
    header('location: ' . App::config('url') . 'shift/index');
}

}