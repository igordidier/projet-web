  <!-- Script pour la Page 2 Alpes  -->
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="station.css">
    <title>Station des 2 Alpes</title>
    <link rel="shortcut icon" href="fav.jpg">
  </head>
  <body>
    <!-- Intégration de la barre de navigation -->
<?php include('head.php'); ?>

<div class="texte">
  <u>Station des 2 Alpes</u>
<div class="retour">

  <a href="station.php" style=" text-decoration: none; color: white; ">←Retour</a>

</div>

</div>

<div class="containers">

<a href="#"> <div class="container">
  <img class="imgcont" src="img/2alpes.jpg" alt="station les 2 alpes">
<p style="font-size: 20px;margin: 0px;">Les Deux Alpes</p>
  <p style="margin: 0;font-size: 10px;">Oisans</p>
  </div>
  </a>

</div>
  <!-- Mini - Description -->
<p class="texte_description">
  Description : Les Deux Alpes est une station de sports d'hiver française située en Oisans, dans le massif des Écrins. Localisée dans le département de l’Isère et la région d’Auvergne-Rhône-Alpes,
  elle se trouve à 64 km au sud-est de Grenoble et est desservie pour ses clients étrangers par l'aéroport de Grenoble-Isère.
  Située à 1 650 m d’altitude avec des remontées mécaniques desservant le domaine skiable jusqu’à 3 568 m via un funiculaire souterrain et plusieurs téléphériques.
  La station, qui possède l’un des plus grands glaciers skiables d’Europe, est très réputée en France pour son ski d’été et son domaine d'altitude particulièrement accessible, même aux débutants. </p>

<p class="texte_description">
Nombre de Remontées : 51.
</p>

<p class="texte_description">
  Tarifs des differents forfaits disponibles : ↓↓↓ (Source : <a href="https://www.les2alpes.com" target="_blank"> https://www.les2alpes.com</a>)
</p>

<div class="image">
    <img class="image" src="img/prix_2alpes.png" alt="Tarifs_forfait_2Alpes">

  </div>
  <!-- Map personalisée -->
<p class="texte_description"> Localisation de la Station (Google Maps): </p>
  <iframe class="carte" src="https://www.google.com/maps/d/embed?mid=1MV6_JHVXlzZfTb0_IfoDcQzd7kNFTmdA" width="1100" height="680"></iframe>


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
    $handle = fopen("comment/comments2aples.html","a");
    fwrite($handle,"<div class=idea><div class=tittle>" . $name . "</div><div class=para>" . $content . "</div></div>");
    fclose($handle);

}




        ?>
        <h1 id="commentaire"></h1>
        <?php  include "comment/comments2aples.html"; ?>


        <footer> <p>Copyright Dame Niasse, Louis Nardini, Igor Didier</p>
          <div class="hautpage"><a href="#haut-de-page">Retour vers le Haut de la page</br></a></div>
        </footer>

  </body>
</html>
