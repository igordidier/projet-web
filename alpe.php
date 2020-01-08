<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="station.css">
    <title>Station de l'Alpe d'Huez</title>
    <link rel="shortcut icon" href="fav.jpg">
  </head>
  <body>

<?php include('head.php'); ?>

<div class="texte">
  <u>Station de L'Alpe d'Huez</u>
<div class="retour">

  <a href="station.php" style=" text-decoration: none; color: white; ">←Retour</a>

</div>

</div>

<div class="containers">

<a href="#"> <div class="container">
  <img class="imgcont" src="img/alpe.jpg" alt="station Alpe d'Huez">
<p style="font-size: 20px;margin: 0px;">Alpe D'huez</p>
  <p style="margin: 0;font-size: 10px;">Oisans</p>
  </div>
  </a>

</div>

<p class="texte_description">
  Description : Alpe d'Huez (prononcé [al.pə d‿ɥɛz]) est une station de sports d'hiver des Alpes située sur les anciens alpages du village d'Huez dans l'Isère à 59 km de Grenoble.
  Elle fait partie du massif des Grandes Rousses, au-dessus de l'Oisans.
  Située à 1 860 m d'altitude, la station de l'Alpe d'Huez est accessible à partir de Grenoble par la Route nationale 1091 qui longe la vallée de la Romanche en passant par les communes de Livet-et-Gavet et du Bourg-d'Oisans ainsi que par le Haut-Oisans en passant par le col de Sarenne.
  Elle est desservie pour ses clients étrangers par l'aéroport de Grenoble-Isère. </p>

<p class="texte_description">
Nombre de Remontées : 74.
</p>

<p class="texte_description">
  Tarifs des differents forfaits disponibles : ↓↓↓ (Source : <a href="https://skipass.alpedhuez.com" target="_blank"> https://skipass.alpedhuez.com</a>)
</p>

<div class="image2">
    <img class="image2" src="img/prix_alpe.png" alt="Tarifs_forfait_alpe_d'huez">

  </div>
<p class="texte_description"> Localisation de la Station (Google Maps): </p>
  <iframe class="carte" src="https://www.google.com/maps/d/embed?mid=1hGH86CYHrcjssr9axjABVdwi0EhjPtmv" width="1100" height="680"></iframe>
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
      $handle = fopen("comment/commentsaple.html","a");
      fwrite($handle,"<div class=idea><div class=tittle>" . $name . "</div><div class=para>" . $content . "</div></div>");
      fclose($handle);

  }




          ?>
          <h1 id="commentaire"></h1>
          <?php  include "comment/commentsaple.html"; ?>

<footer> <p>Copyright Dame Niasse, Louis Nardini, Igor Didier</p>
  <div class="hautpage"><a href="#haut-de-page">Retour vers le Haut de la page</br></a></div>
</footer>


  </body>
</html>
