<nav>
    <h1>Titre</h1>
    <ul>
        <li>Accueil</li>
        <li>Services</li>
        <li>Contact</li>
        <?php if(!isset($_SESSION['user'])): ?>
            <li><a href="/connect-users.php">Connexion</li>
            <li><a href="/subscribe.php">Inscription</li>
        <?php else: ?>
            <li><a href="/deconnect.php">Deconnexion</li>
            <h2>Bonjour <?= $_SESSION['user']['pseudo'];  ?></h2>
        <?php endif; ?>
    </ul>
</nav>