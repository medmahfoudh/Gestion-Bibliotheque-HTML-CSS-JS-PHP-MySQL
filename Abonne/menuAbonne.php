<?php 
	session_start();
	
?>
<html>
	<head>
		<title>LISTE D'ABONN&Eacute;S</title>
		<link rel="stylesheet" href="../css/StyleAffiches.css">
		<link rel="shortcut icon" href="../Accueil/images/img.png">
		
	</head>
	<body>
	<?php
	    include '../connexion.php';
		$sql = "SELECT * FROM `abonne`;";
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
				<th>ID</th>
				<th>NOM</th>
				<th>PR&Eacute;NOM</th>
				<th>ADRESSE</th>
				<th>TELEPHONE</th>
				<th>MODIFICATION</th>
				
			 </tr>
		<?php
			while($row = $resultat->fetch_assoc()) {	
		?>			
			 <tr>
				<td><?php echo($row["idAbonne"]); ?></td>
				<td><?php echo($row["nom"]); ?></td>
				<td><?php echo($row["prenom"]); ?></td>
				<td><?php echo($row["adresse"]); ?></td>
				<td><?php echo($row["telephone"]); ?></td>
				<td>	
				<a href="supAbonne.php?id=<?php echo($row["idAbonne"]);?>" onclick="return confirm('Voulez-vous supprimer?')">Supprimer</a>
				<a href="modifAbonne_edit.php?id=<?php echo($row["idAbonne"]);?>">Modifier</a></td>  
				
					
			 </tr>
			 
			 	
			 		 
	    <?php
			}
			?>
				<tr> <td colspan = '6'><a href="saisieAbonne.html">Ajouter un Abonné</a></td> </tr>
			<?php
		}elseif($resultat->num_rows == 0){
		?>
		<div class="vide">
		<h4>Il n'y a aucune Abonnés, Cliquez pour ajouter des Abonnés</h4>
				<br>
		<a href="saisieAbonne.html">Ajouter un Abonné</a>

		</div>
		<?php	
	}

	?>
		
		</div>
	</div>
	</body>
</html>