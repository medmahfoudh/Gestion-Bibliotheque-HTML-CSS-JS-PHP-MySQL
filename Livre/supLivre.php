
<?php 
include '../connexion.php';
session_start();
//récupération de l'id à supprimer
$id_s = $_GET["id"];


$sql = "DELETE FROM `livre` WHERE `idLivre`=$id_s;";

if ($conn->query($sql) == TRUE) {
  header("location:menuLivre.php");
} else {
  echo "Erreur: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>