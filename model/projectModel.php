<?php

require "vendor/autoload.php";

namespace Mdl;

class ProjectModel
{
  public function isTableExist(){
    $request = App\SPDO::getInstance()->prepare("CREATE TABLE IF NOT EXIST `project` (`id` INT UNSIGNED NOT NULL AUTO_INCREMENT, `titre` VARCHAR(255) NOT NULL, `descrea` VARCHAR(255) NOT NULL, `img` VARCHAR(255), `contexte` VARCHAR(255), `choix` VARCHAR(255), PRIMARY KEY (`id`)) ENGINE = MyISAM;");
    $request->execute();
    $request->closeCursor();
  }

  public function newProject($titre, $descrea, $img, $contexte, $choix){
    $request = App\SPDO::getInstance()->prepare("INSERT INTO `project` VALUES (:titre, :descrea, :img, :contexte, :choix)");
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
    $request = App\SPDO::getInstance()->prepare("SELECT * FROM `project`");
    $request->execute();
    $data = $request->fetchAll();
    $request->closeCursor();
    return $data;
  }

  public function updateProject($id, $titre, $descrea, $img, $contexte, $choix){
    $request = App\SPDO::getInstance()->prepare("UPDATE `titre`, `descrea`, `img`, `contexte`, `choix` FROM `project` WHERE `id`==:id"):
    $arrayValue = [
      ':id'=>$id
    ];
    $request->execute($arrayValue);
    $request->closeCursor();
  }

  public function deleteProject($id){
    $request = App\SPDO::getInstance()->prepare("DELETE FROM `project` WHERE `id`==:id"):
    $arrayValue = [
      ':id'=>$id
    ];
    $request->execute($arrayValue);
    $request->closeCursor();
  }
}


 ?>
