<?php


class WorkerController extends AdminController
{
    private $viewPath = 'private' . 
    DIRECTORY_SEPARATOR . 'workers' . 
    DIRECTORY_SEPARATOR;
    private $e; //start data
    private $message;


    public function index()
    {

        $workers = Worker::read();
        foreach($workers as $w){
            unset($w->password);
        }


        $this->view->render($this->viewPath . 'index',[
            'data'=>$workers,
            'css'=>'worker.css'
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
        Worker::create((array)$this->e);  //ako je sve OK spremiti u bazu
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
        $e->surname='';
        $e->oib='';
        $e->contractnumber='';
        $e->iban='';
        return $e;
    }

    private function prepareView()
    {
        $this->e = (object)$_POST;
    }

    private function controllNew()
    {
        return $this->controllName() && $this->controllSurname();
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

    private function controllSurname()
    {
        $s = $this->e->surname;
        if(strlen(trim($s))===0){
            $this->message='Surname mandatory';
            return false;
        }

        if(strlen(trim($s))>50){
            $this->message='Surname must be less than 50 characters';
            return false;
        }

        return true;
    }

    private function prepareBase()
    {
        
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

            $this->e = Worker::readOne($id);

            if($this->e==null){
                header('location: ' . App::config('url') . 'index/logout');
                return;
            }

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
        Worker::update((array)$this->e);
        $this->view->render($this->viewPath . 
        'change',[
            'e'=>$this->e,
            'message'=>'Succesfully updated'
        ]);  


    }
    private function controllChange()
    {
        return $this->controllName() && $this->controllSurname();
        
    }

    public function delete($id=0){
        $id=(int)$id;
        if($id===0){
            header('location: ' . App::config('url') . 'index/logout');
            return;
        }
        Worker::delete($id);
        header('location: ' . App::config('url') . 'worker/index');
    }

}