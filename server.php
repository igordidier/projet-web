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
                          VALUES(NULL,'" . $_POST['nom'] . "','" . $_POST['prenom'] . "','" . $_POST['email'] . "','" . $_POST['mdp'] . "')";
                echo $requete . "<br/>";
                $res = executerRequete($conn, $requete);

                if (!$res) {
                    $msg="Erreur lors de la création de votre compte<br/>";

                } else {

                    $_SESSION['nom'] = $_POST['nom'];
                    $_SESSION['prenom'] = $_POST['prenom'];
                    $_SESSION['email'] = $_POST['email'];
                    $_SESSION['mdp'] = sha1($_POST['mdp']);
                    $_SESSION['confirm_mdp'] = sha1($_POST['confirm_mdp']);


                }
            } else {
                $msg="Les mots de passe ne correspondent pas<br/>";
            }
        }
   }

 ?>
