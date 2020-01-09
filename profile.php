<?php include('head.php'); ?>
<?php


  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "il Faut d'abord crée un compte";

  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>

<!DOCTYPE html>
<html lang="" dir="ltr">
  <head>
    <link rel="stylesheet" href="station.css">
    <title>Search</title>
    <link rel="shortcut icon" href="fav.jpg">
    <meta charset="utf-8">
    <title>Profile <?php echo ucfirst("$_SESSION[nom]"); ?></title>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
  </head>
  <body>



<div class="profile">

  <h1><?php echo ucfirst("$_SESSION[nom]"); ?></h1>

<h2>Information du compte:</h2>
<br>
<p>Email: <?php echo "$_SESSION[email]"; ?></p>
<br>

<p>Nom: <?php echo "$_SESSION[nom]"; ?></p>
<br>

<p>Prenom: <?php echo "$_SESSION[prenom]"; ?></p>

<button style="border-radius: 25px;background-color: rgb(0, 149, 255);font-size: 20;font-family: fantasy;">Modifiéle profile</button>


<script>
$( "button" ).click(function() {
  $( "#motif" ).show( "slow" );
});
</script>

<form id="motif" action="" method="post" style="display: none">
  <label for="NOM">Nom</label>
  <input type="text" name="nom" value="" required>
  <br>
  <br>
  <label for="PRENOM">Prenom</label>
  <input type="text" name="prenom" value="" required>
  <br>
  <br>
  <label for="EMAIL">Email</label>
  <input type="text" name="email" value="" required>
  <br>
  <br>
  <label for="mdp">Password</label>
  <input type="password" name="mdp" value="" required>
  <br>
  <br>
  <label for="mdpconfirm">Confirm Password</label>
  <input type="password" name="confirm_mdp" value="" required>
  <br>
  <br>
  <input type="submit" name="modifier_compte" value="Modifié" style="
      border-radius: 25px;
      background-color: rgb(0, 149, 255);
      font-size: 25;
      font-family: fantasy;
      margin: : 10px;
  ">
</form>



</div>
<?php
if (isset($msg2)) echo "<div style='color:white;text-align:center;background-color: red;width: 300px;margin: auto;border: 2px solid;border-radius: 25px;margin-top: 15px;'>$msg2</div>";
?>

<footer> <p>Copyright <a href="https://www.instagram.com/juniorniasse/"style="text-decoration: none;">Dame Niasse</a>,<a href="https://www.facebook.com/louis.nardini.1"style="text-decoration: none;">Louis Nardini</a> ,  <a href="https://www.instagram.com/igor_recap/" style="text-decoration: none;">Igor Didier</a></p>
  <div class="hautpage"><a href="#haut-de-page">Retour vers le Haut de la page</br></a></div>
</footer>
  </body>
</html>
