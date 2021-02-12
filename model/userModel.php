<?php

require "vendor/autoload.php";

namespace Mdl;

class userModel
{
    public function isTableExist(){
      $request = App\SPDO::getInstance()->prepare("CREATE TABLE IF NOT EXIST `user` (`id` INT UNSIGNED NOT NULL AUTO_INCREMENT, `email` VARCHAR(255) NOT NULL, `password` VARCHAR(255) NOT NULL, PRIMARY KEY (`id`)) ENGINE = MyISAM;");
      $request->execute();
      $request->closeCursor();
    }

    public function signIn($email){
      $arrayValue = [
      ':email'=>$email
      ];
      $request = App\SPDO::getInstance()->prepare("SELECT  `email`, `password` FROM `user` WHERE `email`=:email");
      $request->execute($arrayValue);
      $request->closeCursor();
      $data = $request->fetch();
      return $data;
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
