<?php

require "vendor/autoload.php";

?>

<h1>Tous les projets</h1>

<?php

if(!empty($_SESSION['error'])){
    echo '  <div class="alert alert-danger w-75 mx-auto" role="alert">
                ' . $_SESSION['error'] . '
            </div>
    ';
    $_SESSION['error'] = '';
}



if(!empty($_SESSION['projects'])){
  foreach ($allProject as $key => $value) {
  ?>

  <div class="projects">
    <div class="viewproject">
      <h2>Projet "<?php echo $titre; ?>"</h2>
      <h3><?php echo $descrea; ?></h3>
      <img src="<?php echo $img; ?>" alt="Image du projet <?php echo $titre; ?>">
      <h4>Contexte</h4>
      <p><?php echo $contexte; ?></p>
      <h4>Choix et réalisation</h4>
      <p><?php echo $choix; ?></p>

    </div>
    <div class="buttonchoice">
      <form class="" action="?action=updateproject" method="post">
          <button type="submit" name="update">Modifier le projet</button>
          <input type="hidden" name="id" value="<?php echo $id; ?>">
          <input type="hidden" name="titre" value="<?php echo $titre; ?>">
          <input type="hidden" name="descrea" value="<?php echo $descrea; ?>">
          <input type="hidden" name="img" value="<?php echo $img; ?>">
          <input type="hidden" name="contexte" value="<?php echo $contexte; ?>">
          <input type="hidden" name="choix" value="<?php echo $choix; ?>">
      </form>
      <form class="" action="?action=deleteproject" method="post">
        <button type="submit" name="delete">Supprimer le projet</button>
      </form>
    </div>
  </div>

  <?php
  } else {
  ?>

  <h1>Pas de projets trouvés, veuillez entrer un nouveau projet pour commencer.</h1>

  <?php
  }
}

$_SESSION['projects'] = '';
?>
