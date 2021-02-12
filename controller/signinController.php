<?php

require "vendor/autoload.php";

namespace App;

class SignInController
{

  public function signIn()
  {
    if(isset($_POST['email']) && !empty($_POST['email']) &&isset($_POST['password']) && !empty($_POST['password'])){
      $check = new App\CheckController();
      $email = $check->check($_POST['email']);
      $password = $check->check($_POST['password']);

      $user = new Mdl\UserModel()

    }
  }

}


?>
