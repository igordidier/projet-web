  <!-- Script pour la Page Lans en Vercors  -->
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="station.css">
    <title>Station de Lans-en-Vercors</title>
    <link rel="shortcut icon" href="fav.jpg">
  </head>
  <body>
    <!-- Intégration de la barre de navigation -->
<?php include('head.php'); ?>

<div class="texte">
  <u>Station de Lans-en-Vercors</u>
<div class="retour">

  <a href="station.php" style=" text-decoration: none; color: white; ">←Retour</a>

</div>

</div>

<div class="containers">

<a href="#"> <div class="container">
  <img class="imgcont" src="img/lans.jpg" alt="station lans en vercor">
<p style="font-size: 20px;margin: 0px;">Lans en vercors</p>
  <p style="margin: 0;font-size: 10px;">Vercors</p>
  </div>
  </a>

</div>
  <!-- Mini - Description -->
<p class="texte_description">
  Description : Lans en Vercors est l’une des principales portes d’entrée du Parc Naturel Régional du Vercors, ce qui fait de ce village traditionnel une destination familiale nichée dans une montagne accessible.
  Ce village de moyenne montagne a su conserver toute son authenticité. S’étageant entre 1000 et 1983m d’altitude,
  Lans en Vercors offre les atouts d’un village de montagne à seulement 30 minutes de Grenoble et à 1 h 15 de Lyon ou de Valence. </p>

<p class="texte_description">
Nombre de Remontées : 11.
</p>

<p class="texte_description">
  Tarifs des differents forfaits disponibles : ↓↓↓ (Source : <a href="https://www.lansenvercors.com" target="_blank"> https://www.lansenvercors.com</a>)
</p>

<div class="image2">
    <img class="image2" src="img/prix_lans.png" alt="Tarifs_forfait_lans-en-vercors">

  </div>
  <!-- Map personalisée -->
<p class="texte_description"> Localisation de la Station (Google Maps): </p>
  <iframe class="carte" src="https://www.google.com/maps/d/embed?mid=1bp0SWYWfJ12sXr3YhpnwfGqQW8dhyHDJ" width="1100" height="680"></iframe>

  <br>
  <br>

  <h1>Laissez un avis sur la station</h1>
  <!-- Intégration formulaire Php pour les commentaires -->
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
      $handle = fopen("comment/commentslans.html","a");
      fwrite($handle,"<div class=idea><div class=tittle>" . $name . "</div><div class=para>" . $content . "</div></div>");
      fclose($handle);

  }




          ?>
          <h1 id="commentaire"></h1>
          <?php  include "comment/commentslans.html"; ?>

  <footer> <p>Copyright <a href="https://www.instagram.com/juniorniasse/"style="text-decoration: none;">Dame Niasse</a>,<a href="https://www.facebook.com/louis.nardini.1"style="text-decoration: none;">Louis Nardini</a> ,  <a href="https://www.instagram.com/igor_recap/" style="text-decoration: none;">Igor Didier</a></p>
    <div class="hautpage"><a href="#haut-de-page">Retour vers le Haut de la page</br></a></div>
  </footer>

  </body>
</html>
