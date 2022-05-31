<?php
include '../connexion.php';
$idemprunt= $_POST["idEmprunt"];
$DateEmprunt =$_POST["DateEmprunt"];
$DateRetour=$_POST["DateRetour"];
/*$idabonne=$_POST["idabonne"];
$idlivre=$_POST["idLivre"]; */

$sql="UPDATE `emprunt` 
      SET `idEmprunt` ='$idemprunt',`DateEmprunt`='$DateEmprunt', `DateRetour` = '$DateRetour' 
	    WHERE `idEmprunt`=$idemprunt;";
if ($conn->query($sql) == TRUE) {
  header("location:menuEmprunt.php");
} else {
  echo "Erreur: Vous Pouvez Pas de modifier le cle etragner(idAbonne, idLivre)" . $sql . "<br>" . $conn->error;
}
$conn->close();
?>