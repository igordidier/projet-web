<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="station.css">
    <title>Stations des 7 Laux</title>
    <link rel="shortcut icon" href="fav.jpg">
  </head>
  <body>

<?php include('head.php'); ?>

<div class="texte">
  <u>Stations des 7 Laux</u>
<div class="retour">

  <a href="station.php" style=" text-decoration: none; color: white; ">←Retour</a>

</div>

</div>

<div class="containers">

<a href="#"> <div class="container">
    <img class="imgcont" src="img/7laux.jpg" alt="7_Laux">
<p style="font-size: 20px;margin: 0px;">Les 7 Laux</p>
    <p style="margin: 0;font-size: 10px;">Belledonne</p>
  </div>
  </a>

</div>

<p class="texte_description">
  Description: Les Sept Laux est un groupe de trois stations de sport d'hiver des Alpes situé dans la chaîne de Belledonne (Isère) à 35 km environ de Grenoble et 50 km de Chambéry sur les communes de Theys, des Adrets et de La Ferrière.
  Les Sept Laux comportent deux stations côté vallée de l'Isère (Prapoutel et Pipay) et une (Le Pleynet) de l'autre côté du massif, qui sont toutes exploitées par la SEMT7L. La station peut accueillir jusqu'à 15 000 skieurs par jour et est le plus grand domaine skiable de la Chaine de Belledonne.
  Elle s'étend sur 1 500 hectares dont 30 sont damés.
</p>

<p class="texte_description">
Nombre de Remontées : 22.
</p>

<p class="texte_description">
  Tarifs des differents forfaits disponibles : ↓↓↓ (Source:<a href="https://www.skiinfo.fr" target="_blank"> https://www.skiinfo.fr</a>)
</p>

<div class="image">
    <img class="image" src="img/prix_7laux.png" alt="Tarifs_forfait_7laux">

  </div>

  <p class="texte_description"> Localisation de la Station (Google Maps): </p>
    <iframe class="carte" src="https://www.google.com/maps/d/embed?mid=1edAAWFPsZH_KGz0RD6sh9UEIKWk_jg4W" width="1100" height="680"></iframe>
</div>

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
    $handle = fopen("comment/comments7lots.html","a");
    fwrite($handle,"<div class=idea><div class=tittle>" . $name . "</div><div class=para>" . $content . "</div></div>");
    fclose($handle);

}




        ?>
        <h1 id="commentaire"></h1>
        <?php  include "comment/comments7lots.html"; ?>

<footer> <p>Copyright Dame Niasse, Louis Nardini, Igor Didier</p>
  <div class="hautpage"><a href="#haut-de-page">Retour vers le Haut de la page</br></a></div>
</footer>


  </body>
</html>
