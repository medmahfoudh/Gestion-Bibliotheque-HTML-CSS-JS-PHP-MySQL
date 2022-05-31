
<?php 

//récupération de l'id à supprimer
$id_s = $_GET["id"];
include '../connexion.php';

$sql = "DELETE FROM `abonne` WHERE `idAbonne`=$id_s;";

if ($conn->query($sql) == TRUE) {
  header("location:menuAbonne.php");
} else {
  echo "Erreur: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>