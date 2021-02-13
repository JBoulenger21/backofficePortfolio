
<div class="home">
  <h1>Connexion</h1>
  <?php
      if(!empty($_SESSION['error'])){
          echo '  <div class="alert alert-danger w-75 mx-auto" role="alert">
                      ' . $_SESSION['error'] . '
                  </div>
          ';
          $_SESSION['error'] = '';
      }
  ?>
  <form class="signinform" action="?action=signin" method="post">
    <div class="form-floating mb-4">
      <label for="inputEmail">Email</label>
      <input id="inputEmail" type="email" name="email" class="form-control" placeholder="name@example.com">
    </div>
    <div class="form-floating mb-4">
      <label for="inputPassword">Password</label>
      <input id="inputPassword" type="password" name="password" class="form-control" placeholder="Password">
    </div>
    <button type="submit" class="btn btn-outline-primary">Se connecter</button>
  </form>
</div>
