<?php
include '../connexion.php';
$idabonne = $_POST["idabonne"];
$nom = $_POST["nom"];
$prenom = $_POST["prenom"];
$adresse = $_POST["adresse"];
$telephone = $_POST["telephone"];

$sql="INSERT INTO `abonne` (`idAbonne`, `nom`, `prenom`, `adresse`, `telephone`) VALUES
      ('$idabonne', '$nom', '$prenom', '$adresse', '$telephone');";
if ($conn->query($sql) == TRUE) {
  header("location:menuAbonne.php");
} else {
  echo "Erreur: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>