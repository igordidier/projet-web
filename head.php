<div class="topnav">
 <h1 id ="haut-de-page"></h1>
<a href="index.php">Acceuil</a>
<a href="station.php"><span>Stations</span></a>
<a href="hebergement.php">Hebergements</a>
<form action="search.php">
    <input type="text" placeholder="Search.." name="search" style="padding: 15px;width: 170px;">
    <button type="submit" style="padding: 6px;width: 80px;height: 30px;"><i class="fa fa-search"></i>Rechercher</button>
  </form>
<?php
include('server.php');
?>
<div class="sign">
  <?php
if (isset($_SESSION['email'])) {

   echo '<a href="logout.php">log out</a>';
 echo '<a href="profile.php">'. $_SESSION["nom"] . '</a>';
 }
     else {
       echo '<a href="signin.php">sign in</a>';
       echo '<a href="login.php">log in</a>';


     }
     ?>
  </div>
  </div>
