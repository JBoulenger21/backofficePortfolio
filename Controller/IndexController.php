<?php

require_once 'View/ViewTemplate.php';

class IndexController
{
  public function indexview(){
    if(!empty($_SESSION['user'])){
      $view = new ViewTemplate('index');
      $view->generate(array());
    }else{
      $view = new ViewTemplate('signin');
      $view->generate(array());
    }
  }
} ?>
