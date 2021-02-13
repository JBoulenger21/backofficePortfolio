<?php

namespace App\View;

class View
{
    private $file;
    private $title;

    public function __construct($name)
    {
        $this->file='view/'.$name.'View.php';
    }

    public function generate($data)
    {
        $content=$this->generateFile($this->file,$data);
        $view=$this->generateFile('template.php',array('title'=>$this->title,'content'=>$content));
        echo $view;
    }

    public function generateFile($file, $data)
    {
        if(file_exists($file))
        {
            extract($data);
            ob_start();
            require $file;
            return ob_get_clean();
        }
        else
        {
            throw new Exception($file . 'introuvable');
        }
    }
}
