<?php

session_start();

require_once 'Controller/CheckController.php';
require_once 'View/ViewTemplate.php';
require_once 'Model/ProjectModel.php';

class UpdateprojectController
{
  public function updateProject(){
    if(!empty($_POST['id']) && !empty($_POST['uptitre']) && !empty($_POST['updescrea']) && !empty($_POST['upcontexte']) && !empty($_POST['upchoix'])){

      $check = new CheckController;
      $titre = $check->check($_POST['uptitre']);
      $descrea = $check->check($_POST['updescrea']);
      $image = '';
      if(isset($_FILES['upimg'])){
        $image = $_FILES['upimg']['name'];
        $dir = "image/$image";
        move_uploaded_file($_FILES['upimg']['tmp_name'],$dir);
      }

      $contexte = $check->check($_POST['upcontexte']);
      $choix= $check->check($_POST['upchoix']);

      $project = new ProjectModel;
      $project->updateProject($id, $titre, $descrea, $image, $contexte, $choix);

      $view = new ViewTemplate('home');
      $view->generate(array());

    } else if(!empty($_POST['id']) && !empty($_POST['titre']) && !empty($_POST['descrea']) && !empty($_POST['img']) && !empty($_POST['contexte']) && !empty($_POST['choix'])){

      $check = new CheckController;
      $id = $check->check($_POST['id']);
      $titre = $check->check($_POST['titre']);
      $descrea = $check->check($_POST['descrea']);
      $img = $check->check($_POST['img']);
      $contexte = $check->check($_POST['contexte']);
      $choix= $check->check($_POST['choix']);

      $_SESSION["project"] = [
        "id"=> $id,
        "titre"=> $titre,
        "descrea"=> $descrea,
        "img"=> $img,
        "contexte"=> $contexte,
        "choix"=> $choix
      ];
      $view = new ViewTemplate('updateproject');
      $view->generate(array());
    } else {
      $_SESSION['error'] = "Modification échouée du projet.";
      $view = new ViewTemplate('viewprojects');
      $view->generate(array());
    }
  }
}
?>
