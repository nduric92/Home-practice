<?php

class App
{

    public static function start()
    {
        $route = Request::getRoute();

        $parts = explode('/',substr($route,1));
        
        $controller='';
        if(!isset($parts[0]) || $parts[0]==='')
        {
            $controller='IndexController';
        }else{
            $controller = ucfirst($parts[0]) . 'Controller';
        }

        $method='';
        if(!isset($parts[1]) || $parts[1]==='')
        {
            $method = 'index';
        }else{
            $method = $parts[1];
        }

        $parameter='';
        if(!isset($parts[2]) || $parts[2]===''){
            $parameter='';
        }else{
            $parameter=$parts[2];
        }
        
        if(!(class_exists($controller) && method_exists($controller,$method)))
        {
            $v = new View();
            $v->render('notFoundController',[
                'message'=>'Not exists ' . $controller . '-&gt;' . $method
            ]);
            //echo 'Not exists ' . $controller . '-&gt;' . $method;
            return;
        }

        $instance = new $controller();
        if(strlen($parameter)>0){
            $instance->$method($parameter);
        }else{
            $instance->$method();
        }
    }

    public static function config($key)
    {
        $configFile = BP_APP . 'configuration.php';

        if(!file_exists($configFile))
        {
            return 'Configuration File does not exists';
        }

        $config = require $configFile;

        if(!isset($config[$key]))
        {
            return 'Key ' . $key . ' is not set in configuration';
        }
        return $config[$key];
    }


    public static function auth()
    {
        return isset($_SESSION['auth']);
    }

    public static function operator()
    {
        return $_SESSION['auth']->name . ' ' . 
                $_SESSION['auth']->surname;
    }

    public static function admin()
    {
        return $_SESSION['auth']->role==='admin';
    }

    public static function dev()
    {
        return App::config('dev');
    }


}