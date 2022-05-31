<?php 
session_start();
//récupération de l'id à supprimer
$id_s = $_GET["id"];
include '../connexion.php';

$sql = "DELETE FROM `emprunt` WHERE `idEmprunt`=$id_s;";

if ($conn->query($sql) == TRUE) {
  header("location:menuEmprunt.php");
} else {
  echo "Erreur: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>