<?php

require "vendor/autoload.php";

namespace App;

class SignInController
{

  public function signIn()
  {

    // Si connexion :
    if(isset($_POST['email']) && !empty($_POST['email']) &&isset($_POST['password']) && !empty($_POST['password'])){
      $check = new App\CheckController();
      $email = $check->check($_POST['email']);
      $password = $check->check($_POST['password']);

      $user = new Mdl\UserModel()

      $check = $user->emailExist($email); // récupérer tous les emails pour voir si l'email existe

      if(count($check) === 0) // compte le nb de fois ou l'email apparait
      {
          // l'email n'existe pas en bdd
          $_SESSION['error'] = 'Aucun compte trouvé.';
      }
      else { // l'email existe en bdd

          $result = $user->signIn($email);

          if(password_verify($password, $result['password'])) // si le mot de passe correspond
          {
              $sessionUser = $user->user($email);
              $_SESSION['user'] = $sessionUser;

              header('Location: ?action=');
          }
          else {
              $_SESSION['error'] = 'Mauvais mot de passe.';
          }
      }

  }
  else {
      // header('Location: ?action=home');
  }

  //Si accès au formulaire de connexion :
  $view = new View('signin');
  $view->generate(array('error'));

}


?>
