<?php
if (isset($_SESSION["project"])){
  $updateproject = $_SESSION["project"];

  $id = $updateproject['id'];
  $titre = $updateproject['titre'];
  $descrea = $updateproject['descrea'];
  $contexte = $updateproject['contexte'];
  $choix = $updateproject['choix'];
}


 ?>

<div class="newproject">
  <h1>Connexion</h1>
  <form class="newprojectform" action="?action=newproject" method="post">
    <div class="form-floating mb-4">
      <label for="titreInput">Titre</label>
      <input id="titreInput" type="text" name="titre" class="form-control" value="<?php echo $titre; ?>"
    </div>
    <div class="form-floating mb-4">
      <label for="descrea">Realisation</label>
      <input id="descrea" type="text" name="descrea" class="form-control" value="<?php echo $descrea; ?>">
    </div>
    <div class="form-floating mb-4">
      <label for="imageProjet">Password</label>
      <input id="imageProjet" type="file" name="imageProjet" class="form-control">
    </div>
    <div class="form-floating mb-4">
      <label for="contexteProjet">Contexte</label>
      <textarea id="contexteProjet" type="text" name="contexteProjet" class="form-control" placeholder="<?php echo $contexte; ?>">
    </div>
    <div class="form-floating mb-4">
      <label for="choixProjet">Choix et réalisation</label>
      <textarea id="choixProjet" type="text" name="choixProjet" class="form-control" placeholder="<?php echo $choix; ?>">
    </div>
    <button type="submit" class="btn btn-outline-primary">Mettre à jour le projet</button>
  </form>
</div>
