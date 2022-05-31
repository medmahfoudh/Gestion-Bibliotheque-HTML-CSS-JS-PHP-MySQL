<?php
include 'connexion.php';
//récupération du login et mot de passe
$login = $_POST["login"];
$pass = $_POST["pass"];
$sql = "SELECT nom FROM `utilisateur` ".
       "WHERE login='$login' AND pass='$pass';";
$resultat = $conn->query($sql);

if ($resultat->num_rows > 0) {
  // affichage pour chaque ligne
  if($row = $resultat->fetch_assoc()) {
	  //ouverture de session
	  session_start();
	  //enregistrement de la variable de session
	  //$_SESSION["nom"]=$row["nom"];
	  //redirection vers le menu principal
	  header("location:Homme.html");
  }
  
  
}
//Mot de Passe et Login Par défault pour faire le test 
elseif($login == 'bouna' && $pass == 'bouna2'){
	session_start();
	header("location:Homme.html");
}
else{
	header("location:index.html");
}