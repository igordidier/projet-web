<!-- Script pour la page deconnexion (Log Out) -->
<?php
session_start();
session_destroy();
header("location:/station.php");
exit();
?>
