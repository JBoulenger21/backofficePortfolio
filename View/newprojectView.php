<div class="newproject">
  <h1>Nouveau Projet</h1>
  <?php
  if(!empty($_SESSION['error'])){
      echo '  <div class="alert alert-danger w-75 mx-auto" role="alert">
                  ' . $_SESSION['error'] . '
              </div>
      ';
      $_SESSION['error'] = '';
  }
  ?>
  <form class="newprojectform" action="?action=newproject" method="post">
    <div class="form-floating mb-4">
      <label for="titreInput">Titre</label>
      <input id="titreInput" type="text" name="titre" class="form-control" placeholder="Le titre du projet">
    </div>
    <div class="form-floating mb-4">
      <label for="descrea">Realisation</label>
      <input id="descrea" type="text" name="descrea" class="form-control" placeholder="Description réalisé...">
    </div>
    <div class="form-floating mb-4">
      <label for="imageProjet">Password</label>
      <input id="imageProjet" type="file" name="imageProjet" class="form-control">
    </div>
    <div class="form-floating mb-4">
      <label for="contexteProjet">Contexte</label>
      <textarea id="contexteProjet" type="text" name="contexteProjet" class="form-control" placeholder="Le contexte du projet">
    </div>
    <div class="form-floating mb-4">
      <label for="choixProjet">Choix et réalisation</label>
      <textarea id="choixProjet" type="text" name="choixProjet" class="form-control" placeholder="Les choix et la réalisation du projet">
    </div>
    <button type="submit" class="btn btn-outline-primary">Créer le projet</button>
  </form>
</div>
