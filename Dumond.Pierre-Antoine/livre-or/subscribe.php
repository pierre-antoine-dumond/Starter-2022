<?php
    // Démarrage de la session PHP
    include 'header.php';
    include 'navbar.php';
    if(isset($_SESSION['user'])) {
        header('Location: profil.php');
        exit;
    }
    // Vérification de l'envoi du formulaire 
    if(!empty($_POST)) {
        // Vérification du remplissage de TOUS les champs
        if(isset($_POST['Login'], $_POST['Password'], $_POST['Confirmpassword']) 
            && !empty($_POST['Login']) && !empty($_POST['Password']) && !empty($_POST['Confirmpassword'])) {
                // Protection des données (faille XSS)
                $login = strip_tags($_POST['Login']);
                if($_POST['Password'] === $_POST['Confirmpassword']) {
                $pass = $_POST['Password'];
                }
                // $pass = password_hash($_POST['Password'], PASSWORD_ARGON2I);
                // Ajout des contrôles supplémentaires si nécéssaires
                //                  ICI 

                // Enregistrement en base de données
                require_once "connect-dev.php";
                $sqlQuery = "INSERT INTO `utilisateurs`(`login`, `password`) VALUES (:login, '$pass')";
                $query = $db->prepare($sqlQuery);
                $query->bindvalue(":login", $login, PDO::PARAM_STR);
                $query->execute();

                // Récupératin de l'ID du nouvel utilisateur
                $id = $db->lastInsertId();

                // Connexion de l'utilisateur
                // On stocke dans $_SESSION les informations de l'utilisateur
                $_SESSION['user'] = [
                    "id" => $id,
                    "pseudo" => $login,
                    "roles" => ['ROLE_USER'] 
                ];
                var_dump($_SESSION);

                // redirection vers la page d'accueil
                header("Location: index.php");
            }
        } else {
            ('Veuillez remplir les champs obligatoires');
        }
    // var_dump($_POST);
?>

<body>
    <div class="box">
        <form action="" method="POST" name="formulaire" class="formBloc">
            <h3><strong>Inscrivez-vous</strong></h3>
            <div class="formGroupe">
                <label for="login">Login</label>
                <input type="text" name="Login" placeholder="login" id="login" requiredmaxlenght="24">
            </div>
            <div class="formGroupe">
                <label for="mdp">Password</label>
                <input type="password" name="Password" placeholder="*******" class="mdp" requiredmaxlenght="24">
            </div>
            <div class="formGroupe">
                <label for="confpassword">Confirmation Password</label >
                <input type="password" name="Confirmpassword" placeholder="*******" class="mdp" requiredmaxlenght="24">
            </div>
            <input type="submit" value="Envoyer" class="buttonSub">
            <div class="mdpperdu">
                <a href="#"> Mot de passe oublié ?</a>
            </div>
        </form>
    </div>
    <script>
        const inputs = document.querySelectorAll('input');
        for(let i = 0; i < input.lenght; i++){
            let field = inputs[i];
            field.addEvenListener('input', (e)) => {
                if(e.target.value != ""){
                    e.target.parentNode.classList.add('animation');
                } elseif (e.target.value == ""){
                    e.target.parentNode.classList.remove('animation');
                }
            }
        }
    </script>
</body>
</html>