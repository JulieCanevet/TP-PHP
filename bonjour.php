<h3>TEST</h3>
<p>Bonjour<br />
<?php 
	
	if(isset($_GET['nom']) && isset($_GET['prenom']) && isset($_GET['repeter'])) {

			$_GET['repeter'] = (int) $_GET['repeter'];

		if (1<=$_GET['repeter'] && $_GET['repeter']<=100) {

			for($i=0; $i<$_GET['repeter']; $i++) {
					echo $_GET['prenom'] . ' ' . $_GET['nom'] . ' :)<br />' ;
			}
		}
		
		else {
		echo 'impossible d\'afficher les données';
		}
	}

	else {
		echo 'impossible d\'afficher les données';
	}

?> </p>