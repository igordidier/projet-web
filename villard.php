<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="station.css">
    <title>Station de Villard-de-Lans</title>
    <link rel="shortcut icon" href="fav.jpg">
  </head>
  <body>

<?php include('head.php'); ?>

<div class="texte">
  <u>Station de Villard-de-Lans</u>
<div class="retour">

  <a href="station.php" style=" text-decoration: none; color: white; ">←Retour</a>

</div>

</div>

<div class="containers">

<a href="#"> <div class="container">
  <img class="imgcont" src="img/villard.jpg" alt="station Villard de lans">
<p style="font-size: 20px;margin: 0px;">Villard de lans</p>
  <p style="margin: 0;font-size: 10px;">Vercors</p>
  </div>
  </a>

</div>

<p class="texte_description">
  Description : Le domaine skiable de Villard-de-Lans Corrençon-en-Vercors est un domaine skiable (alpin et fond) français, du massif du Vercors.
  Il est situé sur les territoires des communes de Villard-de-Lans et Corrençon-en-Vercors, dans le département de l'Isère, en région Auvergne-Rhône-Alpes.
  Le domaine est située dans le massif du Vercors, à proximité des stations de ski d'Autrans-Méaudre en Vercors et Lans-en-Vercors.
  Il est situé à environ 32 km de Grenoble, 130 km de Lyon et 584 km de Paris.  </p>

<p class="texte_description">
Nombre de Remontées : 19.
</p>

<p class="texte_description">
  Tarifs des differents forfaits disponibles : ↓↓↓ (Source : <a href="https://www.villardcorrencon.com" target="_blank"> https://www.villardcorrencon.com</a>)
</p>

<div class="image3">
    <img class="image3" src="img/prix_villard.png" alt="Tarifs_forfait_villard">

  </div>
<p class="texte_description"> Localisation de la Station (Google Maps): </p>
  <iframe class="carte" src="https://www.google.com/maps/d/embed?mid=1KYG1fBct06AmcEXbmNm3v6UwQi6lZ77E" width="1100" height="680"></iframe>

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
      $handle = fopen("comment/commentsvillard.html","a");
      fwrite($handle,"<div class=idea><div class=tittle>" . $name . "</div><div class=para>" . $content . "</div></div>");
      fclose($handle);

  }




          ?>
          <h1 id="commentaire"></h1>
          <?php  include "comment/commentsvillard.html"; ?>

<footer> <p>Copyright Dame Niasse, Louis Nardini, Igor Didier</p>
  <div class="hautpage"><a href="#haut-de-page">Retour vers le Haut de la page</br></a></div>
</footer>


  </body>
</html>
