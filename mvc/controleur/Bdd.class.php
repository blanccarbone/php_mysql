<?php

	try {

		$bdd = new PDO('mysql:host=localhost;dbname=test', 'Charles', 'root');
		
	} catch (Exception $e) {
		die('Erreur : ' . $e->getMessage());
		
	}

    $reponse = $bdd->query('SELECT nom, console, prix FROM jeux_video ORDER BY prix');

    while($donnees = $reponse->fetch()){
?>
    <p><strong><?php echo $donnees['nom'] . ' ';?></strong><?php echo $donnees['prix'] . ' ';?></p>


<?php
}

$reponse->closeCursor();

?>




