<?php

require_once 'Controller/SPDO.php';

class userModel
{
    public function isTableExist(){
      $request = SPDO::getInstance()->prepare("CREATE TABLE IF NOT EXISTS `user` (`id` INT UNSIGNED NOT NULL AUTO_INCREMENT, `email` VARCHAR(255) NOT NULL, `password` VARCHAR(255) NOT NULL, PRIMARY KEY (`id`)) ENGINE = MyISAM;");
      $request->execute();
      $request->closeCursor();
    }

    public function signIn($email){
      $request = SPDO::getInstance()->prepare("SELECT * FROM `user` WHERE `email`=:email");
      $arrayValue = [
        ':email'=>$email
      ];
      $request->execute($arrayValue);
      $data = $request->fetchAll();
      return $data;
    }

    public function emailExist($email){
      $request = SPDO::getInstance()->prepare("SELECT `email` FROM `user` WHERE `email`=:email");
      $arrayValue = [
        ':email'=>$email
      ];
      $request->execute($arrayValue);
      $nb_presence = $request->fetchAll();
      return $nb_presence;
    }

    public function newUser($email, $password){
      $request = SPDO::getInstance()->prepare("INSERT INTO `user` SET `email`=:email, `password`=:password");
      $arrayValue = [
        ':email'=>$email,
        ':password'=>$password
      ];
      $request->execute($arrayValue);
      $request->closeCursor();
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
