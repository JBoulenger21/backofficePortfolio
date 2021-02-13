<?php

  require "vendor/autoload.php";
  require "View/View.php";

  namespace App\Controller;

  class ViewProjectController
  {
    public function viewallProjects(){

      $projects = new App\Model\ProjectModel;

      $data = $projects-> viewallProjects();

      $_SESSION['projects'] = $data;

      $view = new App\View\View('viewprojectsView');
      $view->generate(array('error'));

    }
  }

 ?>
