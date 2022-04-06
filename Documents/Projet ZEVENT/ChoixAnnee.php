<html>
<head>
	<title>Choix Année</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<?php
    include "connect.php";

    $sql = 'select annee_evenement from evenement;';

    $req = $connexion->query($sql) or die('Erreur SQL !<br />'.$sql.'<br />'.$connexion->connect_error);

?>
<body class="fond">
	<div>
		<p class="title"> Les différents ZEVENT </p>
	</div>
	<div>
<?php
echo"<table cellpadding='5' border='1' class='tableau'>
	 <th class ='tr'>Choisissez un événement :</th>";
while($ligne=$req->fetch_assoc())
{	
	extract($ligne);	
	echo "<tr><td><a href='".$annee_evenement.".php' target='blank' class='td-sp'>$annee_evenement</td>
	</tr>";
}
		?>
	</div>
</body>
</html>