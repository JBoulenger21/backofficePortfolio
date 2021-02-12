<?php

require "vendor/autoload.php";

class Router{

  private $projectController;

  public function __construct()
  {
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
              $this->registrationController->historical();
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
          if($_GET['action']=='signOn'){
              $this->signOnController->signOn();
          }
          if($_GET['action']=='home'){
              $this->homeController->home();
          }

          // ramène à la page home si on essaye de rentrer le nom de la page dans l'url en étant pas connecté
          if($_GET['action']=='dashboard'){
              $this->homeController->home();
          }
          if($_GET['action']=='account'){
              $this->homeController->home();
          }
          if($_GET['action']=='newScrap'){
              $this->homeController->home();
          }
          if($_GET['action']=='listScrap'){
              $this->homeController->home();
          }
          if($_GET['action']=='historical'){
              $this->homeController->home();
          }

      } else // si y'a pas de get action
      {

          if(!empty($_SESSION['user'])) // si la personne est connecté, on est sur le dashboard
          {
              $this->dashboardController->dashboard();
          } else { // si la personne est déconnecté, renvoie à home
              $this->homeController->home();
          }

      }
  }
}

 ?>
