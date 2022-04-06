<!DOCTYPE html>
<html>
<head>
	<title>Présentation ZEVENT</title>
	<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body class="fond">
	<img src="z-event-2.jpg"  class="fond">
	<div>
		<p class="title" >Le ZEVENT c'est quoi ?</p>
		<p> feur</p>
		<p class="texte">Le Z Event est un projet caritatif créé par Adrien Nougaret et Alexandre Dachary (respectivement connus sous les pseudonymes ZeratoR et Dach) ayant pour objectif de réunir des streameurs francophones afin de récolter des dons qui permettront de soutenir une association caritative. Il est organisé sur le site de streaming Twitch, dont il détient le record mondial de l'événement caritatif le plus lucratif depuis 2019.<br><br>
		La première édition a eu lieu en 2016 sous le nom Projet Avengers. L'événement s'est déroulé au profit, successivement, de Save the Children, la Croix-Rouge française, Médecins sans frontières, l'institut Pasteur, Amnesty International France et Action contre la faim. <a href="https://fr.wikipedia.org/wiki/Z_Event" target="blank" class="blue">(via Wikipédia)</a></p>
		<p class="title"><strong>Fonctionnement de l'évènement :</strong></p><br>
		<p class="texte">Le Z Event est un marathon caritatif organisé sur trois jours depuis l'édition 2016 et qui a pour but de réunir des streameurs francophones afin de récolter des dons reversés à une association. L'événement est organisé sur le site de streaming Twitch où tous les streameurs présents diffusent simultanément un flux vidéo, dont le contenu est principalement consacré à des jeux vidéo. En plus des dons réalisés, des produits dérivés sont aussi vendus au profit de l'association.<br><br>
		Depuis 2019, le Z Event détient le record mondial de l’événement caritatif le plus lucratif sur Twitch.</p>
	</div>
	<div>
		<p class="title">Les différents ZEVENT :</p>
		
		<?php

		include "connect.php";

		$sql1 = 'select * from evenement order by annee_evenement;';
		
		$req1 = $connexion->query($sql1) or die('Erreur SQL !<br />'.$sql.'<br />'.$connexion->error);
		
		echo"<table cellpadding='5' border='1' class='tableau'>
			<td class='tr'>Date événement :</td>
			<td class='tr'>Annee événement</td>
			<td class='tr'>Association</td>
			<td class='tr'>Somme récoltée</td>";
		while($ligne=$req1->fetch_assoc())
		{	
		extract($ligne);
		$assoc = utf8_encode($assoc);	
		echo "<tr> <td class='td'>$date_evenement</td>
			<td class='td'>$annee_evenement</td>
			<td class='td'>$assoc</td>
			<td class='td'>$somme_recolte €</td>
			</tr>";
		}
		?>
		</table>
	</div>
	</br>
	<div class="tableau">
		<align = center class="tableau"><a href="ChoixAnnee.php" target="blank" class="td-sp">Choisir une année</a>
		</br>	
	</div>
	<div class="tableau">
		<align = center class="tableau"><a href="Choix_suppr.php" target="blank" class="td-sp">Supprimer un Événement</a>
		</br>	
	</div>
	<div >
		<form action="ajoutEvenement.php" method="post"class="tableau" >
			<p><table class="tableau">
				<th class="tr">Ajouter un événement</th>
<tr><td align='right' class="texte">Date de l'Événement :</td>
	<td><input type="text" name="date_evenement" size="40" maxlength="255">
	</td>
	<tr><td align="right" class="texte"> Année de L'Événement : </td>
<td><input type="text" name="annee_evenement" size="40" maxlength="255">
</td>
</tr>
<tr><td align="right" class="texte"> Nombre de participant : </td>
<td><input type="text" name="nombre_participant" size="40" maxlength="255">
</td>
</tr>
<tr><td align="right" class="texte"> Nom de l'Association : </td>
<td><input type="text" name="assoc" size="40" maxlength="255">
</td>
</tr>
<tr><td align="right" class="texte"> Somme Récoltée : </td>
<td><input type="text" name="somme_recolte" size="40" maxlength="255">
</td>
</tr>
</table>
</br>
<input type="submit" value="Enregistrer un nouvel événement">
		</form>
	</div>
	
</body>
</html>