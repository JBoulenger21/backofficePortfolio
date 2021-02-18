<?php

require_once 'Controller/SPDO.php';

class userModel
{
    public function isTableExist(){
      $request = SPDO::getInstance()->prepare("CREATE TABLE IF NOT EXISTS `user` (`id` INT UNSIGNED NOT NULL AUTO_INCREMENT, `email` VARCHAR(255) NOT NULL, `password` VARCHAR(255) NOT NULL, PRIMARY KEY (`id`)) ENGINE = MyISAM;");
      $request->execute();
      $request->closeCursor();
    }

    public function signIn($username){
      $request = SPDO::getInstance()->prepare("SELECT * FROM `user` WHERE `username`=:username");
      $arrayValue = [
        ':username'=>$username
      ];
      SPDO::getInstance()->execute($request, $arrayValue);
      $data = $request->fetchAll();
      return $data;
    }

    public function emailExist($email){
      $request = SPDO::getInstance()->prepare("SELECT `email` FROM `user` WHERE `email`=:email");
      $arrayValue = [
        ':email'=>$email
      ];
      SPDO::getInstance()->execute($request, $arrayValue);
      $nb_presence = $request->fetchAll();
      return $nb_presence;
    }

    public function newUser($username, $email, $password){
      $request = SPDO::getInstance()->prepare("INSERT INTO `user` SET `username`=:username, `email`=:email, `password`=:password");
      $arrayValue = [
        ':username'=>$username,
        ':email'=>$email,
        ':password'=>$password
      ];
      SPDO::getInstance()->execute($request, $arrayValue);
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
