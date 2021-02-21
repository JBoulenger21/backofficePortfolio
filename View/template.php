<!DOCTYPE html>
<html lang="fr">

  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="www.julie-boulenger.fr : site professionnel de Julie BOULENGER, Développeur Web et Web Mobile, côté BackOffice.">

      <link rel="preconnect" href="https://fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
      <link rel="stylesheet" href="style.css">
      <title>BackOffJB</title>
  </head>

  <body>

    <!-- header -->
    <div class="sidebar sidebarleft">
      <div>
        <div class="item">
            <a href="?action=index">Accueil</a>
        </div>
      </div>
      <div>
        <div class="item">
            <a href="?action=viewprojects">Projet</a>
        </div>
      </div>
    </div>
    <div class="flex">

      <h1>Dashboard</h1>
    </div>
      <?php if(isset($_SESSION['user'])){

      ?>
      <div class="btndeco">
        <a href="?action=disconnect"><button class="btnfooter" type="button" name="button">Se deconnecter</button></a>
      </div>

      <?php
      }
          if(!empty($_SESSION['error'])){
              echo '  <div class="alert alert-danger w-75 mx-auto" role="alert">
                          ' . $_SESSION['error'] . '
                      </div>
              ';
              $_SESSION['error'] = '';
          }
      ?>

    <!-- fin header -->

    <?= $content ?>



  <div id="footernav" class="footmenu">
    <nav>
      <a href="javascript:void(0);" class="burger" onclick="burgerMenu()">
        <img src="ressources/burger.png" alt="burger menu">
      </a>
      <a href="index.php"><button class="btn btnfooter" type="button" name="button">Accueil</button></a>
      <a href="mentionslegales.php"><button class="btn btnfooter" type="button" name="button">Mentions légales</button></a>
    </nav>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
  <script type="text/javascript" src="main.js"></script>
  </body>

</html>
