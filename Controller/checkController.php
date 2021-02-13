<?php

require "vendor/autoload.php";

namespace App\Controller;

class CheckController
{
    public function check($input)
    {
        trim($input); // supprimer les espaces au début et à la fin
        stripslashes($input); // supprimer les anti slashes
        htmlspecialchars($input); // transforme les scripts en texte
        return $input;
    }
}
