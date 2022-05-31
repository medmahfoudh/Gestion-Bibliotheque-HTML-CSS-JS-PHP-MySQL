<?php 
	session_start();
	
?>
<html>
	<head>
		<title>LISTE DES EMPRUNTS</title>
		<link rel="stylesheet" href="../css/StyleAffiches.css">
		<link rel="shortcut icon" href="../Accueil/images/img.png">
		
	</head>
	<body>
	<?php
	    include '../connexion.php';
		$sql = "SELECT * FROM `emprunt`;";
		$resultat = $conn->query($sql);
		//if ($resultat->num_rows > 0) {
			// affichage pour chaque ligne
		?>
	
	<div class="container">
			<div class="glass">
		<?php
		if ($resultat->num_rows > 0) {

		?>
			<table>
			 <tr>
				<th>Id Emprunt</th>
				<th>Date Emprunt</th>
				<th>Date Retour</th>
				<th>id Abonne</th>
				<th>id Livre</th>
				<th>MODIFICATION</th>
			 </tr>
		<?php
			while($row = $resultat->fetch_assoc()) {	
		?>			
			 <tr>
				<td><?php echo($row["idEmprunt"]); ?></td>
				<td><?php echo($row["DateEmprunt"]); ?></td>
				<td><?php echo($row["DateRetour"]); ?></td>
				<td><?php echo($row["idAbonne"]); ?></td>
				<td><?php echo($row["idLivre"]); ?></td>
				<td>
				<a href="supEmprunt.php?id=<?php echo($row["idEmprunt"]);?>" onclick="return confirm('Voulez-vous supprimer?')">Supprimer</a>
                <a href="modifEmprunt_edit.php?id=<?php echo($row["idEmprunt"]);?>">Modifier</a></td> 
					
			 </tr>	
			 <tr> <td colspan = '6'><a href="saisieEmprunt.html">Ajouter un Emprunt</</td> </tr>		 
	
	    <?php
		}
		?>
			<tr> <td colspan = '6'><a href="saisieEmprunt.html">Ajouter un Emprunt</</td> </tr>
		<?php
		}elseif($resultat->num_rows == 0){
		
		?>
		
		<div class="vide">
		<h4>Il n'y a aucune Emprunts, Cliquez pour ajouter des Emprunts</h4>
				<br>
		<a href="saisieEmprunt.html">Ajouter un Emprunt</a>

		</div>
		

		<?php	
	}

	?>
		
	</div>
	</div>

	<?php 
	
	
	?>

	
</body>
</html>