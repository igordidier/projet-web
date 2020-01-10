
 <!DOCTYPE html>
 <html lang="fr" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Sign In</title>
     <link rel="stylesheet" href="station.css">
   </head>
   <body>
     <?php include('head.php'); ?>

     <h1>Créez Votre Compte: </h1>
     <form class="signin" action="" method="post">
       <label for="NOM">Nom</label>
       <input type="text" name="nom" value="" required>
       <br>
       <br>
       <label for="PRENOM">Prenom</label>
       <input type="text" name="prenom" value="" required>
       <br>
       <br>
       <label for="EMAIL">Email</label>
       <input type="text" name="email" value="" required>
       <br>
       <br>
       <label for="mdp">Password</label>
       <input type="password" name="mdp" value="" required>
       <br>
       <br>
       <label for="mdpconfirm">Confirm Password</label>
       <input type="password" name="confirm_mdp" value="" required>
       <br>
       <br>
       <input type="submit" name="creer_compte" value="Crée">
       <p> Déja un compte? <a href="login.php">Connectez vous!</a> </p>
     </form>
<br>
<?php
if (isset($msg)) echo "<div style='color:white;text-align:center;background-color: red;width: 300px;margin: auto;border: 2px solid;border-radius: 25px;margin-top: 15px;'>$msg</div>";
?>
<br>
<br>


<footer> <p>Copyright <a href="https://www.instagram.com/juniorniasse/"style="text-decoration: none;">Dame Niasse</a>,<a href="https://www.facebook.com/louis.nardini.1"style="text-decoration: none;">Louis Nardini</a> ,  <a href="https://www.instagram.com/igor_recap/" style="text-decoration: none;">Igor Didier</a></p>
  <div class="hautpage"><a href="#haut-de-page">Retour vers le Haut de la page</br></a></div>
</footer>
</footer>

   </body>
 </html>
