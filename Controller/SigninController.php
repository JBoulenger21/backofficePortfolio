<?php


require_once 'Controller/CheckController.php';
require_once 'View/ViewTemplate.php';
require_once 'Model/UserModel.php';

class SigninController
{

  public function signIn()
  {

    // Si connexion :
    if(isset($_POST['username']) && !empty($_POST['username']) &&isset($_POST['password']) && !empty($_POST['password'])){
      $check = new CheckController();
      $username = $check->check($_POST['username']);
      $password = $check->check($_POST['password']);

      $user = new UserModel();

      $result = $user->signIn($username);

      if(password_verify($password, $result["0"]["password"])) // si le mot de passe correspond
      {
          $_SESSION['user'] = $user->signIn($username);

          header('Location: ?action=index');
      }
      else {
          $_SESSION['error'] = 'Mauvais mot de passe.';

          header('Location: ?action=index');
      }
  }
  else if(isset($_POST['emailin']) && !empty($_POST['emailin']) && isset($_POST['passwordin']) && !empty($_POST['passwordin']) && isset($_POST['usernamein']) && !empty($_POST['usernamein'])) {
    $check = new CheckController();
    $username = $check->check($_POST['usernamein']);
    $email = $check->check($_POST['emailin']);
    $password = $check->check($_POST['passwordin']);
    $password = password_hash($password, PASSWORD_DEFAULT);
    $user = new UserModel();
    $user->newUser($username, $email, $password);

    header('Location: ?action=signin');

  } else {
      //Si accès au formulaire de connexion :
    $view = new ViewTemplate('signin');
    $view->generate(array('error'));
    }
  }
}
?>
