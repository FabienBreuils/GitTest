<!DOCTYPE html>
<html>
<head>
	<title>ZEVENT 2021</title>
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
		<p class="title">ZEVENT 2021 :</p>
		<p class="texte">Annoncée le 14 octobre, l'édition 2021 de l'événement se déroule du 29 au 31 octobre suivant à La Grande-Motte, avec Action contre la faim pour association bénéficiaire.<br><br>
		Un concert en faveur de l'organisation humanitaire, réunissant des prestations du musicien PV Nova et de la streameuse LittleBigWhale, du groupe LEJ, et, enfin, des rappeurs Kikesa et Fianso, est joué 	le 28 octobre, également à La Grande-Motte, devant un public de près de 400 personnes. Sa diffusion sur Internet est suivie par plus de 100 000 spectateurs.<br><br>

		Une heure après le début de l'événement, près de 500 000 € avaient été collectés, et la somme de 2 millions d'euros est réunie en un peu plus de 24 heures. L'essentiel des donations est réalisé dans les dernières heures du marathon : au 31 octobre à midi, 3 millions d'euros avaient été récoltés — somme qui s'élevait à 4,5 millions d'euros à 20h, puis à 9,5 millions d'euros peu avant minuit en comptant la vente de produits dérivés.<br><br>

		Lors de l'événement, 450 000 spectateurs suivent en direct une diffusion du vidéaste Inoxtag, battant le record d'audience pour un stream francophone sur Twitch. Ce dernier suscite cependant une polémique en raison de propos considérés comme misogyne qu'il tient durant son live alors qu'il discute avec une actrice ne parlant pas français. Dans le même temps publiquement critiqué pour cette raison par une streameuse de l'événement, celle-ci subit une vague de harcèlement dans les heures qui suivent sa prise de position. Des médias spécialisés comme Madmoizelle et Gamekult mettent alors en cause la réaction des organisateurs de l'événement vis-à-vis de la polémique, qu'ils jugent trop lente et trop peu ferme, tout en dénonçant certaines activités récurrentes au sein du Z Event qu'ils considèrent comme étant sexistes.<br><br>

		À la fin de l'édition, ZeratoR réunit plus de 700 000 spectateurs et bat à son tour le record d'audience nouvellement établi; la diffusion se hisse par ailleurs à la 3e place du live ayant réuni le plus de spectateurs simultanés sur Twitch à l'échelle mondiale. Toutes diffusions confondues, l'événement cumulait, à son pic d'audience, plus de 1 million de spectateurs simultanés.<br><br>

		Au total, un peu moins de 200 000 tee-shirts à l'effigie de l'événement sont vendus, rapportant près de 2,7 millions d'euros. Le Z Event 2021 réunit, au cumulé, plus de 10 millions d'euros pour l'association.<a href="https://fr.wikipedia.org/wiki/Z_Event" target="blank" class="blue">(via Wikipédia)</a></p>
	</div>
	<img src="zevent2021.jpg" class="fond">
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