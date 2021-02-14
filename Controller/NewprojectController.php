<?php

require_once 'Controller/CheckController.php';
require_once 'View/ViewTemplate.php';

class NewprojectController
{
  public function newProject(){
    if(!empty($_POST['titre']) && !empty($_POST['descrea']) && !empty($_FILES['img']) && !empty($_POST['contexte']) && !empty($_POST['choix'])){

      $check = new CheckController;
      $titre = $check->check($_POST['titre']);
      $descrea = $check->check($_POST['descrea']);
      $image = $_FILES['img']['name'];
      $dir = "image/$image";
      move_uploaded_file($_FILES['img']['tmp_name'],$dir);
      $contexte = $check->check($_POST['contexte']);
      $choix= $check->check($_POST['choix']);
      $newproject = new ProjectModel;
      $newproject->newProject($titre, $descrea, $image, $contexte, $choix);

      header('Location: ?action=viewprojects');

    } else {
      $view = new ViewTemplate('newproject');
      $view->generate(array());
    }
  }
}



 ?>
