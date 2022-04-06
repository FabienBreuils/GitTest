<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Exemple</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body class="fond">
<?php

		include "connect.php";

		$sql1 = 'select * from association;';
		
		$req1 = $connexion->query($sql1) or die('Erreur SQL !<br />'.$sql.'<br />'.$connexion->error);

		echo"<table cellpadding='5' border='1' class='tableau'>;";
			
		while($ligne=$req1->fetch_assoc())
		{	
		extract($ligne);
		$nom_assoc = utf8_encode($nom_assoc);	
		echo "<tr> <td class='td'>$id_assoc</td>
			<td class='td'>$nom_assoc</td>
			<td class='td'>$date_creation</td>
			<td class='td'>$date_apparition</td>
			</tr>";
		}
?>
</body>
</html>