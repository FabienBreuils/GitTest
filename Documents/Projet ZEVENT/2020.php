<!DOCTYPE html>
<html>
<head>
	<title>ZEVENT 2020</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<?php
    include "connect.php";

    $sql = 'select nom_participant, annee from annee INNER JOIN  participants ON annee.participant = participants.id_participant where annee = 2020 ORDER BY nom_participant;';

    $sql1 = 'select * from evenement where annee_evenement = 2020;';

    $req = $connexion->query($sql) or die('Erreur SQL !<br />'.$sql.'<br />'.$connexion->connect_error);
    
    $req1 = $connexion->query($sql1) or die('Erreur SQL !<br />'.$sql.'<br />'.$connexion->connect_error);

    	?>
<body class="fond">
	<div>
		<p class="title">ZEVENT 2020 :</p>
		<p class="texte">En raison de la pandémie de Covid-19, l'organisation d'une édition 2020 est d'abord incertaine. Le 4 octobre 2020, l'événement est annoncé pour une tenue du 16 au 18 octobre 2020 à Montpellier, et son bénéficiaire sera l'association Amnesty International France.<br><br>

		Afin de limiter les risques de propagation, les 85 participants (comprenant les 54 streameurs et les membres de l'équipe) doivent obtenir un résultat négatif au test PCR. L'événement se déroule pour la première fois dans un hôtel, dont les participants ne peuvent pas sortir jusqu'à son terme. Les streameurs cas contacts ou ayant des symptômes sont autorisés à participer à l'événement à distance, depuis chez eux.<br><br>

		L'événement, marqué notamment par la présence de Samuel Étienne le 17 octobre, réunit 5 724 377 € en 55 heures; plus de 120 000 tee-shirts à l'effigie de l'événement sont vendus pour une valeur de 2,1 millions d'euros.<a href="https://fr.wikipedia.org/wiki/Z_Event" target="blank" class="blue">(via Wikipédia)</a></p>
	<div>
	<img src="zevent2020.jpg" class="fond">
	<div>
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