<?php

namespace App;

class IndexController
{
  public function indexview(){
    if(!empty($_SESSION['user']){
      header('Location: ?action=index');
    }else{
      header('Location: ?action=signin');
    })
  }
} ?>
