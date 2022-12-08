<?php
    // Démarrage de la session PHP
    include 'header.php';
    include_once 'navbar.php';
?>

<h1>Profil de <?= $_SESSION['user']['pseudo'] ?></h1>
<p>Pseudo : <?= $_SESSION['user']['pseudo'] ?></p>