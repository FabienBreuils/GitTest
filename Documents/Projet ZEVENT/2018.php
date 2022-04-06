<html>
<head>
	<title>ZEVENT 2018</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<?php
    include "connect.php";

    $sql = 'select nom_participant, annee from annee INNER JOIN  participants ON annee.participant = participants.id_participant where annee = 2018 ORDER BY nom_participant;';

    $sql1 = 'select * from evenement where annee_evenement = 2018;';

    $req = $connexion->query($sql) or die('Erreur SQL !<br />'.$sql.'<br />'.$connexion->connect_error);
    
    $req1 = $connexion->query($sql1) or die('Erreur SQL !<br />'.$sql.'<br />'.$connexion->connect_error);

    	?>
<body class="fond">
	<div>
		<p class="title">ZEVENT 2018 :</p>
		<p class="texte">La troisième édition du ZEVENT a eu lieu du 9 au 11 novembre 2018 afin de récolter des dons pour l'association Médecins sans Frontières. 38 streameurs participent à cette édition organisée dans une salle mise à disposition par la région Occitanie. En 53 heures, l'événement permet de récolter au total 1 094 731 €. La somme réunie a essentiellement servi à reconstruire intégralement un hôpital détruit au Yémen.<a href="https://fr.wikipedia.org/wiki/Z_Event" target="blank" class="blue">(via Wikipédia)</a></p>
	</div>
	<img src="zevent2018.jpg" class="fond">
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