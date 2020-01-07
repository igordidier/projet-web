<?php include('head.php'); ?>

<!DOCTYPE html>
<html lang="" dir="ltr">
  <head>
    <link rel="stylesheet" href="station.css">
    <title>Search</title>
    <link rel="shortcut icon" href="fav.jpg">
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

<?php
    if (isset($_POST['modifier_compte'])) {

        if ($_POST['mdp'] == $_POST['confirm_mdp']) {

            // isset($_POST['autre_login'] => gestion d'un autre compte, sinon gestion de notre compte
            $login = (isset($_POST['autre_login']) ? $_POST['autre_login'] : $_SESSION['login']);
            $admin = (isset($_POST['admin'])) ? 1 : 0;
            $mdp = (isset($_SESSION['mdp']) AND $_SESSION['mdp'] == $_POST['mdp']) ? $_POST['mdp'] : sha1($_POST['mdp']);

            $requete =
                "UPDATE COMPTE SET NOM='" . $_POST['nom'] . "',
                PRENOM='" . $_POST['prenom'] . "',
                EMAIL='" . $_POST['email'] . "',
                MDP='" . $mdp . "',
                ISADMIN='" . $admin . "'
                WHERE LOGIN='$login'";

            echo $requete . "<br/>";
            $connexion = connexionSQL();
            $res = executerRequete($connexion, $requete);

            if (!$res) {
                $msg="Erreur lors de la modification du compte<br/>";
                $connexion->close();
            } else {
                if (!isset($_POST['autre_login'])) {
                    $_SESSION['nom'] = $_POST['nom'];
                    $_SESSION['prenom'] = $_POST['prenom'];
                    $_SESSION['email'] = $_POST['email'];
                    $_SESSION['mdp'] = sha1($_POST['mdp']);
                    $_SESSION['confirm_mdp'] = sha1($_POST['confirm_mdp']);
                    $_SESSION['admin'] = isset($_POST['admin']);
                }
                $connexion->close();
                $msg="Mise à jour prise en compte<br/>";
            }
        } else {
            $msg="Les mots de passe ne correspondent pas<br/>";
        }
    }
?>
  </body>
</html>
