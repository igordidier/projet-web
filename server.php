<?php

session_start();
include('fonctions.php');



if (isset($_POST['creer_compte'])) {

        $conn = connexionSQL();
        $res = getCompte($conn, $_POST['email']);

        if ($res->num_rows > 0) {
            $msg='email déjà utilisé, veuillez en choisir un autre';

        } else {
            if ($_POST['mdp'] == $_POST['confirm_mdp']) {

                // champ non disabled dans ce cas là, $_POST['login'] existe alors
                $requete = "INSERT INTO COMPTE (ID,NOM,PRENOM,EMAIL,MDP)
                          VALUES(NULL,'" . $_POST['nom'] . "','" . $_POST['prenom'] . "','" . $_POST['email'] . "','" . sha1($_POST['mdp']) . "')";

                $res = executerRequete($conn, $requete);

                if (!$res) {
                    $msg="Erreur lors de la création de votre compte<br/>";

                } else {

                    $_SESSION['nom'] = $_POST['nom'];
                    $_SESSION['prenom'] = $_POST['prenom'];
                    $_SESSION['email'] = $_POST['email'];
                    $_SESSION['mdp'] = sha1($_POST['mdp']);
                    $_SESSION['confirm_mdp'] = sha1($_POST['confirm_mdp']);

                      $msg="<div style='background-color: green;'>Bienvenue ton compte a bien été crée!</div>";
                }
            } else {
                $msg="Les mots de passe ne correspondent pas<br/>";
            }
        }

   } 

//modif profile

if (isset($_POST['modifier_compte'])) {

      if ($_POST['mdp'] == $_POST['confirm_mdp']) {

          $requete ="UPDATE COMPTE SET NOM='" . $_POST['nom'] . "',
              PRENOM='" . $_POST['prenom'] . "',
              EMAIL='" . $_POST['email'] . "',
              MDP='" . sha1($_POST['mdp']) . "';";

          echo $requete . "<br/>";
          $connexion = connexionSQL();
          $res = executerRequete($connexion, $requete);
}
}

 ?>
