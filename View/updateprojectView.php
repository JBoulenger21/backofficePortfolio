<?php

require "vendor/autoload.php";



if (isset($_SESSION["project"])){
  $updateproject = $_SESSION["project"];

  $id = $updateproject['id'];
  $titre = $updateproject['titre'];
  $descrea = $updateproject['descrea'];
  $contexte = $updateproject['contexte'];
  $choix = $updateproject['choix'];
}


 ?>

<div class="updateproject">
  <h1>Modifier le projet</h1>
  <form class="newprojectform" action="?action=updateproject" method="post">
    <div class="form-floating mb-4">
      <label for="titreInput">Titre</label>
      <input id="titreInput" type="text" name="uptitre" class="form-control" value="<?php echo $titre; ?>"
    </div>
    <div class="form-floating mb-4">
      <label for="descrea">Realisation</label>
      <input id="descrea" type="text" name="updescrea" class="form-control" value="<?php echo $descrea; ?>">
    </div>
    <div class="form-floating mb-4">
      <label for="imageProjet">Password</label>
      <input id="imageProjet" type="file" name="upimage" class="form-control">
    </div>
    <div class="form-floating mb-4">
      <label for="contexteProjet">Contexte</label>
      <textarea id="contexteProjet" type="text" name="upcontexte" class="form-control" placeholder="<?php echo $contexte; ?>">
    </div>
    <div class="form-floating mb-4">
      <label for="choixProjet">Choix et réalisation</label>
      <textarea id="choix" type="text" name="upchoixProjet" class="form-control" placeholder="<?php echo $choix; ?>">
    </div>
    <button type="submit" class="btn btn-outline-primary">Mettre à jour le projet</button>
  </form>
</div>
