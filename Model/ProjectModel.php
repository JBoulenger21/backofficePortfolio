<?php

require_once 'Controller/SPDO.php';

class ProjectModel
{
  public function newProject($titre, $descrea, $img, $contexte, $choix){
    $request = SPDO::getInstance()->prepare("INSERT INTO `project` SET `titre`=:titre, `descra`=:descrea, `img`=:img, `contexte`=:contexte, `choix`=:choix");
    $arrayValue = [
      ':titre'=>$titre,
      ':descrea'=>$descrea,
      ':img'=>$img,
      ':contexte'=>$contexte,
      ':choix'=>$choix
    ];
    SPDO::getInstance()->execute($request, $arrayValue);
    $request->closeCursor();
  }

  public function viewallProjects(){
    $request = SPDO::getInstance()->prepare("SELECT * FROM `project`");
    SPDO::getInstance()->execute($request);
    $data = $request->fetchAll();
    return $data;
  }

  public function updateProject($id, $titre, $descrea, $img, $contexte, $choix){
    if($img == NULL){
      $request = SPDO::getInstance()->prepare("UPDATE `project` SET `titre`=:titre, `descra`=:descrea, `contexte`=:contexte, `choix`=:choix WHERE `id`=:id");

      $arrayValue = [
        ':titre'=>$titre,
        ':descrea'=>$descrea,
        ':contexte'=>$contexte,
        ':choix'=>$choix,
        ':id'=>$id
      ];
    } else {
      $request = SPDO::getInstance()->prepare("UPDATE `project` SET `titre`=:titre, `descra`=:descrea, `img`=:img, `contexte`=:contexte, `choix`=:choix WHERE `id`=:id");

      $arrayValue = [
        ':titre'=>$titre,
        ':descrea'=>$descrea,
        ':img'=>$img,
        ':contexte'=>$contexte,
        ':choix'=>$choix,
        ':id'=>$id
      ];
    }

    SPDO::getInstance()->execute($request, $arrayValue);
  }

  public function deleteProject($id){
    $request = SPDO::getInstance()->prepare("DELETE FROM `project` WHERE `id`=:id");
    $arrayValue = [
      ':id'=>$id
    ];
    SPDO::getInstance()->execute($request, $arrayValue);
    $request->closeCursor();
  }
}


 ?>
