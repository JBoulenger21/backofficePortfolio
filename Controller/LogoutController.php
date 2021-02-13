<?php

namespace App\Controller;

include "autoload.php";

class LogoutController
{
  public function disconnect(){
    if(!empty($_SESSION['user'])){
      unset($_SESSION['user']);
      header('Location: ?action=index');
    } else {
      $_SESSION['error'] = "Vous êtes déjà déconnecté.";
      header('Location: ?action=index');
    }
  }
}

 ?>
