<?php
include '../connexion.php';

$idabonne= $_POST["idabonne"]; 
$nom =$_POST["nom"];
$prenom=$_POST["prenom"];
$adresse=$_POST["adresse"];
$telephone=$_POST["telephone"];

// idAbonne est un clé étranger, donc Nous ne pouvons pas le supprimer s'il est dans le table 'emprunt'


$sql="UPDATE `abonne` 
      SET `nom`='$nom', `prenom` = '$prenom' ,
       `adresse`  = '$adresse' , `telephone` = '$telephone'
	    WHERE `idAbonne`=$idabonne";
if ($conn->query($sql) == TRUE) {
  header("location:menuAbonne.php");
} else {
  echo "Erreur: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>