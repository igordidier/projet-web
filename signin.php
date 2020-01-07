
 <!DOCTYPE html>
 <html lang="fr" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Sign In</title>
     <link rel="stylesheet" href="/css/station.css">
   </head>
   <body>
     <?php include('head.php'); ?>
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
       <input type="text" name="mdp" value="" required>
       <br>
       <br>
       <label for="mdpconfirm">Confirm Password</label>
       <input type="text" name="confirm_mdp" value="" required>
       <br>
       <br>
       <input type="submit" name="creer_compte" value="Crée">
     </form>
<br>
<button type="button" name="button"> <a href="station.php">Retour</a> </button>
<br>
<br>

<?php if (isset($_POST['nom'])) {echo " Bienvenue ton compte a bien été crée!";}  ?>



   </body>
 </html>
