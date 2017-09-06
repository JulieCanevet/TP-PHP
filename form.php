<!doctype html>
<html class="no-js" lang="fr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Mot de passe</title>
    </head>
    <body>
		
		<?php

			if(!isset($_POST['mot_de_passe'])){
				?>

				<h3>Entrez le mot de passe</h3>
				<form action="form.php" method="post">
					<input type="password" value="" name="mot_de_passe">
					<input type="submit" name="submit">
				</form>	
			<?php
			}
			elseif(isset($_POST['mot_de_passe']) && $_POST['mot_de_passe'] === 'kangourou'){
				?>
				<h2> BRAVO </h2>
				<?php
			}
			else {	
				?>
				<h3>Mauvais mot de passe</h3>
				<a href="form.php">Essaye encore</a>			
			<?php
			}
		?>
		<a href="index.php">Retour à l'accueil</a>
	</body>
</html>