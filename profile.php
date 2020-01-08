<?php include('head.php'); ?>
<?php


  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "il Faut d'abord crée un compte";
  	header('location: login.php');
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
    <title></title>
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



<form id="mofif" action="" method="post">
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
  ">
</form>


</div>



  </body>
</html>
