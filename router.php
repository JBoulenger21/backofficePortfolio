<?php

require_once 'Controller/IndexController.php';
require_once 'Controller/DeleteprojectController.php';
require_once 'Controller/NewprojectController.php';
require_once 'Controller/UpdateprojectController.php';
require_once 'Controller/ViewprojectController.php';
require_once 'Controller/SigninController.php';
require_once 'Controller/LogoutController.php';


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
    $this->indexController = new IndexController;
    $this->deleteprojectController = new DeleteprojectController;
    $this->newprojectController = new NewprojectController;
    $this->updateprojectController = new UpdateprojectController;
    $this->viewprojectController = new ViewprojectController;
    $this->signinController = new SigninController;
    $this->logoutController = new LogoutController;
  }

  public function routerRequest()
  {
    if (isset($_GET['action']) && !empty($_SESSION['user'])) {

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
    } else if (isset($_GET['action']))
    {

      if ($_GET['action'] == 'signin') {
        $this->signinController->signIn();
      }
      if ($_GET['action'] == 'index') {
        $this->signinController->signIn();
      }
      if ($_GET['action'] == 'disconnect') {
        $this->indexController->indexview();
      }
      // ramène à la page connexion si l'user essaye de rentrer le nom de la page dans l'url sans être connecté
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
