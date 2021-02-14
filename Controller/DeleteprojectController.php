<?php

require_once 'Controller/CheckController.php';


class DeleteprojectController
{
  public function deleteProject(){
    if(!empty($_POST['id'])){
      $check = new CheckController();
      $id = $check->check($_POST['id']);

      $project = new ProjectModel;

      $projectDel = $project->deleteProject($id);

      header('Location: ?action=viewprojects');
    } else {
      $_SESSION['error'] = "Le projet n'a pas été trouvé.";
      header('Location: ?action=viewprojects');
    }
  }

}

 ?>
