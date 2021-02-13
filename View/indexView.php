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

<div class="menu">
    <a href="?action=newproject">
        <div class="buttonProject">
            <h2>Nouveau projet</h2>
        </div>
    </a>
    <a href="?action=viewproject">
        <div class="buttonProject">
            <h2>Voir les extractions</h2>
        </div>
    </a>
</div>
