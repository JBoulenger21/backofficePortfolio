<?php

require "View/View.php";

namespace App\Controller;

class IndexController
{
  public function indexview(){
    if(!empty($_SESSION['user']){
      $view = new App\View\View('indexView');
      $view->generate(array());
    }else{
      $view = new App\View\View('signinView');
      $view->generate(array());
    })
  }
} ?>
