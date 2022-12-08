<?php
    // Connexion PDO 
    // Constantes d'environnements
    define("DBHOST", "localhost");
    define("DBUSER", "root");
    define("DBPASS", "root");
    define("DBNAME", "livreor");

    // DSN (Data Source Name) de connexion
    $dsn = "mysql:dbname=".DBNAME.";host=".DBHOST;

    // Connexion à la base
    try{
        // Création de l'instance du PDO
        $db = new PDO($dsn, DBUSER, DBPASS);
        // Envoi des données en UTF8
        $db->exec("SET NAMES utf8");
        // Définition du mode fetch par défaut 
        $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        echo 'Connexion à la base de donnée réussie'; 
    } catch(PDOException $e){
        die("Erreur".$e->getMessage());
    }


    // Connexion mysqli --> != PDO
    // $user='root';
    // $pass = 'root';
    // $db = 'livreor';
    // $dbconn = new mysqli('localhost', $user, $pass, $db);

    // $user='root';
    // $pass = 'dbmoduleconnexion';
    // $db = 'pa-mod-conn';
    // $dbconn = new mysqli('localhost', $user, $pass, $db);

    // $conn = mysqli_connect('localhost', $user, $pass, $db);

    // if (!$conn) {
    //     die("Échec de la connexion : " . mysqli_connect_error());
    // }
    // echo "Connexion réussie";

    
?>