<?php

session_start();

define('BP', __DIR__ . DIRECTORY_SEPARATOR);
define('BP_APP', BP . 'app' . DIRECTORY_SEPARATOR);

$autoloader=[
    BP_APP . 'controller',
    BP_APP . 'core',
    BP_APP . 'model'
];

$paths = implode(PATH_SEPARATOR, $autoloader);

set_include_path($paths);

spl_autoload_register(function($class)
{
    $paths = explode(PATH_SEPARATOR, get_include_path());
    foreach($paths as $path)
    {
        $file = $path . DIRECTORY_SEPARATOR . $class . '.php';
        if(file_exists($file))
        {
            require_once $file;
            break;
        }
    }
});

App::start();