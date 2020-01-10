<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="station.css">
    <title>Col de Porte</title>
    <link rel="shortcut icon" href="fav.jpg">
  </head>
  <body>

<?php include('head.php'); ?>

<div class="texte">
  <u>Station de Col de Porte</u>
<div class="retour">

  <a href="station.php" style=" text-decoration: none; color: white; ">←Retour</a>

</div>

</div>

<div class="containers">

<a href="#"> <div class="container">
  <img class="imgcont" src="img/c2p.jpg" alt="station_Col_De_porte">
<p style="font-size: 20px;margin: 0px;">Col de Porte</p>
  <p style="margin: 0;font-size: 10px;">Chartreuse</p>
  </div>
  </a>

</div>

<p class="texte_description">
  Description : Le col de Porte à 1 326 m d'altitude est le point haut le plus méridional de la longue dépression « des trois cols »,
  ouverte sur toute la longueur du massif, du nord au sud, dans les marnes de Narbonne de la Chartreuse orientale.
  Le domaine de ski alpin est articulé autour de 2 secteurs : La Prairie et Chamechaude.
  Il est composé de 4 téléskis et d'un 1 tapis pour les débutants.
  6 pistes : 1 rouge, 4 bleues et 1 verte
</p>

<p class="texte_description">
Nombre de Remontées : 5.
</p>

<p class="texte_description">
  Tarifs des differents forfaits disponibles : ↓↓↓ (Source : <a href="https://www.ski-alpin-chartreuse.com/tarifs" target="_blank"> https://www.saint_pierre.com</a>)
</p>

<div class="image3">
    <img class="image3" src="img/prix_c2p.png" alt="Tarifs_forfait_Col2Porte">

  </div>
<p class="texte_description"> Localisation de la Station (Google Maps): </p>
  <iframe class="carte" src="https://www.google.com/maps/d/embed?mid=1qifE6UUO6xn_pE62bZsb5h848OlwyJK4" width="1100" height="680"></iframe>

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
