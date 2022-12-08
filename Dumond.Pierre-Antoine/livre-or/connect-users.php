<?php
    // Démarrage de la session PHP
    session_start();
    if(isset($_SESSION['user'])) {
        header('Location: profil.php');
        exit;
    }
    // Vérification de l'envoi du formulaire
    if(!empty($_POST)){
        // Le formulaire a été envoyé
        // Vérification si TOUS les champs requis ont bien été remplis
        if(isset($_POST['Login'], $_POST['Password']) 
        && !empty($_POST['Login']) && !empty($_POST['Password'])) {
            // Connexion à la bdd
            require_once 'connect-dev.php';
            $sql = "SELECT * FROM `utilisateurs` WHERE `login` = :login";
            $query = $db->prepare($sql);
            $query->bindValue(":login", $_POST['Login'], PDO::PARAM_STR);
            $query->execute();
            $user = $query->fetch();
            if(!$user){
                die("L'utilisateur et/ou le mot de passe est incorrect");
            }
            // if(!password_verify($_POST['Password'], $user['Password']));
            // die("L'utilisateur et/ou le mot de passe est incorrect");
        }
        // Connexion de l'utilisateur
        // On stocke dans $_SESSION les informations de l'utilisateur
        $_SESSION['user'] = [
            "id" => $user['id'],
            "pseudo" => $user['username'] 
        ];
        var_dump($_SESSION);

        // redirection vers la page d'accueil
        header("Location: index.php");
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Connexion</h1>
    <form action="" method="POST" name="formulaire">
        <div>
            <input type="text" name="Login" placeholder="login">
        </div>
        <div>
            <input type="password" name="Password" placeholder="*******">
        </div>
        <input type="submit" value="Se Connecter">
    </form>
</body>
</html>