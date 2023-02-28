<?php

class View
{
    private $template;

    public function __construct($template='template')
    {
        $this->template = $template;
    }

    public function render($phtmlPage,$parameters=[])
    {
        $viewFile = BP_APP . 'view' . DIRECTORY_SEPARATOR . 
        $phtmlPage . '.phtml';
        ob_start();
        extract($parameters);
        if(file_exists($viewFile))
        {
            include_once $viewFile;
        }else{
            include_once BP_APP . 'view' . DIRECTORY_SEPARATOR . 'errorViewFile.phtml';
        }
        $content = ob_get_clean();
        include_once BP_APP . 'view' . DIRECTORY_SEPARATOR . 
        $this->template . '.phtml';
    }

}