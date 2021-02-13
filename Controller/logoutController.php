<?php

require "vendor/autoload.php";
require "View/View.php";

namespace App\Controller;

class LogoutController
{
  public function disconnect(){
    if(!empty($_SESSION['user'])){
      unset($_SESSION['user']);
      $view = new View('indexView');
      $view->generate(array());
    } else {
      $_SESSION['error'] = "Vous êtes déjà déconnecté.";
      $view = new View('indexView');
      $view->generate(array());
    }
  }
}

 ?>
