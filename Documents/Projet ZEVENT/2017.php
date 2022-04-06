<html>
<head>
	<title>ZEVENT 2017</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8" />
</head>
<?php
    include "connect.php";

    $sql = 'select nom_participant, annee from annee INNER JOIN  participants ON annee.participant = participants.id_participant where annee = 2017 ORDER BY nom_participant;';

    $req = $connexion->query($sql) or die('Erreur SQL !<br />'.$sql.'<br />'.$connexion->connect_error);

    $sql1 = 'select * from evenement where annee_evenement = 2017;';

    $req1 = $connexion->query($sql1) or die('Erreur SQL !<br />'.$sql.'<br />'.$connexion->connect_error);


    	?>
<body class="fond">
	<div>
		<p class="title">ZEVENT 2017 :</p>
		<p class="texte">La deuxième édition du ZEVENT a eu lieu en 2017, depuis cette édition l'évènement s'appellera le ZEVENT.<br><br>
		Le Z Event a lieu du 8 au 10 septembre 2017 afin de récolter des dons pour la Croix-Rouge française alors que l'ouragan Irma vient de frapper les Antilles.<br>

		Cette fois-ci, 30 streameurs se réunissent dans un garage aménagé pour l'occasion. L'événement permet de récolter 451 851 € en 52 heures de live et est salué par le président de la République française, alors Emmanuel Macron, sur Twitter.<a href="https://fr.wikipedia.org/wiki/Z_Event" target="blank" class="blue">(via Wikipédia)</a></p>
	</div>
	<img src="zevent 2017.jpg" class="fond">
	<div>
		<br>
<?php
echo"<table cellpadding='5' border='1' class='tableau'>
	 <td class='tr'>Date événement :</td>
	<td class='tr'>Annee événement</td>
	<td class='tr'>Nombre participant</td>
	<td class='tr'>Association</td>
	<td class='tr'>Somme récoltée</td>";
while($ligne=$req1->fetch_assoc())
{	
	extract($ligne);
	$assoc = utf8_encode($assoc);	
	echo "<tr> <td class='td'>$date_evenement</td>
	<td class='td'>$annee_evenement</td>
	<td class='td'>$nombre_participant</td>
	<td class='td'>$assoc</td>
	<td class='td'>$somme_recolte €</td>
	</tr>";
}
echo"<table cellpadding='5' border='1' class='tableau'>
	 <th class ='tr'>Liste des Participants :</th>";
while($ligne=$req->fetch_assoc())
{	
	extract($ligne);	
	echo "<tr> <td class='td'>$nom_participant</td></tr>";
}
		?>
		<br>
	</div>
</body>
</html>