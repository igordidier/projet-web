<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="station.css">
    <title>Station de Meaudre</title>
    <link rel="shortcut icon" href="fav.jpg">
  </head>
  <body>

<?php include('head.php'); ?>

<div class="texte">
  <u>Station de Meaudre</u>
<div class="retour">

  <a href="station.php" style=" text-decoration: none; color: white; ">←Retour</a>

</div>

</div>

<div class="containers">

<a href="#"> <div class="container">
  <img class="imgcont" src="img/meaudre.jpg" alt="station Meaudre">
<p style="font-size: 20px;margin: 0px;">Meaudre</p>
  <p style="margin: 0;font-size: 10px;">Vercors</p>
  </div>
  </a>

</div>

<p class="texte_description">
  Description : La station de ski alpin Autrans Méaudre en Vercors regroupe 2 domaines alpins reliés par une navette gratuite.
Le domaine alpin de Méaudre vous accueille au coeur du village avec ses 18km de pistes et un domaine débutant accessible à tous.
 </p>

<p class="texte_description">
Nombre de Remontées : 9.
</p>

<p class="texte_description">
  Tarifs des differents forfaits disponibles : ↓↓↓ (Source : <a href="https://www.lansenvercors.com" target="_blank"> https://www.lansenvercors.com</a>)
</p>

<div class="image2">
    <img class="image2" src="img/prix_meaudre.png" alt="Tarifs_forfait_meaudre">

  </div>
<p class="texte_description"> Localisation de la Station (Google Maps): </p>
  <iframe class="carte" src="https://www.google.com/maps/d/embed?mid=12fxmunp1BYuQcHTsE1QtLTKfHqvFhMsq" width="1100" height="680"></iframe>

  <br>
  <br>

  <h1>Laissez un avis sur la station</h1>

  <?php
  if (isset($_SESSION['email'])) {

    echo "  <form action = '#commentaire' method = 'POST' class='commentform'>

     <textarea rows = '10' cols = '30' name = 'commentContent'></textarea><br/>
      <input type = 'submit'' value = 'Post' style='display: flex;margin: auto;font-size: 25px;padding: 10px;'><br/>
      </form>";
   }
       else {
         echo "<h3 style='text-align: center;'>Vous devez crée un compte pour ecrire un commentaire!  <a href='login.php'>Crée le?</a></h3>";



       }
  if($_POST) {
      $name = ucfirst($_SESSION["nom"]);
      $content = $_POST['commentContent'];
      $handle = fopen("comment/commentsmeaudre.html","a");
      fwrite($handle,"<div class=idea><div class=tittle>" . $name . "</div><div class=para>" . $content . "</div></div>");
      fclose($handle);

  }




          ?>
          <h1 id="commentaire"></h1>
          <?php  include "comment/commentsmeaudre.html"; ?>

  <footer> <p>Copyright <a href="https://www.instagram.com/juniorniasse/"style="text-decoration: none;">Dame Niasse</a>,<a href="https://www.facebook.com/louis.nardini.1"style="text-decoration: none;">Louis Nardini</a> ,  <a href="https://www.instagram.com/igor_recap/" style="text-decoration: none;">Igor Didier</a></p>
    <div class="hautpage"><a href="#haut-de-page">Retour vers le Haut de la page</br></a></div>
  </footer>


  </body>
</html>
