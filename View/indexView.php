
<div class="menu">
  <h1>Backoffice du portfolio de Julie BOULENGER</h1>

  <?php
  if(!empty($_SESSION['error'])){
      echo '  <div class="alert alert-danger w-75 mx-auto" role="alert">
                  ' . $_SESSION['error'] . '
              </div>
      ';
      $_SESSION['error'] = '';
  }
  ?>

    <div class="buttonProject">
      <a href="?action=newproject">
        <h2>Nouveau projet</h2>
      </a>
    </div>
    <div class="buttonProject">
      <a href="?action=viewproject">
        <h2>Projets</h2>
      </a>
    </div>
</div>
