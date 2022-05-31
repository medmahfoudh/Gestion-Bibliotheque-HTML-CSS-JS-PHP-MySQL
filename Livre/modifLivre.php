<?php
include '../connexion.php';
session_start();
$idlivre = $_POST["idlivre"];
$titre = $_POST["titre"];
$auteur = $_POST["auteur"];
$editeur = $_POST["editeur"];
$livreecol = $_POST["livreecol"];

$sql="UPDATE `livre` 
      SET `idLivre` ='$idlivre',`titre`='$titre', `auteur` = '$auteur' , `editeur`  = '$editeur' , `Livercol` = '$livreecol'
	  WHERE `idLivre`=$idlivre;";
if ($conn->query($sql) == TRUE) {
  header("location:menuLivre.php");
} else {
  echo "Erreur: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>