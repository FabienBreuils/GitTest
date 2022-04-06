<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ajout Événement</title>
</head>
<body>
    <?php
    include "connect.php";
    $date_evenement = $_POST['date_evenement'];
    $annee_evenement = $_POST['annee_evenement'];
    $nombre_participant = $_POST['nombre_participant'];
    $assoc = $_POST['assoc'];
    $somme_recolte = $_POST['somme_recolte'];

    $sql = 'INSERT INTO EVENEMENT (date_evenement, annee_evenement, nombre_participant, assoc, somme_recolte) value ("'.$date_evenement.'", "'.$annee_evenement.'", "'.$nombre_participant.'", "'.$assoc.'", "'.$somme_recolte.'");';

    $req = $connexion->query($sql) or die('Erreur SQL !<br />'.$sql.'<br />'.$connexion->error);

    echo " Cet Événement a été ajouté :
    <br/><li>Les dates de l'événement : $date_evenement
    <br/><li>Année de l'événement : $annee_evenement
    <br/><li>Nombre de participants : $nombre_participant
    <br/><li>Nom de l'association en collaboration : $assoc
    <br/><li>Somme récoltée durant l'événement : $somme_recolte";

    echo "<p class='center'><a href='index.php'><b>Retour au source</b></a>";
        ?>
</body>
</html>
