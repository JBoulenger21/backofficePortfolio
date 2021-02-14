<?php


require_once 'Controller/CheckController.php';
require_once 'View/ViewTemplate.php';
require_once 'Model/UserModel.php';

class SigninController
{

  public function signIn()
  {

    // Si connexion :
    if(isset($_POST['email']) && !empty($_POST['email']) &&isset($_POST['password']) && !empty($_POST['password'])){
      $check = new CheckController();
      $email = $check->check($_POST['email']);
      $password = $check->check($_POST['password']);

      $user = new UserModel();

      $checkmail = $user->emailExist($email); // récupérer tous les emails pour voir si l'email existe


      if(count($checkmail) === 0) // compte le nb de fois ou l'email apparait
      {
          // l'email n'existe pas en bdd
          $_SESSION['error'] = 'Aucun compte trouvé.';
      }
      else { // l'email existe en bdd

          $result = $user->signIn($email);

          if(password_verify($password, $result["0"]["password"])) // si le mot de passe correspond
          {
              $_SESSION['user'] = $user->signIn($email);

              header('Location: ?action=index');
          }
          else {
              $_SESSION['error'] = 'Mauvais mot de passe.';

              header('Location: ?action=index');
          }
      }

  }
  else if(isset($_POST['emailin']) && !empty($_POST['emailin']) &&isset($_POST['passwordin']) && !empty($_POST['passwordin'])) {
    $check = new CheckController();
    $email = $check->check($_POST['emailin']);
    $password = $check->check($_POST['passwordin']);
    $password = password_hash($password, PASSWORD_DEFAULT);
    $user = new UserModel();
    $user->newUser($email, $password);

    header('Location: ?action=signin');

  } else {
      //Si accès au formulaire de connexion :
    $view = new ViewTemplate('signin');
    $view->generate(array('error'));
    }
  }
}
?>
