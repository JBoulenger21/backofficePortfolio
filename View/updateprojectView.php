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

  <h1>Modifier le projet</h1>

  <div class="formcontrol">
    <form class="newprojectform" action="?action=updateproject" method="post" enctype="multipart/form-data">
      <input type="hidden" name="id" value="<?php echo $id; ?>">
      <div class="form-floating mb-4">
        <label for="titreInput">Titre</label>
        <input id="titreInput" type="text" name="uptitre" class="form-control" value="<?php echo $titre; ?>"
      </div>
      <div class="form-floating mb-4">
        <label for="descrea">Realisation</label>
        <input id="descrea" type="text" name="updescrea" class="form-control" value="<?php echo $descrea; ?>">
      </div>
      <div class="form-floating mb-4">
        <label for="imageProjet">Image</label>
        <input id="imageProjet" type="file" name="upimage" class="form-control">
      </div>
      <div class="form-floating mb-4">
        <label for="contexteProjet">Contexte</label>
        <textarea id="contexteProjet" type="text" name="upcontexte" class="form-control"><?php echo $contexte; ?></textarea>
      </div>
      <div class="form-floating mb-4">
        <label for="choixProjet">Choix et réalisation</label>
        <textarea id="choix" type="text" name="upchoix" class="form-control"><?php echo $choix; ?></textarea>
      </div>
      <button type="submit" class="btn btnfooter">Mettre à jour le projet</button>
    </form>
  </div>
