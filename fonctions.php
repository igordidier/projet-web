<?php
function deconnect() {
    $_SESSION = array();
    if (isset($_COOKIE[session_name()])) {
        setcookie(session_name(),'',time()-1000,'/');
    }
    session_destroy();
    header('Location: ./connexion.php');
}

function valueInputType($name) {
    if (isset($_POST["$name"])) echo htmlspecialchars($_POST["$name"]);
    elseif (isset($_SESSION["$name"])) echo htmlspecialchars($_SESSION["$name"]);
}

function connexionSQL() {

    $serveur="localhost";
    $utilisateur="root";
    $mdp="";
    $base="projet";

    // Ouverture connexion à MySQL
    $connexion=new mysqli($serveur, $utilisateur, $mdp, $base);

    // si erreur
    if ($connexion->connect_error) {
        die('Erreur connexion base de données : '.$connexion->connect_errno.' : '
            .$connexion->connect_error);
    }

    // On retourne la connexion
    return $connexion;
}

function executerRequete($connexion, $requete) {

    $resultat = $connexion->query($requete);
    if (!$resultat) {
        die('Erreur exécution requête : '.$connexion->errno.' : '.$connexion->error);
    }
    return $resultat;
}

function getCompte($connexion, $email) {
    $requete = "SELECT * FROM COMPTE WHERE EMAIL='".$email."'";
    return executerRequete($connexion,$requete);
}

function getComptes($connexion) {
    $requete = "SELECT * FROM COMPTE";
    return executerRequete($connexion,$requete);
}
?>
