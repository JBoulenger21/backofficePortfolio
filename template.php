<?php
include('header.php');
session_start();
?>

<div class="sidebar sidebarleft">
  <div>
    <div class="item">
        <a href="index.php">Accueil</a>
    </div>
  </div>
  <div>
    <div class="item">
        <a href="index.php#about">Projet</a>
    </div>
  </div>
</div>

<h1>Dashboard</h1>

<? $content ?>


<?php
include('footer.php');
?>
