<?php

// spl_autoload_register(function($className){
//   var_dump($className);
//   die();
// });

require_once('vendor/autoload.php');

class Router
{

  private $indexController;
  private $deleteprojectController;
  private $newprojectController;
  private $updateprojectController;
  private $viewprojectController;
  private $signinController;
  private $logoutController;

  public function __construct()
  {
    $this->indexController = new App\Controller\IndexController;
    $this->deleteprojectController = new App\Controller\DeleteprojectController;
    $this->newprojectController = new App\Controller\NewprojectController;
    $this->updateprojectController = new App\Controller\UpdateprojectController;
    $this->viewprojectController = new App\Controller\ViewprojectController;
    $this->signinController = new App\Controller\SigninController;
    $this->logoutController = new App\Controller\LogoutController;
  }

  public function routerRequest()
  {
    if (isset($_GET['action']) && !empty($_SESSION['user'])) { // si qqch dans url et qqch dans session

      if ($_GET['action'] == 'newproject') {
        $this->newprojectController->newProject();
      }
      if ($_GET['action'] == 'deleteproject') {
        $this->deleteprojectController->deleteProject();
      }
      if ($_GET['action'] == 'updateproject') {
        $this->updateprojectController->updateProject();
      }
      if ($_GET['action'] == 'viewprojects') {
        $this->viewprojectController->viewallProjects();
      }
      if ($_GET['action'] == 'index') {
        $this->indexController->indexview();
      }
      if ($_GET['action'] == 'disconnect') {
        $this->logoutController->disconnect();
      }
    } else if (isset($_GET['action'])) // et si y'a qqch dans url et rien dans session
    {

      if ($_GET['action'] == 'signin') {
        $this->signinController->signIn();
      }
      if ($_GET['action'] == 'index') {
        $this->indexController->indexview();
      }
      if ($_GET['action'] == 'disconnect') {
        $this->indexController->indexview();
      }
      // ramène à la page home si on essaye de rentrer le nom de la page dans l'url en étant pas connecté
      if ($_GET['action'] == 'newproject') {
        $this->indexController->indexview();
      }
      if ($_GET['action'] == 'deleteproject') {
        $this->indexController->indexview();
      }
      if ($_GET['action'] == 'updateproject') {
        $this->indexController->indexview();
      }
      if ($_GET['action'] == 'viewprojects') {
        $this->indexController->indexview();
      }
    } else // si y'a pas de get action
    {
      $this->indexController->indexview();
    }
  }
}
