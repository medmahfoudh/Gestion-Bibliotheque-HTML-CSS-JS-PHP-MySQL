<?php
include '../connexion.php';



//récupération de l'id de l'étudiant
$id_e = $_GET["id"];
$sql = "SELECT * FROM `abonne` WHERE `idAbonne`='$id_e';";
$resultat = $conn->query($sql);

if ($resultat->num_rows > 0) {
  if($row = $resultat->fetch_assoc()) {
	$idabonne= $row["idAbonne"];
    $nom =$row["nom"];
    $prenom=$row["prenom"];
    $adresse=$row["adresse"];
    $telephone=$row["telephone"];
  }
}
?>
<html>
	<head> 
		<title>MODIFICATION LES ABONN&Eacute;S</title>
		<link rel="stylesheet" href="../css/stylemodif.css">
		<link rel="shortcut icon" href="../Accueil/images/img.png">
	</head>
	<body>
	<div class="container">
			<div class="glass">
		<form method="POST" action="modifAbonne.php">
			<h1>MODIFIER LES ABONN&Eacute;S</h1>
			<p>id Abonne</p><input type="number" classe = "rd" size="10" name="idabonne" value="<?php echo($idabonne); ?>"><br>
			<p>Nom</p> <input type="text" size="10" name="nom" value="<?php echo($nom); ?>"><br>
			<p>Prenom </p><input type="text" size="10" name="prenom" value="<?php echo($prenom); ?>"><br>
            <p>Adresse </p><input type="text" size="10" name="adresse" value="<?php echo($adresse); ?>"><br>
            <p>Tel&eacute;phone</p><input type="text" size="10" name="telephone" value="<?php echo($telephone); ?>"><br>
			<input type="submit" value="Enregistrer">	
	    </form>
		</div>
	</div>
	</body>
</html>