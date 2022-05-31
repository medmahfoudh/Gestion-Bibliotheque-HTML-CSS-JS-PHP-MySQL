<?php
include 'C:\xampp\htdocs\MiniProjet\connexion.php';


//récupération de l'id de l'étudiant
$id_e = $_GET["id"];
$sql = "SELECT * FROM `emprunt` WHERE `idEmprunt`='$id_e';";
$resultat = $conn->query($sql);

if ($resultat->num_rows > 0) {
  if($row = $resultat->fetch_assoc()) {
	$idemprunt= $row["idEmprunt"];
	$DateEmprunt =$row["DateEmprunt"];
	$DateRetour=$row["DateRetour"];
    $idabonne=$row["idAbonne"];
    $idlivre=$row["idLivre"];
  }
}
?>
<html>
	<head> 
		<title>MODIFICATION LES EMPRUNTS</title>
		<link rel="stylesheet" href="../css/stylemodif.css">
		<link rel="shortcut icon" href="../Accueil/images/img.png">
	</head>
	<body>
	<div class="container">
			<div class="glass">
		<form method="POST" action="modifEmprunt.php">
			<h1>MODIFIER LES EMPRUNTS</h1>
			<p>id Emprunt</p><input type="number" size="10" name="idEmprunt" value="<?php echo($idemprunt); ?>"><br>
			<p>Date Emprunt</p><input type="text" size="10" name="DateEmprunt" value="<?php echo($DateEmprunt); ?>"><br>
			<p>Date Retour</p><input type="text" size="10" name="DateRetour" value="<?php echo($DateRetour); ?>"><br>
            <p>idA bonne</p><input type="text" id= "idab" size="10" name="idabonne"  value="<?php echo($idabonne); ?>" ><br>
            <p>id Livre </p><input type="text" size="10" name="idLivre" value="<?php echo($idlivre); ?>"><br>
			<input type="submit" value="Enregistrer">
	    </form>
		</div>
	</div>
	</body>
</html>