<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="station.css">
    <title>Station de Chamrousse</title>
    <link rel="shortcut icon" href="fav.jpg">
  </head>
  <body>

<?php include('head.php'); ?>

<div class="texte">
  <u>Stations de Chamrousse</u>
<div class="retour">

  <a href="station.php" style=" text-decoration: none; color: white; ">←Retour</a>

</div>

</div>

<div class="containers">

<a href="#"> <div class="container">
    <img class="imgcont" src="img/chamrousse.jpg" alt="sunset park a chamrouse">
<p style="font-size: 20px;margin: 0px;">Chamrousse</p>
    <p style="margin: 0;font-size: 10px;">Belledonne</p>
  </div>
  </a>

</div>

<p class="texte_description">
  Description : Située à l'extrémité sud du massif de Belledonne,
  Chamrousse est surtout connue comme une station de ski alpin (1 400 m-2 250 m) proche de Grenoble.
  Elle dispose également de pistes de ski de fond (44 km) sur le plateau de l'Arselle et de nombreux sentiers de randonnées familiales l'été (lac Achard, lacs Robert).
  À l'extrémité de Bachat-Bouloud, le massif de Belledonne se termine par une cassure abrupte nommée le Trou de l'Homme, une chute d'environ 1 000 mètres dominant la vallée de la Romanche au niveau de Livet-et-Gavet.
</p>

<p class="texte_description">
Nombre de Remontées : 20.
</p>

<p class="texte_description">
  Tarifs des differents forfaits disponibles : ↓↓↓ (Source : <a href="https://www.chamrousse.com" target="_blank"> https://www.chamrousse.com</a>)
</p>

<div class="image">
    <img class="image" src="img/prix_chamrousse.png" alt="Tarifs_forfait_chamrousse">

  </div>
<p class="texte_description"> Localisation de la Station (Google Maps): </p>
  <iframe class="carte" src="https://www.google.com/maps/d/embed?mid=19xO0W-rQ7zBh21P4TrreZdw669XrKA8k" width="1100" height="680"></iframe>

  <br>
  <br>

  <h1>Laisser un aviz sur la station</h1>

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
      $handle = fopen("comment/commentschamrousse.html","a");
      fwrite($handle,"<div class=idea><div class=tittle>" . $name . "</div><div class=para>" . $content . "</div></div>");
      fclose($handle);

  }




          ?>
          <h1 id="commentaire"></h1>
          <?php  include "comment/commentschamrousse.html"; ?>

  <footer> <p>Copyright <a href="https://www.instagram.com/juniorniasse/"style="text-decoration: none;">Dame Niasse</a>,<a href="https://www.facebook.com/louis.nardini.1"style="text-decoration: none;">Louis Nardini</a> ,  <a href="https://www.instagram.com/igor_recap/" style="text-decoration: none;">Igor Didier</a></p>
    <div class="hautpage"><a href="#haut-de-page">Retour vers le Haut de la page</br></a></div>
  </footer>


  </body>
</html>
