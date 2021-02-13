<?php

require "vendor/autoload.php";

namespace App\Model;

class userModel
{
    public function isTableExist(){
      $request = App\Controller\SPDO::getInstance()->prepare("CREATE TABLE IF NOT EXIST `user` (`id` INT UNSIGNED NOT NULL AUTO_INCREMENT, `email` VARCHAR(255) NOT NULL, `password` VARCHAR(255) NOT NULL, PRIMARY KEY (`id`)) ENGINE = MyISAM;");
      $request->execute();
      $request->closeCursor();
    }

    public function signIn($email){
      $arrayValue = [
      ':email'=>$email
      ];
      $request = App\Controller\SPDO::getInstance()->prepare("SELECT  `email`, `password` FROM `user` WHERE `email`=:email");
      $request->execute($arrayValue);
      $request->closeCursor();
      $data = $request->fetch();
      return $data;
    }

    public function emailExist($email){
      $request = App\Controller\SPDO::getInstance()->prepare("SELECT `email` FROM `user` WHERE `email`=:email");
      $arrayValue = [
        ':email'=>$email
      ];
      $request->execute($arrayValue);
      $nb_presence = $request->fetch();
      return $nb_presence;
    }

}




// $arrayValue = [
// ':nom'=>$nom,
// ':Description'=>$Description
// ];
// $request = App\SPDO::getInstance()->prepare("INSERT INTO `categorie`(`Nom`, `Description`) VALUES (:nom,:Description)");
// $request->execute($arrayValue);
// $request->closeCursor();

?>
