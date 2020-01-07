<!DOCTYPE html>
<html>
	<head>
		<title>Compte - connexion</title>
    <link rel="stylesheet" href="station.css">
		<meta charset="UTF-8">
	</head>
	<body>
    <?php
   include('head.php');


    if (isset($_POST['connect'])) {
        $connexion = connexionSQL();
        $res = getCompte($connexion, $_POST['email']);

        if ($res->num_rows == 1) {
            $ligne = $res->fetch_assoc();
            //$ligne = $res->fetch_array();
            //$ligne = $res->fetch_object();
            //var_dump($ligne);
            if ((isset($_SESSION['mdp']) AND $_SESSION['mdp'] == $_POST['mdp']) OR (sha1($_POST['mdp']) == $ligne['MDP'])) {

                $_SESSION['nom'] = $ligne['NOM'];
                $_SESSION['prenom'] = $ligne['PRENOM'];
                $_SESSION['email'] = $ligne['EMAIL'];
                $_SESSION['mdp'] = $ligne['MDP'];
                $_SESSION['confirm_mdp'] = $ligne['MDP'];

                $res->close();
                $connexion->close();
                header('Location: ./station.php');
            } else {
                $error="Login et/ou mot de passe incorrects<br/>";
            }
        } else {
            $error="Login et/ou mot de passe incorrects<br/>";
            $res->close();
            $connexion->close();
        }
    }
    ?>
    <h1>Connectez vous A votre compte!</h1>
    <form method="post" class="signin">
        <table>
            <tr>
                <td>Email</td>
                <td>
                    <input required type="text" name="email" value="<?php
                        valueInputType("email");
                    ?>">
                </td>
            </tr>
            <tr>
                <td>Mot de passe</td>
                <td>
                    <input required type="password" name="mdp" value="<?php
                    valueInputType("mdp");
                    ?>">
                </td>
            </tr>
        </table>
        <input type="submit" name="connect" value="Connexion">
    </form>




    <?php

    if (isset($error)) echo "<div style='text-align:center;background-color: red;width: 300px;margin: auto;border: 2px solid;border-radius: 25px;margin-top: 15px;'>$error</div>";

    ?>

    <footer> <p>Copyright Dame Niasse, Louis Nardini, Igor Didier</p>

    </footer>
	</body>
</html>
