<?php
include '../connexion.php';
session_start();

$idlivre = $_POST["idlivre"];
$titre = $_POST["titre"];
$auteur = $_POST["auteur"];
$editeur = $_POST["editeur"];
$livreecol = $_POST["livreecol"];

$sql="INSERT INTO `livre` (`idLivre`, `titre`, `auteur`, `editeur`, `Livercol`) VALUES
      ('$idlivre', '$titre', '$auteur', '$editeur', '$livreecol');";
if ($conn->query($sql) == TRUE) {
  header("location:menuLivre.php");
} else {
  echo "Erreur: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>