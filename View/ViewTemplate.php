<?php

namespace App\View;

class ViewTemplate
{
    private $file;
    private $title;

    public function __construct($name)
    {
        $this->file='View/'.$name.'.php';
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
            // var_dump($file);
            // die();
            return ob_get_clean();
        }
        else
        {
          echo 'File non trouvé';
            // throw new Exception($file . 'introuvable');
        }
    }
}
