<html>
<head>
	<title>Projet Avengers</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8" />
</head>
<?php
    include "connect.php";

    $sql = 'select nom_participant, annee from annee INNER JOIN  participants ON annee.participant = participants.id_participant where annee = 2016 ORDER BY nom_participant;';

    $sql1 = 'select * from evenement where annee_evenement = 2016;';

    $req = $connexion->query($sql) or die('Erreur SQL !<br />'.$sql.'<br />'.$connexion->connect_error);

    $req1 = $connexion->query($sql1) or die('Erreur SQL !<br />'.$sql.'<br />'.$connexion->connect_error);

    	?>
<body class="fond">
	<div>
	<p class="title">Le Projet Avengers :</p>
	<p class="texte">C'est la première édition du ZEVENT qui a eu lieu en 2016 et qui portais donc le nom de Projet Avengers.<br><br>
	La branche française du « projet Avengers » a lieu du 4 au 6 mars 2016, sur l’appel de Bachir Boumaaza via son programme caritatif « Gaming for Good », afin de récolter des dons pour l'ONG Save the Children à la suite des épisodes de sécheresse et famine en Éthiopie.
	Avec 16 streameurs réunis chez ZeratoR pour 34 heures de live, l'événement permet de récolter 170 770 €.<a href="https://fr.wikipedia.org/wiki/Z_Event" target="blank" class="blue">(via Wikipédia)</a></p>
	</div>
	<img src="Projet-Ave.jpg" class="fond">
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