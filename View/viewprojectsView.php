

<h1>Tous les projets</h1>

<?php

if(!empty($_SESSION['projects'])){
  $allProject = $_SESSION['projects'];
      foreach ($allProject as $key => $value) {
      ?>

      <div class="projects pageprojet">
        <div class="viewproject">
          <h2>Projet "<?php echo $value['titre']; ?>"</h2>
          <h3><?php echo $value['descra']; ?></h3>
          <img src="image/<?php echo $value['img']; ?>" alt="Image du projet <?php echo $value['titre']; ?>">
          <h4>Contexte</h4>
          <p><?php echo $value['contexte']; ?></p>
          <h4>Choix et réalisation</h4>
          <p><?php echo $value['choix']; ?></p>

        </div>
        <div class="buttonchoice">
          <form class="" action="?action=updateproject" method="post">
              <button class="btnfooter" type="submit" name="update">Modifier le projet</button>
              <input type="hidden" name="id" value="<?php echo $value['id']; ?>">
              <input type="hidden" name="titre" value="<?php echo $value['titre']; ?>">
              <input type="hidden" name="descrea" value="<?php echo $value['descra']; ?>">
              <input type="hidden" name="img" value="<?php echo $value['img']; ?>">
              <input type="hidden" name="contexte" value="<?php echo $value['contexte']; ?>">
              <input type="hidden" name="choix" value="<?php echo $value['choix']; ?>">
          </form>
          <form class="" action="?action=deleteproject" method="post">
            <input type="hidden" name="id" value="<?php echo $value['id']; ?>">
            <button class="btnfooter" type="submit" name="delete">Supprimer le projet</button>
          </form>
        </div>
      </div>

      <?php
    }
  } else {
  ?>

  <h1>Pas de projets trouvés, veuillez entrer un nouveau projet pour commencer.</h1>

  <?php
  }


$_SESSION['projects'] = '';
?>
