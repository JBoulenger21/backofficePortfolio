<div class="newproject">
  <h1>Nouveau Projet</h1>
</div>
<?php


 ?>
<div class="formcontrol">
  <form class="newprojectform" action="?action=newproject" method="post" enctype="multipart/form-data">
    <div class="form-floating mb-4">
      <label for="titreInput">Titre</label>
      <input id="titreInput" type="text" name="titre" class="form-control" placeholder="Le titre du projet">
    </div>
    <div class="form-floating mb-4">
      <label for="descrea">Realisation</label>
      <input id="descrea" type="text" name="descrea" class="form-control" placeholder="Description réalisé...">
    </div>
    <div class="form-floating mb-4">
      <label for="img">Image</label>
      <input id="img" type="file" name="img" class="form-control">
    </div>
    <div class="form-floating mb-4">
      <label for="contexte">Contexte</label>
      <textarea id="contexte" type="text" name="contexte" class="form-control" placeholder="Le contexte du projet"></textarea>
    </div>
    <div class="form-floating mb-4">
      <label for="choix">Choix et réalisation</label>
      <textarea id="choix" type="text" name="choix" class="form-control" placeholder="Les choix et la réalisation du projet"></textarea>
    </div>
    <button type="submit" class="btn btnfooter">Créer le projet</button>
  </form>
</div>
