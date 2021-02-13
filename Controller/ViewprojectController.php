<?php

namespace App\Controller;

  include "autoload.php";

  class ViewProjectController
  {
    public function viewallProjects(){

      $projects = new \App\Model\ProjectModel;

      $data = $projects-> viewallProjects();

      $_SESSION['projects'] = $data;

      $view = new \App\View\ViewTemplate('viewprojectsView');
      $view->generate(array('error'));

    }
  }

 ?>
