<?php

require "vendor/autoload.php";

?>

<h1>Tous les projets</h1>

<?php

$projects = new Mdl\ProjectModel;
$projects->viewallProjects();

?>
