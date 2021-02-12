<?php

require "vendor/autoload.php";

namespace App;

class DeleteprojectController
{
  public function deleteProject(){
    if(!empty($_POST['id'])){
      deleteProject();
    }
  }

}

 ?>
