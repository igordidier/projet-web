<?php
include('server.php');
?>
<div class="topnav">
 <h1 id ="haut-de-page"></h1>
<a href="index.php">Acceuil</a>
<a href="station.php"><b><strong><span >Stations</span></strong></b></a>
<a href="hebergement.php">Hebergements</a>

<div class="sign">
  <?php
if (isset($_SESSION['email'])) {
  echo "
     Welcome $_SESSION[nom]";
   echo '<a href="logout.php">log out</a>';}
     else {
       echo '<a href="signin.php">sign in</a>';
       echo '<a href="login.php">log in</a>';

     }
     ?>
  </div>
  </div>
