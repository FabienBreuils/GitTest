<html>
<head>
<title>Supprimer un Événement</title>
<meta charset="utf-8" />
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
<?php
include "connect.php";



$req="SELECT annee_evenement, date_evenement from evenement ORDER BY annee_evenement ";
$sql=$connexion->query($req)
	or die("Execution de la requete impossible");


echo"<div>
<h2 class=''>Faites votre choix</h2>";

echo"<form action='SupprimerEvenement.php' method='post'><br>";
echo"<table cellpadding='5' border='1' >";

while($ligne=$sql->fetch_assoc())
{	extract($ligne);
	echo"<tr><td valign='top'width='15%'>\n
		<input type='radio' name='date_evenement' value='$date_evenement'font size='+1'><br/><b>$date_evenement</b></font>
			</td>;
			<td>$annee_evenement
			</td>;";
		
}
		echo "</table>";
		echo "<p><input type='submit' value='Supprimer'>
				</form>	";
			
?>
</div>
</body>
</html>