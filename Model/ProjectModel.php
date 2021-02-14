<?php

require_once 'Controller/SPDO.php';

class ProjectModel
{
  public function isTableExist(){
    $request = SPDO::getInstance()->prepare("CREATE TABLE IF NOT EXISTS `project` (`id` INT UNSIGNED NOT NULL AUTO_INCREMENT, `titre` VARCHAR(255) NOT NULL, `descrea` VARCHAR(255) NOT NULL, `img` VARCHAR(255), `contexte` VARCHAR(255), `choix` VARCHAR(255), PRIMARY KEY (`id`)) ENGINE = MyISAM;");
    $request->execute();
    $request->closeCursor();
  }

  public function newProject($titre, $descrea, $img, $contexte, $choix){
    $request = SPDO::getInstance()->prepare("INSERT INTO `project` SET `titre`=:titre, `descrea`=:descrea, `img`=:img, `contexte`=:contexte, `choix`=:choix");
    $arrayValue = [
      ':titre'=>$titre,
      ':descrea'=>$descrea,
      ':img'=>$img,
      ':contexte'=>$contexte,
      ':choix'=>$choix
    ];
    $request->execute($arrayValue);
    $request->closeCursor();
  }

  public function viewallProjects(){
    $request = SPDO::getInstance()->prepare("SELECT * FROM `project`");
    $request->execute();
    $data = $request->fetchAll();
    return $data;
  }

  public function updateProject($id, $titre, $descrea, $img, $contexte, $choix){
    if($img = NULL){
      $request = SPDO::getInstance()->prepare("UPDATE `titre`, `descrea`, `contexte`, `choix` FROM `project` WHERE `id`==:id");
      $arrayValue = [
        ':id'=>$id
      ];
      $request->execute($arrayValue);
      $request->closeCursor();
    } else {
      $request = SPDO::getInstance()->prepare("UPDATE `titre`, `descrea`, `img`, `contexte`, `choix` FROM `project` WHERE `id`==:id");
      $arrayValue = [
        ':id'=>$id
      ];
      $request->execute($arrayValue);
      $request->closeCursor();
    }

  }

  public function deleteProject($id){
    $request = SPDO::getInstance()->prepare("DELETE FROM `project` WHERE `id`==:id");
    $arrayValue = [
      ':id'=>$id
    ];
    $request->execute($arrayValue);
    $request->closeCursor();
  }
}


 ?>
