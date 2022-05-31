<?php
include '../connexion.php';
$idEmprunt = $_POST["idEmprunt"];
$DateEmprunt = $_POST["DateEmprunt"];
$DateRetour = $_POST["DateRetour"];
$idabonne = $_POST["idabonne"];
$idlivre = $_POST["idLivre"];

$sql="INSERT INTO `emprunt` (`idEmprunt`, `DateEmprunt`, `DateRetour`, `idAbonne`, `idLivre`) VALUES
      ('$idEmprunt', '$DateEmprunt', '$DateRetour', '$idabonne', '$idlivre');";
if ($conn->query($sql) == TRUE) {
  header("location:menuEmprunt.php");
} else {
  header("location:erreur.html");
  //echo "Erreur: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>