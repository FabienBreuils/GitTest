<!DOCTYPE html>
<html>
<head>
	<title>ZEVENT 2019</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<?php
    include "connect.php";

    $sql = 'select nom_participant, annee from annee INNER JOIN  participants ON annee.participant = participants.id_participant where annee = 2019 ORDER BY nom_participant;';

    $sql1 = 'select * from evenement where annee_evenement = 2019;';

    $req = $connexion->query($sql) or die('Erreur SQL !<br />'.$sql.'<br />'.$connexion->connect_error);

    $req1 = $connexion->query($sql1) or die('Erreur SQL !<br />'.$sql.'<br />'.$connexion->connect_error);

    	?>
<body class="fond">
	<div>
		<p class="title">ZEVENT 2019 :</p>
		<p class="texte">À la suite de l’édition 2018, les organisateurs ont reçu plus de 400 sollicitations de la part d'organisations non gouvernementales. Après l’examen de ces dernières, c’est l’institut Pasteur qui a été choisi. L’édition 2019 du Z Event a eu lieu du 20 au 22 septembre 2019 à Montpellier.
		En tout, 55 streameurs se sont réunis dans une salle mise à disposition par la Métropole de Montpellier pour participer à cette édition, parmi lesquels Gotaga, Squeezie, Antoine Daniel et le Joueur du Grenier, pour un événement d'une durée totale de 54 heures.<br><br>
		Au total, ce sont 3 509 878 € qui sont récoltés, faisant du Z Event 2019 l’événement caritatif le plus lucratif du monde sur Twitch à cette date. Selon Jean-François Chambon, directeur de la communication et du mécénat à l'institut Pasteur, un tiers du budget de l'institut provient des donations et la somme réunie par le Z Event représente environ 10 % de la collecte annuelle opérée auprès du public; un million d'euros permet de mettre en place un centre de recherches avec une douzaine de chercheurs pendant une année. Sur le compte Twitter de la présidence de la république, Emmanuel Macron félicite l'initiative comme pour l'édition de 2017.<a href="https://fr.wikipedia.org/wiki/Z_Event" target="blank" class="blue">(via Wikipédia)</a></p>
	</div>
	<img src="zevent2019.jpg" class="fond">
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