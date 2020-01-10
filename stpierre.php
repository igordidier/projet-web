<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="station.css">
    <title>Saint Pierre de Chartreuse</title>
    <link rel="shortcut icon" href="fav.jpg">
  </head>
  <body>

<?php include('head.php'); ?>

<div class="texte">
  <u>Station de Saint Pierre de Chartreuse</u>
<div class="retour">

  <a href="station.php" style=" text-decoration: none; color: white; ">←Retour</a>

</div>

</div>

<div class="containers">

<a href="#"> <div class="container">
    <img class="imgcont" src="img/stpierre.jpg" alt="park saint Pierre">
<p style="font-size: 20px;margin: 0px;">Saint Pierre</p>
    <p style="margin: 0;font-size: 10px;">Chartreuse</p>
  </div>
  </a>

</div>

<p class="texte_description">
  Saint Pierre de Chartreuse, située à 1345m d’altitude en Isère, propose un domaine skiable de 35km. Nos lecteurs ont partagé 58 avis sur Saint Pierre de Chartreuse avec une note moyenne de 4,1.
  A 30 min de Grenoble, Chambéry et Voiron.
</p>

<p class="texte_description">
Nombre de Remontées : 10.
</p>

<p class="texte_description">
  Tarifs des differents forfaits disponibles : ↓↓↓ (Source : <a href="https://www.ski-alpin-chartreuse.com/tarifs" target="_blank"> https://www.saint_pierre.com</a>)
</p>

<div class="image4">
    <img class="image4" src="img/prix_stpierre.png" alt="Tarifs_forfait_saint Pierre">

  </div>
<p class="texte_description"> Localisation de la Station (Google Maps): </p>
  <iframe class="carte" src="https://www.google.com/maps/d/embed?mid=1xvj0vl4U8xjjFL9p3bPWp3SnnwgBEpP4" width="1100" height="680"></iframe>

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
      $handle = fopen("comment/commentsstpierre.html","a");
      fwrite($handle,"<div class=idea><div class=tittle>" . $name . "</div><div class=para>" . $content . "</div></div>");
      fclose($handle);

  }




          ?>
          <h1 id="commentaire"></h1>
          <?php  include "comment/commentsstpierre.html"; ?>

  <footer> <p>Copyright <a href="https://www.instagram.com/juniorniasse/"style="text-decoration: none;">Dame Niasse</a>,<a href="https://www.facebook.com/louis.nardini.1"style="text-decoration: none;">Louis Nardini</a> ,  <a href="https://www.instagram.com/igor_recap/" style="text-decoration: none;">Igor Didier</a></p>
    <div class="hautpage"><a href="#haut-de-page">Retour vers le Haut de la page</br></a></div>
  </footer>


  </body>
</html>
