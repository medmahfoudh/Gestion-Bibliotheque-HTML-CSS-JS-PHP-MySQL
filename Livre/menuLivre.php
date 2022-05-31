<?php 
include '../connexion.php';
	session_start();
	
?>
<html>
	<head>
		<title>LISTE DES LIVRES</title>
		<link rel="stylesheet" href="../css/StyleAffiches.css">
		<link rel="shortcut icon" href="../Accueil/images/img.png">
	</head>
	<body>
	<?php
	    
		$sql = "SELECT * FROM `livre`;";
		$resultat = $conn->query($sql);
		
			// affichage pour chaque ligne
		?>
	
	<div class="container">
			<div class="glass">
			<?php
			if ($resultat->num_rows > 0) {

			?>
	
			<table>
			 <tr>
				<th>Id Livre</th>
				<th>Titre</th>
				<th>Auteur</th>
				<th>Editeur</th>
				<th>Livre Col</th>
				<th>MODIFICATION</th>
			 </tr>
		<?php
			while($row = $resultat->fetch_assoc()) {	
		?>			
			 <tr>
				<td><?php echo($row["idLivre"]); ?></td>
				<td><?php echo($row["titre"]); ?></td>
				<td><?php echo($row["auteur"]); ?></td>
				<td><?php echo($row["editeur"]); ?></td>
				<td><?php echo($row["Livercol"]); ?></td>
				<td>
					
				<a href="supLivre.php?id=<?php echo($row["idLivre"]);?>" onclick="return confirm('Voulez-vous supprimer?')">Supprimer</a>
               <a href="modifLivre_edit.php?id=<?php echo($row["idLivre"]);?>">Modifier</a></td> 
					
			 </tr>			 
	
	    <?php
			}
		?>
				<tr><td colspan = '6'><a href="saisieLivre.html">Ajouter un Livre</a></td> </tr>
		<?php


		}elseif($resultat->num_rows == 0){
		?>
		<div class="vide">
		<h4>Il n'y a aucune Livre, Cliquez pour ajouter des Livres</h4>
				<br>
		<a href="saisieLivre.html">Ajouter un Livre</a>

		</div>
		

		<?php	
			}

		?>
			
		</div>
		<div>
	</body>
</html>