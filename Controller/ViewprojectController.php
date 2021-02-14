<?php

require_once 'View/ViewTemplate.php';
require_once 'Model/ProjectModel.php';

  class ViewProjectController
  {
    public function viewallProjects(){

      $projects = new ProjectModel;

      $data = $projects-> viewallProjects();

      $_SESSION['projects'] = $data;

      $view = new ViewTemplate('viewprojects');
      $view->generate(array('error'));

      unset($_SESSION['projects']);

    }
  }

 ?>
