
<?php     
$connexion = new mysqli("localhost:3307", "root", "", "ZEVENT");
if ($connexion->connect_errno) {
    echo "Echec lors de la connexion à MySQL : (" . $connexion->connect_errno . ") " . $connexion->connect_error;
}
?>