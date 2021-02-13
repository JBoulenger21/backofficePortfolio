<?php

namespace App\Controller;

require "vendor/autoload.php";
require "View/View.php";


class NewprojectController
{
  public function newProject(){
    if(!empty($_POST['titre']) && !empty($_POST['descrea']) && !empty($_FILE['img']) && !empty($_POST['contexte']) && !empty($_POST['choixProjet'])){

      $check = new App\Controller\Check;
      $titre = $check->check($_POST['titre']);
      $descrea = $check->check($_POST['descrea']);
      $image = $_FILES['img']['name'];
      $dir = "image/$image";
      move_uploaded_file($_FILES['img']['tmp_name'],$dir);
      $contexte = $check->check($_POST['contexte']);
      $choix= $check->check($_POST['choixProjet']);

      $newproject = new App\Model\projectModel;
      $newproject->isTableExist()->newProject($titre, $descrea, $img, $contexte, $choix);

      header('Location: ?action=viewprojects');

    } else {
      $view = new App\View\View('newprojectView');
      $view->generate(array());
    }
  }
}



 ?>
