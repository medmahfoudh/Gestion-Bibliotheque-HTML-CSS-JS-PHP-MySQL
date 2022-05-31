<?php
include '../connexion.php';
session_start();


//récupération de l'id de l'étudiant
$id_e = $_GET["id"];
$sql = "SELECT * FROM `livre` WHERE `idLivre`='$id_e';";
$resultat = $conn->query($sql);

if ($resultat->num_rows > 0) {
  if($row = $resultat->fetch_assoc()) {
	$idlivre= $row["idLivre"];
	$titre =$row["titre"];
	$auteur=$row["auteur"];
    $editeur=$row["editeur"];
    $livreecol=$row["Livercol"];
  }
}
?>
<html>
	<head> 
		<title>MODIFICATION DES LIVRES</title>
		<link rel="stylesheet" href="../css/stylemodif.css">
		<link rel="shortcut icon" href="../Accueil/images/img.png">
	</head>
	<body>
	<div class="container">
			<div class="glass">
		<form method="POST" action="modifLivre.php">
			<h1>MODIFIER LES LIVRES</h1>
			<p>IdLivre</p><input type="number" size="10" name="idlivre" value="<?php echo($idlivre); ?>"><br>
			<p>Titre </p><input type="text" size="10" name="titre" value="<?php echo($titre); ?>"><br>
			<p>Auteur</p><input type="text" size="10" name="auteur" value="<?php echo($auteur); ?>"><br>
            <p>Editeur</p><input type="text" size="10" name="editeur" value="<?php echo($editeur); ?>"><br>
            <p>Livre Ecol</p><input type="text" size="10" name="livreecol" value="<?php echo($livreecol); ?>"><br>
			<input type="submit" value="Enregistrer">	
	    </form>
		</div>
	</div>
	</body>
</html>