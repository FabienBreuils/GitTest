<?php
$connexion= new mysqli("localhost","root","","smi")
	or die ("connexion impossible");

$NomUtilisateur=$_POST['nom_utilisateur'];
$MotDePasse=$_POST['Mdp'];
$Requete1="Select nom_utilisateur From connexion
			Where nom_utilisateur='".$nom_utilisateur."'";
$Resultat1=$connexion->query($Requete1)
			or die("impossible d'executer la requête");

if($Resultat1->num_rows >= 1)
{ 
	$Requete2="Select login From connexion 
			Where login='$NomUtilisateur' and password='$MotDePasse'";
	$Resultat2=$connexion->query($Requete2);
			
	if($Resultat2->num_rows == 1){
		 header("Location:ChoixType.php"); //redirection vers ChoixType.php
	}
	else{
		header("Location:login_form1.html"); //redirection vers login_form1.htm
	}
}
else{
	header("Location:index.php");		
}

?>		

