<?php

namespace App\Controller;

include "autoload.php";

class IndexController
{
  public function indexview(){
    if(!empty($_SESSION['user'])){
      $view = new \App\View\ViewTemplate('indexView');
      $view->generate(array());
    }else{
      $view = new \App\View\ViewTemplate('signinView');
      $view->generate(array());
    }
  }
} ?>
