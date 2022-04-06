<!DOCTYPE html>
<html>
<head>
<title>Document sans titre</title>
<meta charset="utf-8" />
</head>

<body>
<?php 
include "connect.php";

$date_evenement = $_POST['date_evenement'];

echo " L'événement a été supprimé <br>";

$req="DELETE FROM evenement WHERE date_evenement = '".$date_evenement."';"; 
$sql=$connexion->query($req)
    or die("Execution de la requete impossible ".$connexion->error);

echo "<p class='center'><a href='Choix_suppr.php'><b>Supprimer un autre événement</b></a>";
 ?>
</body>
</html>