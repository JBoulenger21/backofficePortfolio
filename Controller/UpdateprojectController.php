<?php

namespace App\Controller;

include "autoload.php";

class UpdateprojectController
{
  public function updateProject(){
    if(!empty($_POST['id']) && !empty($_POST['uptitre']) && !empty($_POST['updescrea']) && !empty($_FILE['upimg']) && !empty($_POST['upcontexte']) && !empty($_POST['upchoix'])){

      $check = new \App\Controller\Check;
      $titre = $check->check($_POST['titre']);
      $descrea = $check->check($_POST['descrea']);
      $image = $_FILES['img']['name'];
      $dir = "image/$image";
      move_uploaded_file($_FILES['img']['tmp_name'],$dir);

      $contexte = $check->check($_POST['contexte']);
      $choix= $check->check($_POST['choixProjet']);

      $project = new \App\Model\ProjectModel;
      $project->updateProject($id, $titre, $descrea, $img, $contexte, $choix);

      $view = new \App\View\ViewTemplate('home');
      $view->generate(array());

    } else if(!empty($_POST['id']) && !empty($_POST['titre']) && !empty($_POST['descrea']) && !empty($_POST['img']) && !empty($_POST['contexte']) && !empty($_POST['choix'])){

      $check = new \App\Controller\Check;
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
      $view = new \App\View\ViewTemplate('updateprojectView');
      $view->generate(array());
    } else {
      $_SESSION['error'] = "Modification échouée du projet.";
      $view = new \App\View\ViewTemplate('viewprojectsView');
      $view->generate(array());
    }
  }
}
?>
