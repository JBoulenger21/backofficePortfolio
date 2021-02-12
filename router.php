<?php

require "vendor/autoload.php";

class Router{

  private $projectController;

  public function __construct()
  {
    $this->indexController= new App\IndexController;
    $this->deleteprojectController= new App\DeleteprojectController;
    $this->newprojectController= new App\NewprojectController;
    $this->updateprojectController= new App\UpdateprojectController;
    $this->viewprojectController= new App\ViewprojectController;
    $this->signinController= new App\SigninController;
    $this->logoutController= new App\LogoutController;
  }

  public function routerRequest()
  {
      if(isset($_GET['action']) && !empty($_SESSION['user'])){ // si qqch dans url et qqch dans session

          if($_GET['action']=='newproject'){
              $this->newprojectController->newProject();
          }
          if($_GET['action']=='deleteproject'){
              $this->deleteprojectController->deleteProject();
          }
          if($_GET['action']=='updateproject'){
              $this->updateprojectController->updateProject();
          }
          if($_GET['action']=='viewprojects'){
              $this->viewprojectController->listScrap();
          }
          if($_GET['action']=='index'){
              $this->indexController->indexview();
          }
          if($_GET['action']=='disconnect'){
              $this->logoutController->disconnect();
          }
      }
      else if(isset($_GET['action'])) // et si y'a qqch dans url et rien dans session
      {

          if($_GET['action']=='signin'){
              $this->signinController->signIn();
          }
          if($_GET['action']=='index'){
              $this->indexController->indexview();
          }
          if($_GET['action']=='disconnect'){
              $this->indexController->indexview();
          }
          // ramène à la page home si on essaye de rentrer le nom de la page dans l'url en étant pas connecté
          if($_GET['action']=='newproject'){
              $this->indexController->indexview();
          }
          if($_GET['action']=='deleteproject'){
              $this->indexController->indexview();
          }
          if($_GET['action']=='updateproject'){
              $this->indexController->indexview();
          }
          if($_GET['action']=='viewprojects'){
              $this->indexController->indexview();
          }
          if($_GET['action']=='historical'){
              $this->indexController->indexview();
          }

      } else // si y'a pas de get action
      {
              $this->indexController->indexview();

      }
  }
}

 ?>
