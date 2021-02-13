 <?php

// class autoload
// {
//   static function register(){
//     spl_autoload_register(array(__CLASS__, 'autoload'));
//   }
//
//   static function autoload($className){
//
//     $className = str_replace("App\\", "", $className);
//     $className = str_replace("\\", "/", $className);
//     require 'class/'. $className . '.php';
//   }
//
// }



 spl_autoload_register(function ($className) {
    $className = str_replace("App", "", $className);
    $className = str_replace("\\", "/", $className);
    $className = substr($className, 1);
    $className .= '.php';
    require $className;
});
 ?>
